<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('build/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/css/reboot.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/css/profiledit.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="logo-profile">
        <a href="{{ route('home') }}"><img src="{{ asset('images/persite-logo.png') }}"></a>
    </div>
    <div class="profile-container">
        <div class="profile-parts">
            <div class="input-box">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>
        <div class="profile-parts">
                <div class="input-box">
                    @include('profile.partials.update-password-form')
                </div>
        </div>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-dropdown-link class="button-1" :href="route('logout')"
                             onclick="event.preventDefault();
                    this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-dropdown-link>
        </form>

    </div>
</body>
</html>

