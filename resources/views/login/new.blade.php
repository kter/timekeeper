@extends('layouts.layout')
@section('title', 'Tutrial for beginner')
@section('content')
    <div class="page-header" style="margin-top:-30px;padding-bottom:0px;">
        <h1><small>社員ログイン</small></h1>
    </div>
    <form action="login" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group @if($errors->has('email')) has-error @endif">
            <label for="email" class="col-md-3 control-label">メールアドレス</label>
            <div class="col-sm-9">
                <input type="email" class="form-control" id="email" name="email">
                @if($errors->has('email'))<span class="text-danger">{{ $errors->first('email') }}</span> @endif
            </div>
        </div>
        <div class="form-group @if($errors->has('password')) has-error @endif">
            <label for="email" class="col-md-3 control-label">パスワード</label>
            <div class="col-sm-9">
                <input type="password" class="form-control" id="email" name="password">
                @if($errors->has('password'))<span class="text-danger">{{ $errors->first('password') }}</span> @endif
            </div>
        </div>
        <div class="col-md-offset-3 text-center"><button class="btn btn-primary">ログイン</button></div>
    </form>
@endsection
