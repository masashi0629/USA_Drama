@extends('layouts.app') @section('content')
<main>
    <div class="contents">
        <div class="content-description">
            <p class="content-description-title">作品名：{{ $showworks->work_name }}</p>
            <p class="content-description-genre">ジャンル：{{ $showworks->genre->genre_name }}</p>
            <p class="content-description-time">放送時間：{{ $showworks->broadcast_time->age_group }}</p>

            <p>出演俳優：</p>
            @foreach ($showworks->actors as $actor )
            <p class="content-description-cast">{{$actor->actor_name }}</p>
            @endforeach


            <p>吹き替え声優：</p>
            @foreach ($showworks->vactors as $voice_actor)
            <p class="content-description-dub">{{ $voice_actor->voice_actor_name }}</p>
            @endforeach

            <p class="content-descripton-summary">あらすじ：{{ $showworks->summary }}</p>

            <div class="content-image">
                <img src="{{$showworks->file_name }}" alt="" width="500px" height="300px"/>
            </div>

        </div>

    </div>
</main>
@endsection
