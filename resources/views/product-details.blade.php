<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('build/assets/css/productdetails.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/css/reboot.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/css/slider.css') }}">
    <title>{{ $product->name }} - Ürün Detayları</title>

</head>
<body>

<nav>
    <div class="navbar-container">
        <a href="{{ route('home') }}"><img src="{{ asset('images/persite-logo.png') }}"></a>
        <ul>
            <li><a id="hakkımızda-navbar" href="{{ route('home') }}">Hakkımızda</a></li>
            <li><a href="{{ route('login') }}">Giriş Yap &<br><span>veya Üye OL</span></a></li>
            <li>
                <a href="{{ route('profile.edit') }}">
                    <i class="fa-solid fa-user" style="color: #ffffff"></i>
                </a>
            </li>
            <li><a href="{{ route('cart-view') }}"><i class="fa-solid fa-bag-shopping" style="color: #ffffff"></i></a></li>
        </ul>
    </div>
</nav>

<section class="product-container">

    <div class="img-card">
        <img src="{{ asset($product->image) }}" alt="" id="featured-image">
    </div>

    <div class="product-info">
        <h3>{{ $product->name }}</h3>
        <h5>{{ $product->price }} ₺</h5>
        <p>{{ $product->short_content }}</p>
        <p>{{ $product->content }}</p>

        @if (session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{route('cart-add')}}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$product->id}}">

            <div class="quantity">
            <input type="number" value="1" name="quantity" min="1">
            <button type="submit">Add to Cart</button>
        </div>
        </form>
        <div>
            <p>Teslimat:</p>
            <p>300 TL üzerindeki siparişlerde ücretsiz gönderim.</p>
            <div class="delivery">
                <p>TESLİMAT TİPİ</p> <p>NE KADAR SÜRER</p> <p>NE KADAR</p>
            </div>
            <hr>
            <div class="delivery">
                <p>Standart Teslimat</p>
                <p>1-4 iş günü</p>
                <p>35 TL</p>
            </div>
            <hr>
            <div class="delivery">
                <p>Hızlı Teslimat</p>
                <p>1 iş günü</p>
                <p>70 TL</p>
            </div>
            <hr>
            <div class="delivery">
                <p>Mağazadan al</p>
                <p>1-3 iş günü</p>
                <p>Bedava</p>
            </div>
        </div>
    </div>
</section>
</body>
</html>
