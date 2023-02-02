<header class="text-gray-600 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a href="{{ route('works.index') }}" class= "flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl"> AMERICAN DRAMA NAVI</span>
        </a>

        <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
            <form method="GET" action="{{ route('works.search') }}">
                <input type="text" placeholder="キーワードを入力"
                name="keyword" class="text-gray-600 hover:text-indigo-500 active:text-indigo-700 mr-2 font-semibold transition duration-100 border border-indigo-600"/>

                <select name="category" class="inline-flex items-center text-indigo-500 text-lg font-semibold gap-1 -ml-2">
                    <option value="work">作品名から検索</option>
                    <option value="actor">俳優名から検索</option>
                    <option value="vactor">吹き替え声優から検索</option>

                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-800" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </select>

            <input type="submit" value="検索" class="text-gray-600 hover:text-indigo-500 active:text-indigo-700 text-lg font-semibold transition duration-100 border-indigo-600 border"/>

            </form>

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
                            <a class="text-gray-600 hover:text-indigo-500 active:text-indigo-700 text-lg font-semibold transition duration-100" href="/usa_broadcaster/{{$usa_broadcaster->id}}">
                                {{ $usa_broadcaster->broadcaster_name }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </li>
            </ul>

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
        </nav>
    </div>
</header>
