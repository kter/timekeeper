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
        \Log::info('ログ出力テスト');
        return view('login.new');
    }

    public function create(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if (is_null($user)) {
            return view('login.new')->withErrors(array('email' => '存在しないメールアドレスです。'));
        }
        if (Hash::check($request->password, $user->password)) {
            \Log::info('ログ出力テスト');
        }
    }

    public function destroy($message)
    {
        //
    }
}

