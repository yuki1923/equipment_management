  <header class="header">
    <h1><a href="{{url('/')}}">備品リスト</a></h1>
    <nav>
      <ul class="nav">
        <li class="nav-list"><a class="btn btn-black nav-btn" href="{{url('signup')}}">新規登録</a></li>
        @if(Auth::check())
        <li class="nav-list"><a class="btn btn-white nav-btn" href="{{url('logout')}}">ログアウト</a></li>
        @else
        <li class="nav-list"><a class="btn btn-white nav-btn" href="{{url('login')}}">ログイン</a></li>
        @endif
      </ul>
    </nav>
  </header>
