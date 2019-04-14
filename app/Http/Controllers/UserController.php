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

    public function new(){
        return view('users.new');
    }

    public function confirm(\App\Http\Requests\UserRequest $request){
        $data = $request->all();
        if (array_key_exists('is_admin', $data) == false){
            $data['is_admin'] = '';
        }
        if (array_key_exists('is_manager', $data) == false){
            $data['is_manager'] = '';
        }

        return view('users.confirm')->with($data);
    }

    public function create(Request $request)
    {
        $user = new \App\User;

        $user->name = $request->name;
        $user->email = $request->name;
        $user->is_admin = $request->is_admin;
        $user->is_manager = $request->is_manager;
        $user->save();

        return redirect()->to('users');
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
