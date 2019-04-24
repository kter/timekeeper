<?php

namespace App\Http\Controllers;

use App\Facades\Auth2;
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
            Auth2::log_in($user);
            return redirect('/users');
        } else {
            return view('login.new')->withErrors(array('password' => 'パスワードが間違えています。'));
        }
    }

    public function destroy()
    {
        Auth2::log_out();
        return redirect('/users');
    }
}

