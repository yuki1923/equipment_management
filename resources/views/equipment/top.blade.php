<!DOCTYPE html>
<html lang="ja">

@include('equipment.head');

<body>

  @include('equipment.header');
  <!-- 全体幅 w100% -->
  <main class="main">
    <!-- コンテンツ幅  w1000px-->
    <div class="container site-width">
      <!-- キャッチテキスト -->
      <div class="lp-contents">
        <div class="left-content">
          <h2 class="left-text">「あっ、買っておくの忘れてた！」<br>はもうありません。</h2>
          <a class="btn btn-black" href="#">テストログイン</a>
        </div>
        <!-- イメージ画像 -->
        <div class="right-content">
          <img class="right-img" src="{{asset('images/International Day of families-bro.png')}}" alt="">
        </div>
      </div>
    </div>
  </main>
  @include('equipment.footer');

  <script>
    $(function() {
      //フッターを最下部に固定
      var $footer = $('#footer');
      console.log($footer.offset().top);
      console.log($footer.outerHeight());
      if (window.innerHeight > $footer.offset().top + $footer.outerHeight()) {
        $footer.attr({
          'style': 'position:fixed; top:' + (window.innerHeight - $footer.outerHeight()) + 'px;'
        });
      }
    })
  </script>
</body>

</html>
