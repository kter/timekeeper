@extends('layouts.layout')
@section('title', 'Tutrial for beginner')
@section('content')
    <div class="page-header" style="margin-top:-30px;padding-bottom:0px;">
        <h1><small>社員一覧</small></h1>
    </div>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>No</th>
            <th>name</th>
            <th>email</th>
            <th>is_admin</th>
            <th>is_manager</th>
            <th>opration</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td><td>{{$user->name}}</td><td>{{$user->email}}</td><td>{{$user->is_admin}}</td><td>{{$user->is_manager}}</td>
                <td>
                    <a href="" class="btn btn-primary btn-sm">詳細</a>
                    <a href="" class="btn btn-primary btn-sm">編集</a>
                    <a href="" class="btn btn-danger btn-sm">削除</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <!-- page control -->
    {!! $users->render() !!}

@endsection
