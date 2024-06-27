<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('build/assets/css/style.css') }}">
    <link href="https://css.gg/css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />

    <title>Persite | Login Page</title>
</head>
<body>


<div class="buyukdiv">
    <a href="{{ route('home') }}"><img src="{{ asset('images/persite-logo.png') }}" alt=""></a>
<div class="wrapper">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email -->
        <div class="input-box">
            <input id="email" type="email" name="email" value="{{ old('email') }}"  autocomplete="off" required placeholder="Email">
            <i class="fa-solid fa-user"></i>

        </div>

        <!-- Password -->
        <div class="input-box">
            <input id="password" type="password" name="password" required autocomplete="current-password" placeholder="Password" >
            <i class="fa-solid fa-lock"></i>

            <x-input-error  :messages="$errors->get('email')" class="errors" />
        </div>

        <!-- Remember Me -->
        <div class="remember-forgot">
            <label for="remember_me" >
                <input id="remember_me" type="checkbox" name="remember">
                <span>{{ __('Remember me') }}</span>
            </label>

            <!-- Forgot Password Link -->
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <!-- Register Link -->
                <a href="{{ route('register') }}">
                    {{ __('Register') }}
                </a>
        </div>

        <!-- Login Button -->
        <button class="btn" type="submit">
            {{ __('Log in') }}
        </button>
        <x-auth-session-status :status="session('status')" />

    </form>
</div>
</div>
</body>
</html>

