<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class LoginController extends Controller
{
    public function new()
    {
        \Log::info('ログ出力テスト');
        return view('login.new');
    }

    public function create(Request $request)
    {
        \Log::info('ログ出力テスト');
#        $user = User::where('email', $request->email);
#        if (Hash::check($request->password, $user->password)) {
#            \Log::info('ログ出力テスト');
#        }
    }

    public function destroy($message)
    {
        //
    }
}

