<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/register.css') }}">

</head>

<body>
    <div class="container">
    <header class="header">
        <div class="header-inner">
            <h1>FashionablyLate</h1>
        </div>
        <div class="header-login">
            <a class="header-login__item" href="/login">login</a>
        </div>
    </header>
<main>
<h2>Register</h2>
<div class="register-form">
<form  class="register-form__content" action="{{ route('register') }}" method="post">
    @csrf
    <div class="register-form__content-item">
    <label for="name">
        <p>お名前</p>
    </label>
    <input type="name" name="name" placeholder="例:山田 太郎" value="{{ old('name') }}" >
    <div class="form__error">
        @error('name')
        <p>{{ $message }}</p>
        @enderror
    </div>
    </div>

    <div class="register-form__content-item">
    <label for="email">
        <p>メールアドレス</p>
    </label>
    <input type="email"  name="email" placeholder="例:test@example.com" value="{{ old('email') }}" >
    <div class="form__error">
        @error('email')
        <p>{{ $message }}</p>
     @enderror
    </div>
    </div>

    <div class="register-form__content-item">
    <label for="password">
        <p>パスワード</p>
    </label>
    <input type="password"  name="password" placeholder="例:coachtech">
    <div class="form__error">
        @error('password')
        <p>{{ $message }}</p>
        @enderror
        </div>
    </div>
    
    <div class="register-form__content-item">
    <button class="form-button" type="submit">登録</button>
    </div>
</form>
</div>

</main>
</div>
</body>
</html>
