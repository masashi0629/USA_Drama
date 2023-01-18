<header class="bg-white lg:pb-12  max-w-screen-2xl px-2 md:px-2 mx-auto flex justify-between items-center py-4 md:py-8">
    <div class="header-left">
        <a href="{{ route('works.index') }}" class= "inline-flex items-center text-black-800 text-2xl md:text-3xl font-bold gap-2.5" aria-label="logo">

            AMERICAN DRAMA NAVI
        </a>
        <form method="GET" action="{{ route('works.search') }}">
          <div class=" lg:flex gap-12 ">
            <input type="text" placeholder="キーワードを入力"
            name="keyword" class="text-gray-600 hover:text-indigo-500 active:text-indigo-700 ml-10 font-semibold transition duration-100 border border-indigo-600"/>

            <select name="category" class="inline-flex items-center text-indigo-500 text-lg font-semibold gap-1 -ml-2">
                <option value="work">作品名から検索</option>
                <option value="actor">俳優名から検索</option>
                <option value="vactor">吹き替え声優から検索</option>

                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-800" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </select>

            <input type="submit" value="検索" class="text-gray-600 hover:text-indigo-500 active:text-indigo-700 text-lg font-semibold transition duration-100 border-indigo-600 border p-1"/>
          </div>
        </form>
    </div>

    <div class="header-center">
        <ul class="menu">
            <li class="">
                <a href="#" class="text-gray-600 hover:text-indigo-500 active:text-indigo-700 text-lg font-semibold transition duration-100">
                    ・ジャンルから検索
                </a>
                <ul>
                    @foreach ($genres as $genre)
                    <li>
                        <a class="text-gray-600 hover:text-indigo-500 active:text-indigo-700 text-lg font-semibold transition duration-100" href="/genre/{{$genre->id}}">
                            {{ $genre->genre_name }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </li>

            <li class="ml-3">
                <a href="#" class="text-gray-600 hover:text-indigo-500 active:text-indigo-700 text-lg font-semibold transition duration-100">
                    ・年代から検索
                </a>
                <ul>
                    @foreach ($broadcast_times as $broadcast_time)
                    <li>
                        <a class="text-gray-600 hover:text-indigo-500 active:text-indigo-700 text-lg font-semibold transition duration-100" href="/broadcast_time/{{$broadcast_time->id}}">
                            {{ $broadcast_time->age_group }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </li>

            <li class="ml-3 mr-5">
                <a href="#" class="text-gray-600 hover:text-indigo-500 active:text-indigo-700 text-lg font-semibold transition duration-100">
                    ・放送局から検索
                </a>
                <ul>
                    @foreach($usa_broadcasters as $usa_broadcaster)
                    <li>
                        <a class="text-gray-600 hover:text-indigo-500 active:text-indigo-700 text-lg font-semibold transition duration-100" href="/broadcast_time/{{$broadcast_time->id}}">
                            {{ $usa_broadcaster->broadcaster_name }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </li>
        </ul>
    </div>

    <div class=" lg:flex flex-col sm:flex-row sm:justify-center lg:justify-start gap-2.5 -ml-8">
        @if (Route::has('login')) @auth
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <input
                type="submit"
                value="ログアウト"
                class="inline-block focus-visible:ring ring-indigo-300 text-gray-500 hover:text-indigo-500 active:text-indigo-600 text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-4 py-3"
            />
        </form>
        @else

        <a href="{{ route('login') }}" class="inline-block focus-visible:ring ring-indigo-300 text-gray-500 hover:text-indigo-500 active:text-indigo-600 text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-4 py-3 ml-1">
            ログイン
        </a>

        @if (Route::has('register'))
        <a href="{{ route('register') }} " class="inline-block focus-visible:ring ring-indigo-300 text-gray-500 hover:text-indigo-500 active:text-indigo-600 text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-4 py-3">
            新規登録
        </a>
        @endif
        @endauth
        @endif
    </div>
</header>
