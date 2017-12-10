@extends('layouts.default')

@section('page-title')
    ツイート編集
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="/tweets/{{ $tweet->id }}" method="post">
                <input type="hidden" name="_method" value="put">
                {!! csrf_field() !!}

                <div class="form-group row">
                    <label class="col-xs-2 col-form-label">ツイート本文</label>
                    <div class="col-xs-10">
                        <input type="text" name="body" class="form-control" placeholder="ツイート本文を入力してください。" value="{{ $tweet->body }}"/>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-xs-2 col-form-label">ハッシュタグ</label>
                    <div class="col-xs-8">
                        <input type="text" name="hash_tags" class="form-control" placeholder="ハッシュタグを入力してください。" value="{{ old('hash_tags', $tweet->hashTags->implode('name', ' ')) }}"/>
                        <p class="help-block">複数のハッシュタグをつける場合は、半角スペースで区切ってください。</p>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-xs-offset-2 col-xs-10">
                        <button type="submit" class="btn btn-primary">投稿する</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
