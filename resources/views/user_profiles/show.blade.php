@extends('layouts.default')

@section('page-header')
    ユーザプロフィール
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3>名前</h3>
            <p>{{ $user->name }}</p>
            <h3>紹介文</h3>
            <p>{{ $user->userProfile->introduction }}</p>
            <h3>誕生日</h3>
            <p>{{ $user->userProfile->birthday }}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('user_profiles.edit', ['id' => $user->id]) }}" class="btn btn-primary">編集</a>
        </div>
    </div>
@stop