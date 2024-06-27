<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('build/assets/css/style.css') }}">
    <title>Reset Password</title>
</head>
<body>

    <div class="wrapper">
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div class="input-box">
            <input id="email"  type="email" name="email" value="{{old('email', $request->email)}}" autocomplete="off" required placeholder="Email" >
            <x-input-error :messages="$errors->get('email')"  />
        </div>
        <!-- Password -->
        <div class="input-box">
            <input id="password"  type="password" name="password" required autocomplete="new-password" placeholder="Password">
            <x-input-error :messages="$errors->get('password')"  />
        </div>

        <!-- Confirm Password -->
        <div class="input-box">
            <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" >
            <x-input-error :messages="$errors->get('password_confirmation')"  />
        </div>

        <div >
            <button class="btn" type="submit">
                {{ __('Reset Password') }}
            </button>
        </div>
    </form>
    </div>
</body>
</html>
