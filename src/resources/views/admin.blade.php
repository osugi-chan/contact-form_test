<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
</head>

<body>
    <div class="container">
    <header class="header">
        <div class="header-inner">
            <h1>FashionablyLate</h1>
        </div>
        <div class="header-logout">
            <a class="header-logout__item" href="/register">logout</a>
        </div>
    </header>
<main>
<h2>Admin</h2>
<div class="search-form">
    <form class="search-form__item" action="" method="">
        <input class="search-form__item-input" type="search" name="q" id="search_query"
        value="{{ request('q') }}"
        placeholder="名前またはメールアドレスを入力">
        <select class="search-form__item-select" name="gender" id="gender">
            <option value="">性別</option>
            <option value="male">男性</option>
            <option value="female">女性</option>
            <option value="other">その他</option>
        </select>
        <select class="search-form__item-select" name="content" id="content">
            <option value="">お問い合わせの種類</option>
            <option value="">商品のお届けについて</option>
            <option value="">商品の交換について</option>
            <option value="">商品トラブル</option>
            <option value="">ショップへのお問い合わせ</option>
            <option value="">その他</option>
        </select>
            <input class="search-form__item-date" type="date" id="birth_date" name="birth_date" value="">
        <div class="search-form__button-wrapper">
            <div class="search-form__button-item">
        <button class="search-form__button-submit">検索</button>
            </div>
        <div class="reset__button">
            <input class="reset__button-input" type="reset" value="リセット">
        </div>
        </div>
    </form>
</div>
<div class="container__item">
    <button class="button__item" id="exportBtn">エクスポート</button>
    <div class="pagination-wrapper">
       <!-- {{ $contacts->links() }}-->
    </div>
</div>
<div class="container-table">
    <table class="customer-data-table">
        <thead>
        <tr class="customer-data-table__row">
            <th>お名前</th>
            <th>性別</th>
            <th>メールアドレス</th>
            <th>お問い合わせの種類</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
            @foreach( $contacts as $contact)
            <tr class="customer-data-table__row">
                <td>{{ $contact->last_name }}{{ $contact->first_name }}</td>
                <td>{{ $contact->gender_label }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->category_label}}</td>
                <td>
                    <button class="button" type="submit">詳細</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</main>
</div>
</body>
</html>
