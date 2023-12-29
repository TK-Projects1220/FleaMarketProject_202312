{{-- @extends('layouts.layout')

@section('content') --}}



<main>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="form-group">
            {{-- <label for="name">ユーザー名</label> --}}
            {{-- <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" /> --}}
            <label for="email">メールアドレス</label>
            <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}" />
    </div>
    <div class="form-group">
            <label for="password">パスワード</label>
            <input type="password" for="password" class="form-control" id="passward" name="password" />
        </div>
        <a href="{{ route('password.email') }}">パスワードを忘れた方はこちら</a>
        <button type="submit" class="btn btn-primary">ログイン</button>

        {{-- <button type="submit" class="btn btn-primary">ゲストで閲覧</button> --}}
    </form>

    <div>
        <a href="{{ route('register') }}">新規登録</a>
    </div>



</main>
{{-- @endsection --}}
