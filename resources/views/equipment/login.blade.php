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

    <form class="form" action="">
      @csrf
      <h3 class="center form-title">ログイン</h3>
      <label for="email">メールアドレス</label>
      <input id="email" class="form-field" type="email" name="email">
      <label for="pass">パスワード</label>
      <input id="pass" class="form-field clear-mb" type="password" name="pass">
      <div class="remember-pass"><a href="#">パスワードを忘れた場合</a></div>
      <label class="checkbox mb-40  block">
        <input type="checkbox" name="auto_login" value="true">
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




<!-- もともとのauth/login.blade.phpを切り取り -->
@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Login') }}</div>

        <div class="card-body">
          <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group row">
              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

              <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

              <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-6 offset-md-4">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                  <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                  </label>
                </div>
              </div>
            </div>

            <div class="form-group row mb-0">
              <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                  {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                  {{ __('Forgot Your Password?') }}
                </a>
                @endif
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
