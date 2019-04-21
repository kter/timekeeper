<?php

namespace App\Services;

use App\Models\User;

class Auth2 {
    public function log_in(\App\Models\User $user){
        session()->put('user_id', $user->id);
    }

    public function log_out(){
        if (session()->has('user_id')) {
            session()->forget('user_id');
        }
    }

    public function logged_in(){
        if (session()->has('user_id')) {
            return true;
        } else {
            return false;
        }

    }

    public function current_user(){
        if (session()->has('user_id')) {
            return User::where('id', session('user_id'))->first();
        } else {
            return null;
        }
    }
}