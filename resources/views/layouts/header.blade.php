<header>
    <div class="header-left">
        <a href="{{ route('works.index') }}" class="header-left-logo">
            AMERICAN DRAMA NAVI
        </a>
        <form method="GET" action="{{ route('works.search') }}">
          <div class="header-form">
            <input type="text" placeholder="キーワードを入力"
            name="keyward"/>

            <select name="category" id="">
                <option value="work">作品名から検索</option>
                <option value="actor">俳優名から検索</option>
                <option value="vactor">吹き替え声優から検索</option>
            </select>

            <input type="submit" value="検索" />
            <button>
                <a href="{{ route('works.search') }}" class="text-white">
                    クリア
                </a>
            </button>
          </div>
        </form>
    </div>

    <div class="header-center">
        <ul class="menu">
            <li>
                <a href="#">ジャンルから検索</a>
                <ul>
                    @foreach ($genres as $genre)
                    <li>
                        <a href="/genre/{{ $genre->id }}">
                            {{ $genre->genre_name }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </li>

            <li>
                <a href="#">年代から検索</a>
                <ul>
                    @foreach ($broadcast_times as $broadcast_time)
                    <li>
                        <a href="/broadcast_time/{{$broadcast_time->id}}">
                            {{ $broadcast_time->age_group }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </li>

            <li>
                <a href="#">放送局から検索</a>
                <ul>
                    @foreach($usa_broadcasters as $usa_broadcaster)
                    <li>
                        <a href="/broadcast_time/{{$broadcast_time->id}}">
                            {{ $usa_broadcaster->broadcaster_name }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </li>
        </ul>
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
