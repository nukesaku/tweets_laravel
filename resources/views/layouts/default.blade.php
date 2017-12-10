<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Twitter風アプリ</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="{{ route('tweets.index') }}" class="navbar-brand">マイアプリ</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                @if(Auth::check())
                    <li>
                        <a href="{{ route('auth.getLogout') }}">ログアウト</a>
                    </li>
                @else
                    <li>
                        <a href="{{ route('auth.getRegister') }}">ユーザ新規登録</a>
                    </li>
                    <li>
                        <a href="{{ route('auth.getLogin') }}">ログイン</a>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
    <div class="page-header">
        <h1>@yield('page-title')</h1>
    </div>
    @yield('content')
</div>
</body>
</html>
