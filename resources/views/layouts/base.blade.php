<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('css/sanitize.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
  <title>@yield('title')</title>
</head>

<body>
  @section('header')
  <header class="header">
    <h1><a href="{{url('')}}">備品リスト</a></h1>
    <nav>
      <ul class="nav">
        <li class="nav-list"><a class="btn btn-black nav-btn" href="{{url('/register')}}">新規登録</a></li>
        @if(Auth::check() === true)
        <li class="nav-list"><a class="btn btn-white nav-btn" href="{{url('/logout')}}">ログアウト</a></li>
        @else
        <li class="nav-list"><a class="btn btn-white nav-btn" href="{{url('/login')}}">ログイン</a></li>
        @endif
      </ul>
    </nav>
  </header>
  @show

  @yield('content')


  @section('footer')
  <footer id="footer" class="footer">
    <p>copyright ###### 2021 / All right reserved.</p>
    <a href="https://storyset.com/people">People illustrations by Storyset</a>
  </footer>
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
  @show
</body>

</html>
