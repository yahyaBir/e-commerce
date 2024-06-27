<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('build/assets/css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/css/reboot.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/css/slider.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/css/product.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/css/footer.css') }}">
    <title>Persite | Website</title>
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


<div class="slider-container">
    <div class="slider">
        <div class="slide" style="background-image: url('{{ asset('images/ikea-lamp.jpg') }}')"></div>
        <div class="slide" style="background-image: url('{{ asset('images/ikea-markus-office-chair-review.png') }}');"></div>
        <div class="slide" style="background-image: url('{{ asset('images/ikea-desk.jpg') }}')"></div>
    </div>
    <div class="pagination"></div>
</div>
<script src="{{ asset('build/assets/js/script.js') }}"></script>

<div class="products-container">
    @foreach($products as $product)
        <div class="product" data-aos="fade-up">
            <a href="{{ route('product-details', $product->id) }}">
                <img src="{{ asset($product->image) }}" alt="">
                <div class="product-info">
                    <h3>{{ $product->name }}</h3>
                    <p>{{ $product->short_content }}</p>
                    <p class="price">{{ $product->price }} TL</p>
                </div>
            </a>
        </div>
    @endforeach


</div>

<div class="aboutus-container" id="hakkımızda">
    <div><h2>Hakkımızda</h2></div>
    <div class="aboutus-text">
        <p>  Persite olarak, minimal tasarımı ve işlevselliği bir araya getirerek ofis ortamlarını daha verimli
            ve estetik hale getiren ürünler sunuyoruz. Amacımız, modern çalışma alanlarının ihtiyaçlarına uygun,
            şık ve kullanışlı ofis malzemeleri ile iş
            yerlerinde ve ev ofislerinde ilham verici bir atmosfer yaratmaktır.
            <br><br>Kurulduğumuz günden bu yana, müşterilerimizin iş hayatını kolaylaştıran
            ve çalışma alanlarını güzelleştiren ürünler tasarlamak için çalışıyoruz.
            Her bir ürünümüz, yüksek kalite standartlarına uygun olarak üretilmekte ve minimal
            tasarım anlayışımızı yansıtmaktadır.</p>
    </div>
</div>
<footer class="footer">
    <div class="footer-container">
        <div class="footer-logo">
            <img src="{{ asset('images/persite-logo.png') }}" alt="Persite Logo" class="logo">
        </div>

        <div class="footer-socials">
            <a href="#">
                <i class="fa-brands fa-whatsapp"></i>
            </a>
            <a href="#">
                <i class="fa-brands fa-linkedin"></i>
            </a>
            <a href="#">
                <i class="fa-brands fa-instagram"></i>
            </a>
        </div>
    </div>
</footer>

</body>
</html>

