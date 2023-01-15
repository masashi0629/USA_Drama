<header>
    <div class="header-left">
        <a href="{{ route('works.index') }}" class="header-left-logo">
            AMERICAN DRAMA NAVI
        </a>
        <form method="GET" action="{{ route('works.index') }}">
          <div class="header-form">
            <input type="search" placeholder="キーワードを入力" name="search" value="@if (isset($search)) {{ $search }} @endif">
            <input type="submit" value="検索" />
            <button>
                <a href="{{ route('works.index') }}" class="text-white">
                    クリア
                </a>
            </button>
          </div>
        </form>

        <div>
            　//遷移しても、検索結果を保持する
            {{ $institutions->appends(request()->input())->links() }}
        </div>
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
