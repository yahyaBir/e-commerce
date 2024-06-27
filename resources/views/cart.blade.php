<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('build/assets/css/cart.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/css/reboot.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/css/slider.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/css/product.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/css/footer.css') }}">

</head>
<body>
<nav>
    <div class="navbar-container">
        <a href="{{ route('home') }}"><img src="{{ asset('images/persite-logo.png') }}"></a>
        <ul>
            <li><a id="hakkımızda-navbar" href="#hakkımızda">Hakkımızda</a></li>
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
<div class="cart-container">


    <h1>Sepetim</h1>
    @if(session()->get('success'))
        <div class="success-message">{{session()->get('success')}}</div>
    @endif
    <table class="cart-table">
        <thead>
        <tr>
            <th>Ürün Resmi</th>
            <th>Ürün İsmi</th>
            <th>Fiyat</th>
            <th>Adet</th>
            <th>Ürün Tutarı</th>
            <th>Sil</th>
        </tr>
        </thead>
        <tbody>
        @if($cartItem)
            @foreach($cartItem as $key => $cart)
                <tr class="cart-item">
                    <td><img src="{{asset($cart['image'])}}" alt="Product 1" class="product-image"></td>
                    <td>{{$cart['name']}}</td>
                    <td>{{$cart['price']}} TL</td>
                    <td>
                        <span class="quantity">{{$cart['quantity']}}</span>
                    </td>
                    <td class="item-total">{{$cart['price'] * $cart['quantity']}} TL</td>
                    <td>
                        <form action="{{route('cart-remove')}}" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{$key}}">
                            <button type="submit" class="btn-remove">Sil</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    <div class="cart-summary">
        <h2>Sepet Tutarı: {{$totalPrice}} TL</h2>
        <button type="submit" class="btn-checkout">Siparişi Onayla</button>
    </div>
</div>
</body>
</html>
