@extends('layouts.app') @section('content')

<main>
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 md:gap-6 xl:gap-8">
        @if(isset($keyword))
        <p class="keyword">検索条件：{{ $keyword }}</p>
        @endif

        @foreach ($works as $work)
        <div class="flex flex-col bg-white border rounded-lg overflow-hidden">
            <div class="group h-48 md:h-64 block bg-gray-100 overflow-hidden relative">
                <img src="https://images.unsplash.com/photo-1593508512255-86ab42a8e620?auto=format&q=75&fit=crop&w=600"
                loading="lazy" alt="Photo by Minh Pham"
                class="w-full h-full object-cover object-center absolute inset-0 group-hover:scale-110 transition duration-200"
            />

            </div>
            <div class="flex flex-col flex-1 p-4 sm:p-6">
                <a class ="hover:text-indigo-500 active:text-indigo-600 transition duration-100" href="{{ route('works.show', ['work'=>$work->id]) }}" >
                    <div class="work-title"> <p class="text-gray-800 text-lg font-semibold mb-2">作品名： {{ $work->work_name }}</p></div>
                    <div class="work-age"><p class="text-gray-500 mb-8">放送時期：  {{ $work->broadcast_time->age_group }}</p></div>
                    <div class="work-genre"><p class="text-gray-500 mb-8">ジャンル：{{ $work->genre->genre_name}}</p></div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</main>
@endsection
