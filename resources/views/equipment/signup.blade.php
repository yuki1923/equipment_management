<!DOCTYPE html>
<html lang="ja">

@include('equipment.head');

<body>
  @include('equipment.header');

  <!-- 全体幅 w100% -->
  <main class="main">
    <!-- コンテンツ幅  w1000px-->
    <div class="container site-width bg-lightgray">
      <form class="form" action="">
        @csrf
        <h3 class="center form-title">新規登録</h3>
        <label for="email">メールアドレス</label>
        <input id="email" class="form-field" type="email" name="email">
        <label for="pass">パスワード <span class="text-danger">※半角英数字6文字以上</span></label>
        <input id="pass" class="form-field" type="password" name="password">
        <label for="re_pass">パスワード（再入力）</label>
        <input id="re_pass" class="form-field" type="password" name="password_confirmation">
        <input class="form-btn btn-black" type="submit" value="登録する">
      </form>
    </div>
  </main>

  @include('equipment.footer');
</body>

</html>









<!-- もともとのauth/register.blade.phpを切り取り -->
<!-- @extends('layouts.app')

@section('content') -->
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- @endsection -->
