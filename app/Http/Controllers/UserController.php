<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    public function index(){

        $query = \App\User::query();
        $users = $query->orderBy('id', 'desc')->paginate(10);
        return view('users.index')->with('users', $users);
    }

    public function create()
    {
        //
    }

    public function store()
    {
        //
    }

    public function show($message)
    {
        //
    }

    public function edit($message)
    {
        //
    }

    public function update($message)
    {
        //
    }

    public function destroy($message)
    {
       //
    }
}
