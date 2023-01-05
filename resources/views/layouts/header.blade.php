<header>
    <div class="header-left">
      <a href="{{ route('works.index') }}" class="header-left-logo">
        AMERICAN DRAMA NAVI
</a>
        <form>
          <div class="header-form">
            <input type="text"  />
            <input type="submit" value="検索" />
          </div>
        </form>
    </div>

    <div class="header-right">
        @if (Route::has('login')) @auth
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <input
                type="submit"
                value="ログアウト"
                class="header-right-login"
            />
        </form>
        @else

        <a href="{{ route('login') }}" class="header-right-login">ログイン</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }} " class="header-right-login"
            >新規登録</a
        >
        @endif @endauth @endif
    </div>
</header>
