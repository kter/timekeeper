@extends('layouts.layout')
@section('title', 'Tutrial for beginner')
@section('content')
    <div class="page-header" style="margin-top:-30px;padding-bottom:0px;">
        <h1><small>社員登録</small></h1>
    </div>
    <form action="confirm" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group @if($errors->has('name')) has-error @endif">
            <label for="name" class="col-md-3 control-label">お名前</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="name" name="name">
                @if($errors->has('name'))<span class="text-danger">{{ $errors->first('name') }}</span> @endif
            </div>
        </div>
        <div class="form-group @if($errors->has('email')) has-error @endif">
            <label for="email" class="col-md-3 control-label">メールアドレス</label>
            <div class="col-sm-9">
                <input type="email" class="form-control" id="email" name="email">
                @if($errors->has('email'))<span class="text-danger">{{ $errors->first('email') }}</span> @endif
            </div>
        </div>
        <div class="form-group @if($errors->has('is_admin')) has-error @endif">
            <label for="is_admin" class="col-md-3 control-label">管理者フラグ</label>
            <div class="col-sm-9">
                <input type="checkbox" class="form-control" id="is_admin" name="is_admin">
                @if($errors->has('is_admin'))<span class="text-danger">{{ $errors->first('is_admin') }}</span> @endif
            </div>
        </div>
        <div class="form-group @if($errors->has('is_manager')) has-error @endif">
            <label for="is_manager" class="col-md-3 control-label">マネージャーフラグ</label>
            <div class="col-sm-9">
                <input type="checkbox" class="form-control" id="is_manager" name="is_manager">
                @if($errors->has('is_manager'))<span class="text-danger">{{ $errors->first('is_manager') }}</span> @endif
            </div>
        </div>
        <div class="col-md-offset-3 text-center"><button class="btn btn-primary">確認</button></div>
    </form>
@endsection
