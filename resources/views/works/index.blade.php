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
        <div class="work">
            <div class="work-image">
                <img src="https://placehold.jp/150x150.png" alt="" />
            </div>

            <div class="work-description">
              <a href="{{ route('works.show', ['work'=>1]) }}" >
                <div class="work-title"> <p>作品名： aaaaa</p></div>
                <div class="work-age"><p>放送時期：  aaaaa</p></div>
                <div class="work-genre"><p>ジャンル：  aaaaa</p></div>
              </a>
            </div>
        </div>

        <div class="work">
            <div class="work-image">
                <img src="https://placehold.jp/150x150.png" alt="" />
            </div>

            <div class="work-description">
                <div class="work-title"> <p>作品名： aaaaaaaaa</p></div>
                <div class="work-age"><p>放送時期：  aaaaaaaaa</p></div>
                <div class="work-genre"><p>ジャンル：  aaaaaaaaa</p></div>
            </div>
        </div>

        <div class="work">
            <div class="work-image">
                <img src="https://placehold.jp/150x150.png" alt="" />
            </div>

            <div class="work-description">
                <div class="work-title"> <p>作品名： aaaaaaaaa</p></div>
                <div class="work-age"><p>放送時期：  aaaaaaaaa</p></div>
                <div class="work-genre"><p>ジャンル：  aaaaaaaaaa</p></div>
            </div>
        </div>

        <div class="work">
            <div class="work-image">
                <img src="https://placehold.jp/150x150.png" alt="" />
            </div>

            <div class="work-description">
                <div class="work-title"> <p>作品名： aaaaaaaaa</p></div>
                <div class="work-age"><p>放送時期：  aaaaaaaa</p></div>
                <div class="work-genre"><p>ジャンル：  aaaaaaaaa</p></div>
            </div>
        </div>

    </div>
</main>
@endsection
