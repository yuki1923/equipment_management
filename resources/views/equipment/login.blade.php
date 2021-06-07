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

  @include('equipment.footer');
</body>

</html>
