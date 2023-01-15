@extends('layouts.app') @section('content')
<main>
    <div class="contents">
        <div class="content-description">
            <p class="content-description-title">作品名：{{ $showworks->work_name }}</p>
            <p class="content-description-genre">ジャンル：{{ $showworks->genre->genre_name }}</p>
            <p class="content-description-time">放送時間：{{ $showworks->broadcast_time->age_group }}</p>

            @foreach ($showworks->actors as $actor )
            <p>出演俳優</p>
            <p class="content-description-cast">{{$actor->actor_name }}</p>
            @endforeach


            @foreach ($showworks->vactors as $voice_actor)
            <p>吹き替え声優：</p>
            <p class="content-description-dub">{{ $voice_actor->voice_actor_name }}</p>
            @endforeach


        </div>

        <div class="content-image">
            <img src="https://placehold.jp/800x400.png" alt="" />
        </div>
    </div>
</main>
@endsection
