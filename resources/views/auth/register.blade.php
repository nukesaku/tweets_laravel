@extends('layouts.default')

@section('page-title')
    ユーザー登録
@endsection

@section('content')

<!-- resources/views/auth/register.blade.php -->

<form method="POST" action="/auth/register">
    {!! csrf_field() !!}

    <div>
        ユーザー名
        <input type="text" name="name" value="{{ old('name') }}">
    </div>

    <div>
        メールアドレス
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        パスワード
        <input type="password" name="password">
    </div>

    <div>
        パスワード確認
        <input type="password" name="password_confirmation">
    </div>

    <div>
        <button type="submit">登録</button>
    </div>
</form>
@endsection