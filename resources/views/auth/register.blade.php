@extends('layouts.base')
@section('title','新規登録')



@section('content')
@parent
<!-- 全体幅 w100% -->
<main class="main">
    <!-- コンテンツ幅  w1000px-->
    <div class="container site-width bg-lightgray">
        <form class="form" method="post" action="{{ route('register') }}">
            @csrf
            <h3 class="center form-title">新規登録</h3>
            <label for="email">メールアドレス</label>
            <input id="email" value="{{ old('email') }}" class="form-field" type="email" name="email">
            <label for="pass">パスワード <span class="text-danger">※半角英数字6文字以上</span></label>
            <input id="pass" class="form-field" type="password" name="password">
            <label for="re_pass">パスワード（再入力）</label>
            <input id="re_pass" class="form-field" type="password" name="password_confirmation">
            <input class="form-btn btn-black" type="submit" value="登録する">
        </form>
    </div>
</main>
@endsection


@section('footer')
@parent
@endsection
