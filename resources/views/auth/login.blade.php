@extends('layouts.base')
@section('title','TOP')

@section('header')
@parent
@endsection

@section('content')
<!-- 全体幅 w100% -->
<main class="main">
    <!-- コンテンツ幅  w1000px-->
    <div class="container site-width bg-lightgray">

        <form class="form" method="post" action="{{ route('login') }}">
            @csrf
            <h3 class="center form-title">ログイン</h3>
            <label for="email">メールアドレス</label>
            <input id="email" class="form-field" type="email" name="email" value="{{ old('email') }}">
            <label for="pass">パスワード</label>
            <input id="pass" class="form-field clear-mb" type="password" name="password">
            @if (Route::has('password.request'))
            <div class="remember-pass"><a href="{{ route('password.request') }}">パスワードを忘れた場合はコチラ</a></div>
            @endif
            <label for="remember" class="checkbox mb-40  block">
                <input type="checkbox" id="remember" name="remember" value="true" {{ old('remember') ? 'checked' : '' }}>
                自動でログイン
            </label>
            <input class="form-btn btn-black" type="submit" value="ログイン">
        </form>
    </div>
</main>
@endsection

@section('footer')
@parent
@endsection
