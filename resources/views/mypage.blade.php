@extends('layouts.base')
@section('title','マイページ')

@section('content')

<main class="main">
  <!-- コンテンツ幅  w1000px-->
  <div class="container site-width bg-lightgray">
    <div class="equipment-form--container">
      <form class="form" method="post" action="">
        @csrf
        <h3 class="center form-title">マイページ</h3>
        <label for="email">メールアドレス</label>
        <input id="email" class="form-field" type="email" name="email">
        <label for="pass">パスワード<span class="text-danger">※半角英数字6文字以上</span></label>
        <input id="pass" class="form-field" type="password" name="password">
        <label for="re_pass">パスワード（再入力）</label>
        <input id="re_pass" class="form-field" type="password" name="password_confirmation">
        <input class="form-btn btn-black mb-20" type="submit" value="変更する">
        <a href="" class="form-btn btn-white center js-click-open">退会する</a>
      </form>
      <div class="wrap js-modal-target">
        <form class="modal-form js-formArea" method="post" action="{{route('mypage.withdraw',['id'=>$user->id])}}">
          @csrf
          <p class="confirm-msg">本当に退会してもよろしいですか？</p>
          <input type="submit" value="いいえ" class="btn submit-btn btn-black  js-click-close not-btn">
          <input type="submit" value="はい" class="btn submit-btn btn-white">
        </form>
      </div>
      <div class="cover js-click-close"></div>
    </div>
  </div>
</main>
@endsection
