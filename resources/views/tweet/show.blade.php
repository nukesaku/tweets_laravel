@extends('layouts.default')

@section('page-title')
    ツイート詳細
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3>ツイート本文</h3>
            <p>{{ $tweet->body }}</p>
            <h3>投稿日時</h3>
            <p>{{ $tweet->created_at }}</p>
        </div>
    </div>
    @if(Auth::check())
    <a href="/tweets/{{ $tweet->id }}/edit" class="btn btn-primary">更新</a>
    <form action="/tweets/{{ $tweet->id }}" method="post">
        <input type="hidden" name="_method" value="DELETE">
        {!! csrf_field() !!}
        <button type="submit" class="btn btn-danger">削除</button>
    </form>
    @endif
@endsection
