<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('build/assets/css/style.css') }}">
    <title>Forgot Password</title>
</head>
<body>

    <div class="wrapper">
    <div >
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div class="input-box">
            <input  id="email"  type="email" name="email" value="{{ old('email') }}" autocomplete="off" required placeholder="Email">
            <x-input-error :messages="$errors->get('email')"  class="errors"/>
        </div>

        <div>
            <button class="btn" type="submit">
                {{ __('Email password reset link') }}
            </button>
        </div>
    </form>
    </div>
</body>
</html>

