<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Http\Requests;
use Psr\Log\NullLogger;

class LoginController extends Controller
{
    public function new()
    {
        return view('login.new');
    }

    public function create(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if (is_null($user)) {
            // TODO: throttling
            return view('login.new')->withErrors(array('email' => '存在しないメールアドレスです。'));
        }

        if (Hash::check($request->password, $user->password)) {
            $this->log_in($user);
            return redirect('/users');
        } else {
            return view('login.new')->withErrors(array('password' => 'パスワードが間違えています。'));
        }
    }

    public function destroy()
    {
        $this->log_out();
        return redirect('/users');
    }

    private function log_in(\App\Models\User $user){
        session()->put('user_id', $user->id);
    }

    private function log_out(){
        if (session()->has('user_id')) {
            session()->forget('user_id');
        }
    }

    private function logged_in(){
        if (session()->has('user_id')) {
            return true;
        } else {
            return false;
        }

    }

    private function current_user(){
        if (session()->has('user_id')) {
            return User::where('id', session('user_id'))->first();
        } else {
            return null;
        }
    }
}

