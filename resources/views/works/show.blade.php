@extends('layouts.app') @section('content')
<main class="bg-white py-6 sm:py-8 lg:py-12">
    <div class="max-w-screen-xl px-4 md:px-8 mx-auto">
        <div class="grid md:grid-cols-2 gap-8 lg:gap-12">
            <div>
                <div class="content-image h-64 md:h-auto bg-gray-100 overflow-hidden rounded-lg shadow-lg">
                    <img src="{{$showworks->file_name }}" loading="lazy" alt="Photo by Martin Sanchez" class="w-full h-full object-cover object-center"/>
                </div>
            </div>

            <div class="contents md:pt-8">
                <div class="content-description">
                    <p class="content-description-title text-gray-800 text-2xl sm:text-3xl font-bold text-center md:text-left mb-4 md:mb-6">
                        作品名：{{ $showworks->work_name }}
                    </p>
                    <p class="content-description-genre text-indigo-500 font-bold text-center md:text-left">
                        ジャンル：{{ $showworks->genre->genre_name }}
                    </p>
                    <p class="content-description-time">放送時間：{{ $showworks->broadcast_time->age_group }}</p>

                    <p class="text-gray-500 sm:text-lg mb-6 md:mb-8">出演俳優：</p>
                    @foreach ($showworks->actors as $actor )
                    <p class="content-description-cast text-gray-500 sm:text-lg mb-6 md:mb-8">{{$actor->actor_name }}</p>
                    @endforeach


                    <p class="text-gray-500 sm:text-lg mb-6 md:mb-8">吹き替え声優：</p>
                    @foreach ($showworks->vactors as $voice_actor)
                    <p class="content-description-dub text-gray-500 sm:text-lg mb-6 md:mb-8">{{ $voice_actor->voice_actor_name }}</p>
                    @endforeach

                    <p class="content-descripton-summary text-gray-500 sm:text-lg mb-6 md:mb-8">あらすじ：{{ $showworks->summary }}</p>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
