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
        <input id="pass" class="form-field" type="password" name="pass">
        <label for="re_pass">パスワード（再入力）</label>
        <input id="re_pass" class="form-field" type="password" name="re_pass">
        <input class="form-btn btn-black" type="submit" value="登録する">
      </form>
    </div>
  </main>

  @include('equipment.footer');
</body>

</html>
