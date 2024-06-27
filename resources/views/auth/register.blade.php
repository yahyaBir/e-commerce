<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('build/assets/css/style.css') }}">
    <title>Persite | Register Page</title>
</head>
<body>


<div class="buyukdiv">
    <a href="{{ route('home') }}"><img src="{{ asset('images/persite-logo.png') }}" alt=""></a>
<div class="wrapper">
    <form method="POST" action="{{ route('register') }}">
        @csrf


        <!-- Name -->
        <div class="input-box">
            <input id="name"  type="text" name="name" value="{{ old('name') }}" autocomplete="off" required placeholder="Name">
            <x-input-error :messages="$errors->get('name')" class="errors" />
        </div>

        <!-- Email Address -->
        <div class="input-box">
            <input id="email"  type="email" name="email" value="{{ old('email') }}" autocomplete="off" required placeholder="Email">
            <x-input-error :messages="$errors->get('email')" class="errors"  />
        </div>

        <!-- Password -->
        <div class="input-box">
            <input id="password" type="password" name="password" required autocomplete="new-password" placeholder="Password">
            <x-input-error :messages="$errors->get('password')" class="errors"/>
        </div>

        <!-- Confirm Password -->
        <div class="input-box">
            <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
            <x-input-error :messages="$errors->get('password_confirmation')"  class="errors"/>
        </div>

        <div >
            <div class="remember-forgot">
                <a href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
            </div>
            <button class="btn" type="submit">
                {{ __('Register') }}
            </button>
        </div>
    </form>
</div>
</div>
</body>
</html>
