@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inika&display=swap" rel="stylesheet">
@endsection

@section('content')
<div class="contact-form__content">
    <div class="contact-form__heading">
        <p>Contact</p>
    </div>
    <form class="form">
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お名前</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="name" placeholder="例:山田" value="{{ old('name') }}" />
                </div>
                <div class="form__error">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="name" placeholder="例:太郎" value="{{ old('name') }}" />
                </div>
                <div class="form__error">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">性別</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <label class="custom-radio">
                        <input type="radio" name="gender" value="male" checked>
                        <span class="radio-circle"></span>
                        男性
                    </label>
                    <label class="custom-radio">
                        <input type="radio" name="gender" value="female">
                        <span class="radio-circle"></span>
                        女性
                    </label>
                    <label class="custom-radio">
                        <input type="radio" name="gender" value="other">
                        <span class="radio-circle"></span>
                        その他
                    </label>
                </div>
                <div class="form__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">メールアドレス</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="email" name="email" placeholder="例: test@example.com" value="{{ old('email') }}" />
                </div>
                <div class="form__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-title">
                <label for="phone-number">電話番号 <span style="color: red;"> ※</span></label>
                <div>
                    <input type="text" id="phone-part1" name="phone_part1" maxlength="3" size="3" placeholder="080" value="{{ old('tel') }}" /> -
                    <input type="text" id="phone-part2" name="phone_part2" maxlength="4" size="4" placeholder="1234" value="{{ old('tel') }}" /> -
                    <input type="text" id="phone-part3" name="phone_part3" maxlength="4" size="4" placeholder="5678" value="{{ old('tel') }}" />
                </div>
            </div>
        </div>
</div>
<div class="form__error">
    @error('tel')
    {{ $message }}
    @enderror
</div>
</div>
</div>
<div class="form__group">
    <div class="form__group-title">
        <span class="form__label--item">お問い合わせ内容</span>
    </div>
    <div class="form__group-content">
        <div class="form__input--textarea">
            <textarea name="content" placeholder="資料をいただきたいです">{{ old('content') }}</textarea>
        </div>
    </div>
</div>
<div class="form__button">
    <button class="form__button-submit" type="submit">送信</button>
</div>
</form>
</div>
</body>
@endsection