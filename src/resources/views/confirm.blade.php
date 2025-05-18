<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
</head>

<body>
    <div class="container">
    <header class="header">
        <div class="header-inner">
            <h1>FashionablyLate</h1>
        </div>
    </header>

    <main>
        <div class="confirm__contact">
            <div class="confirm-title">
                <h2>Confirm</h2>
            </div>
            <div class="confirm__contact__item">
            <form class="confirm-form" action="{{ url('/thanks') }}" method="post">
            @csrf
                <div class="confirm-table">
                    <table class="confirm-table__inner">
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">お名前</th>
                            <td class="confirm-table__text">
                            <input class="confirm-table__text-input" type="text" name="name" value="{{ $contact['name'] }}" readonly />
                            <input type="hidden" name="last_name" value="{{ $contact['last_name'] }}">
                            <input type="hidden" name="first_name" value="{{ $contact['first_name'] }}">
                            </td>
                        </tr>
                        @php
                        if ($contact['gender'] === 'male') {
                            $genderLabel = '男性';
                            } elseif ($contact['gender'] === 'female') {
                            $genderLabel = '女性';
                            } elseif ($contact['gender'] === 'other') {
                            $genderLabel = 'その他';
                            } else {
                            $genderLabel = '未設定';
                            }
                        @endphp
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">性別</th>
                            <td class="confirm-table__text">
                            <input class="confirm-table__text-input" value="{{ $genderLabel }}" readonly />
                            <input type="hidden" name="gender" value="{{ $contact['gender'] }}">
                            </td>
                        </tr>

                            <tr class="confirm-table__row">
                                <th class="confirm-table__header">メールアドレス</th>
                                <td class="confirm-table__text">
                                <input class="confirm-table__text-input" type="email" value="{{ $contact['email']}}" readonly />
                                <input type="hidden" name="email" value="{{ $contact['email'] }}">
                                </td>
                            </tr>

                            <tr class="confirm-table__row">
                                <th class="confirm-table__header">電話番号</th>
                                <td class="confirm-table__text">
                                <input class="confirm-table__text-input" type="tel" value="{{ $contact['tel'] }}" readonly />
                                <input type="hidden" name="tel" value="{{ $contact['tel'] }}">
                                </td>
                            </tr>

                            <tr class="confirm-table__row">
                                <th class="confirm-table__header">住所</th>
                                <td class="confirm-table__text">
                                <input class="confirm-table__text-input" type="text" value="{{ $contact['address'] }}" readonly />
                                <input type="hidden" name="address" value="{{ $contact['address'] }}">
                                </td>
                            </tr>

                            <tr class="confirm-table__row">
                                <th class="confirm-table__header">建物名</th>
                                <td class="confirm-table__text">
                                <input class="confirm-table__text-input" type="text" value="{{ $contact['building'] }}" readonly />
                                <input type="hidden" name="building" value="{{ $contact['building'] }}">
                                </td>
                            </tr>

                            <tr class="confirm-table__row">
                                <th class="confirm-table__header">お問い合わせの種類</th>
                                <td class="confirm-table__text">
                                <input class="confirm-table__text-input" value="{{ $contact['category_name'] ?? '未選択'}}" readonly />
                                <input type="hidden" name="category_id" value="{{ $contact['category_id'] }}">
                                </td>
                            </tr>

                            <tr class="confirm-table__row">
                                <th class="confirm-table__header">お問い合わせ内容</th>
                                <td class="confirm-table__text">
                                <input class="confirm-table__text-input" type="text" value="{{ $contact['detail'] }}" readonly />
                                <input type="hidden" name="detail" value="{{ $contact['detail'] }}">
                                </td>
                            </tr>
                    </table>
                </div>
                <div class="form__button">
                    <div class="form__button-wrapper">
                        <button class="form__button-submit" type="submit">送信</button>
                            <a class="form__button-edit" onclick="history.back()">修正</a>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </main>
    </div>
</body>
</html>
