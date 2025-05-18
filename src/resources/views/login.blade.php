<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
</head>

<body>
    <div class="container">
     <header class="header">
        <div class="header-inner">
            <h1>FashionablyLate</h1>
        </div>
        <div class="header-register">
            <a class="header-register__item" href="/register">register</a>
        </div>
    </header>

<main class="main-container">
    <div class="container-title">
        <h2>Login</h2>
    </div>
<div class="login-form">
<form  class="login-form__content" action="/admin" method="post">
    @csrf
    <div class="login-form__content-item">
    <label for="email">
        <p>メールアドレス</p>
    </label>
    <input type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}">
     <div class="form__error">
            @if ($errors->has('email'))
                <p class="error">{{ $errors->first('email') }}</p>
            @endif
     </div>
    </div>
    <div class="login-form__content-item">
    <label for="name">
        <p>パスワード</p>
    </label>
    <input type="password" id="password" name="password" placeholder="例:coachtech">
    <div class="form__error">
            @if ($errors->has('password'))
                <p class="error">{{ $errors->first('password') }}</p>
            @endif
      </div>
    </div class="login-form__content-item">
    <div class="login-form__button-wrapper">
    <button  class="form-button" type="submit">ログイン</button>
    </div>
</form>
</div>

</main>
</div>
</body>
</html>
