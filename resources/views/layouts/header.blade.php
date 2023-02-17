<header class="w-full max-w-7xl">
    <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl p-5 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
        <div class="flex flex-row items-center justify-between lg:justify-start">
            <a href="{{ route('works.index') }}" class= "text-lg font-bold tracking-tighter text-blue-600 transition duration-500 ease-in-out transform tracking-relaxed lg:pr-8">
                AMERICAN DRAMA NAVI
            </a>
            <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                <svg fill="currentColor" viewBox="0 0 20 20" class="w-8 h-8">
                    <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" style="display: none;"></path>
                </svg>
            </button>
        </div>

        <nav :class="{'flex': open, 'hidden': !open}" class="flex-col items-center flex-grow pb-4 border-blue-600 md:pb-0 md:flex md:justify-end md:flex-row lg:border-l-2 lg:pl-2 hidden">
            <form method="GET" action="{{ route('works.search') }}">
                <input type="text" placeholder="キーワードを入力" name="keyword"
                    class="px-4 py-2 mt-2 text-sm text-gray-500 md:mt-0 hover:text-blue-600 focus:outline-none focus:shadow-outline"
                />

                <select name="category" class="px-4 py-2 mt-2 text-sm text-gray-500 md:mt-0 hover:text-blue-600 focus:outline-none focus:shadow-outline">
                    <option value="work">作品名から検索</option>
                    <option value="actor">俳優名から検索</option>
                    <option value="vactor">吹き替え声優から検索</option>
                </select>

            <input type="submit" value="検索" class="px-4 py-2 mt-2 text-sm text-gray-500 md:mt-0 hover:text-blue-600 focus:outline-none focus:shadow-outline"/>

            </form>

            <div @click.away="open = false" class="relative" x-data="{ open: false }">
                <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm text-left text-gray-500 md:w-auto md:inline md:mt-0 hover:text-blue-600 focus:outline-none focus:shadow-outline">
                    <span>・ジャンルから検索</span>
                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1 rotate-0">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 z-30 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48" style="display: none;">

                    <div class="px-2 py-2 bg-white rounded-md shadow">
                        @foreach ($genres as $genre)
                        <a class="block px-4 py-2 mt-2 text-sm text-gray-500 md:mt-0 hover:text-blue-600 focus:outline-none focus:shadow-outline" href="/genre/{{$genre->id}}">
                            {{ $genre->genre_name }}
                        </a>
                        @endforeach
                    </div>

                </div>
            </div>

              {{--
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

            --}}

        <div class="inline-flex items-center gap-2 list-none lg:ml-auto">
            @if (Route::has('login')) @auth
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <input type="submit" value="ログアウト"
                    class="items-center block px-10 py-2.5 text-base font-medium text-center text-blue-600 transition duration-500 ease-in-out transform border-2 border-white shadow-md rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500"
                />
            </form>
            @else

            <a href="{{ route('login') }}" class="items-center block px-10 py-2.5 text-base font-medium text-center text-blue-600 transition duration-500 ease-in-out transform border-2 border-white shadow-md rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                ログイン
            </a>

            @if (Route::has('register'))
            <a href="{{ route('register') }} " class="items-center block px-10 py-2.5 text-base font-medium text-center text-blue-600 transition duration-500 ease-in-out transform border-2 border-white shadow-md rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                新規登録
            </a>
            @endif
            @endauth
            @endif
        </div>
        </nav>
    </div>
</header>
