<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
    <div class="container">
    <header class="header">
        <div class="header-inner">
            <h1>FashionablyLate</h1>
        </div>
    </header>

    <main>
        <h2>Contact</h2>
        <div class="contact-form__content">
            <form class="form__group" action="/confirm" method="post">
            @csrf
                <table class="form__group-table">
                <tr class="form-table__row">
                    <th class="form__label--item">お名前 <span>※</span></th>
                    <td class="form__label--item-input">
                        <div class="form__input-wrap">
                            <input type="text" id="last_name" name="last_name" placeholder="例:山田" value="{{ old('last_name') }}"/>
                            <div class="form__error">
                                @error('last_name')
                                {{ $message }}
                                @enderror
                            </div>
                        </div >
                        <div class="form__input-wrap">
                            <input type="text" id="first_name" name="first_name" placeholder="例:太郎" value="{{ old('first_name') }}"/>
                            <div class="form__error">
                                @error('first_name')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                </td>
                </tr>
                <tr class="form-table__row">
                    <th class="form__label--item">性別<span>※</span></th>
                    <td class="form__label--item-label">
                        <div class="form__radio-group">
                            <label><input type="radio" name="gender" value="male" checked > 男性</label>
                            <label><input type="radio" name="gender" value="female"> 女性</label>
                            <label><input type="radio" name="gender" value="other"> その他</label>
                            <div class="form__error">
                                @error('gender')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="form-table__row">
                    <th class="form__label--item">メールアドレス<span>※</span></th>
                    <td class="form__label--item-input">
                        <div class="form__email-group">
                            <input type="email" id="email" name="email" value="{{ old('email') }}"/>
                            <div class="form__error">
                                @error('email')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="form-table__row">
                    <th class="form__label--item">電話番号<span>※</span></th>
                    <td class="form__label--item-input">
                    <div class="form__tel-group">
                        <div class="form__tel-inputs">
                            <input type="tel" name="tel1" maxlength="5" placeholder="080" value="{{ old('tel1') }}">-
                            <input type="tel" name="tel2" maxlength="4" placeholder="1234" value="{{ old('tel2') }}">-
                            <input type="tel" name="tel3" maxlength="4" placeholder="5678" value="{{ old('tel3') }}">
                        </div>
                            <div class="form__error">
                            @error('tel1')
                            {{ $message }}
                            @enderror
                            @error('tel2')
                            {{ $message }}
                            @enderror
                            @error('tel3')
                            {{ $message }}
                            @enderror
                            </div>
                    </div>
                    </td>
                </tr>
                <tr class="form-table__row">
                    <th class="form__label--item">住所<span>※</span></th>
                    <td class="form__label--item-input">
                        <div class="form__address-group">
                            <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}">
                                <div class="form__error">
                                @error('address')
                                {{ $message }}
                                @enderror
                                </div>
                        </div>
                    </td>
                </tr>
                <tr class="form-table__row">
                    <th class="form__label--item">建物名</th>
                    <td class="form__label--item-input">
                    <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101" value="{{ old('building') }}">
                    </td>
                </tr>
                <tr class="form-table__row">
                    <th class="form__label--item">お問い合わせの種類<span>※</span></th>
                    <td class="form__label--item-select">
                    <select class="content-kind-search-form__item-select" name="category_id" id="category_id">
                        <option value="{{ old('category_id') }}">選択してください</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->content }}</option>
                        @endforeach
                    </select>
                    <div class="form__error">
                        @error('category_id')
                        {{ $message }}
                        @enderror
                    </div>
                    </td>
                  </tr>
                <tr class="form-table__row">
                    <th class="form__label--item">お問い合わせ内容<span>※</span></th>
                    <td>
                    <textarea name="detail" id="detail" >{{ old('detail') }}</textarea>
                    <div class="form__error">
                        @error('detail')
                        {{ $message }}
                        @enderror
                    </div>
                    </td>
                    </tr>
                </table>
                <div class="form__button">
                    <div class="form-button-wrapper">
                    <button class="form__button-submit" type="submit">確認画面</button>
                    </div>
                </div>
            </form>

        </div>
    </main>
    </div>
</body>
</html>
