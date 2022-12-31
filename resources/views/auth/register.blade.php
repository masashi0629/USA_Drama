@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('register') }}" class="form">
        <h1 class="form-title">新規登録画面</h1>
        @csrf

        <div class="form-group">
            <label for="name" class="">名前</label>
            <input id="name" type="text" class="form-input" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <label for="email" class="">メールアドレス</label>
            <input id="email" type="email" class="form-input " name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>

        <div class="form-group row">
            <label for="password" class="">パスワード</label>
            <input id="password" type="password" class="form-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>

        <div class="form-group">
            <label for="password-confirm" class="">パスワード確認</label>
            <input id="password-confirm" type="password" class="form-input" name="password_confirmation" required autocomplete="new-password">
        </div>

        <div class="form-group">     
                <button type="submit" class="form-submit">
                    登録
                </button>
        </div>
    </form>
@endsection
