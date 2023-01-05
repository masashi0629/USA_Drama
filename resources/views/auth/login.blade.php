@extends('layouts.app')

@section('content')
   <form method="POST" action="{{ route('login') }}" class="form">
    <h1 class="form-title">ログイン画面</h1>
    @csrf
        <div class="form-group">
            <label for="email" class="">メールアドレス</label>
            <input id="email" type="email" class="form-input" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        </div>
        @error('email')
        <span class="" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <div class="form-group">
        <label for="password" class="">パスワード</label>
        <input id="password" type="password" class="form-input" name="password" required autocomplete="current-password">

        @error('password')
            <span class="" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
        <div class="form-check">
        <label class="form-check" for="remember">
            {{ __('ログイン情報を記録する') }}
        </label>
        <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        </div>

        <div class="form-group">
        <button type="submit" class="form-submit">
            {{ __('ログイン') }}
        </button>
    </div>
@endsection
