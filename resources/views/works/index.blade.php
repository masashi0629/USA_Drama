@extends('layouts.app') @section('content')
<div class="sidebar">
    <p>サイドバー</p>
    <ul>
        <li>ジャンル</li>
        <li>年代別</li>
        <li>メニュー</li>
    </ul>
</div>

<main>
    <div class="works">
        @foreach ($works as $work)
        <div class="work">
            <div class="work-image">
                <img src="https://placehold.jp/150x150.png" alt="" />
            </div>
            <div class="work-description">
                <a href="{{ route('works.show', ['work'=>1]) }}" >
                    <div class="work-title"> <p>作品名： {{ $work->work_name }}</p></div>
                    <div class="work-age"><p>放送時期：  {{ $work->broadcast_time_id }}</p></div>
                    <div class="work-genre"><p>ジャンル：  {{ $work->genre_id}}</p></div>
                </a>
            </div>
            @endforeach
        </div>

    </div>
</main>
@endsection
