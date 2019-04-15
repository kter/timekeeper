@extends('layouts.layout')
@section('title', 'Tutrial for beginner')
@section('content')
    <div class="page-header" style="margin-top:-30px;padding-bottom:0px;">
        <h1><small>社員登録確認</small></h1>
    </div>
    <form action="create" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <input type="hidden" name="name" value="{{$name}}">
        <input type="hidden" name="email" value="{{$email}}">
        <input type="hidden" name="is_admin" value="{{$is_admin}}">
        <input type="hidden" name="is_manager" value="{{$is_manager}}">
        <div class="row">
            <label class="col-sm-4 control-label">お名前</label>
            <div class="col-sm-8">{{$name}}</div>
        </div>
        <div class="row">
            <label class="col-sm-4 control-label">メールアドレス</label>
            <div class="col-sm-8">{{$email}}</div>
        </div>
        <div class="row">
            <label class="col-sm-4 control-label">管理者フラグ</label>
            @if ($is_admin)
                <div class="col-sm-8">ON</div>
            @else
                <div class="col-sm-8">OFF</div>
            @endif
        </div>
        <div class="row">
            <label class="col-sm-4 control-label">マネージャーフラグ</label>
            @if ($is_manager)
                <div class="col-sm-8">ON</div>
            @else
                <div class="col-sm-8">OFF</div>
            @endif
        </div>
        <div class="row" style="margin-top: 30px;">
            <div class="col-sm-offset-4 col-sm-8">
                <input type="submit" name="button1" value="登録" class="btn btn-primary btn-wide" />
            </div>
        </div>
    </form>
@endsection
