<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    @stack('css')
    <style>
        .bg-green{background-color: #79BC29 !important}
        .bg-green-active:hover:focus:active{background-color: #79BC29 !important}
        .text-green{color: #79BC29 !important}
        .text-grey{color: #C4C4C4 !important}
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('assets/img/logo/hippoku-logo.svg') }}" alt="Hippoku" width="200">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.hippo.id/product-category/power-bank" target="_blank">Power Bank</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.hippo.id/product-category/battery" target="_blank">Battery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.hippo.id/product-category/adaptor" target="_blank">Adaptor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.hippo.id/product-category/sound" target="_blank">Sound</a>
                    </li>
                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('my-products')}}">Produk Kamu</a>
                    </li>
                    <li class="nav-item">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                        <a class="nav-link" href="javascript:void(0)" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    <footer style="background-color: #F5F5F7;">
        <div class="container">
            <footer class="pt-5">
                <div class="row">
                    <div class="col-md-2 col-6">
                    <h5>Produk</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="https://www.hippo.id/product-category/power-bank" target="_blank" class="nav-link p-0 text-muted">Powerbank</a></li>
                        <li class="nav-item mb-2"><a href="https://www.hippo.id/product-category/battery" target="_blank" class="nav-link p-0 text-muted">Battery</a></li>
                        <li class="nav-item mb-2"><a href="https://www.hippo.id/product-category/adapter" target="_blank" class="nav-link p-0 text-muted">Adapter</a></li>
                        <li class="nav-item mb-2"><a href="https://www.hippo.id/product-category/cable" target="_blank" class="nav-link p-0 text-muted">Cable</a></li>
                        <li class="nav-item mb-2"><a href="https://www.hippo.id/product-category/car-charger" target="_blank" class="nav-link p-0 text-muted">Car Charger</a></li>
                        <li class="nav-item mb-2"><a href="https://www.hippo.id/product-category/phone-holder" target="_blank" class="nav-link p-0 text-muted">Phone Holder</a></li>
                        <li class="nav-item mb-2"><a href="https://www.hippo.id/product-category/sound" target="_blank" class="nav-link p-0 text-muted">Sound</a></li>
                        <li class="nav-item mb-2"><a href="https://www.hippo.id/product-category/temperred-glass" target="_blank" class="nav-link p-0 text-muted">Temperred Glass</a></li>
                        <li class="nav-item mb-2"><a href="https://www.hippo.id/product-category/otg" target="_blank" class="nav-link p-0 text-muted">OTG</a></li>
                    </ul>
                    </div>
                    <div class="col-md-2 col-6">
                    <h5>Shop</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="https://www.hippo.id" target="_blank" class="nav-link p-0 text-muted">Promo</a></li>
                    </ul>
                    </div>
                    <div class="col-md-2 col-6 mt-sm-0 mt-3">
                        <h5>Dukungan</h5>
                        <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="https://www.hippo.id/hippo-care-partner/" target="_blank" class="nav-link p-0 text-muted">Hippo Care</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-6 mt-sm-0 mt-3">
                    <h5>Tentang</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="https://www.hippo.id/our-company/" target="_blank" class="nav-link p-0 text-muted">Hippo Indonesia</a></li>
                        <li class="nav-item mb-2"><a href="https://www.hippo.id/brand/" target="_blank" class="nav-link p-0 text-muted">Brand</a></li>
                        <li class="nav-item mb-2"><a href="https://www.hippo.id/karir/" target="_blank" class="nav-link p-0 text-muted">Karir</a></li>
                    </ul>
                    </div>
                    <div class="col-md-4 col-12 mt-sm-0 mt-3 text-md-start text-center">
                        <h5 class="">Download Aplikasi ILIOS</h5>
                        <div>
                            <a href="https://apps.apple.com/id/app/ilios-id/id1533510860" target="_blank"><img src="{{ asset('assets/img/logo/app-store-button.webp') }}" alt="Download aplikasi ilios di App Store" width="150" class="img-responsive"></a>
                            <a href="https://play.google.com/store/apps/details?id=com.nalphas.ilios" target="_blank"><img src="{{ asset('assets/img/logo/google-play-button.webp') }}" alt="Download aplikasi ilios di Play Store" width="150" class="img-responsive"></a>
                        </div>
                        <div class="mt-4">
                            <p class="mb-2">Tetap Terhubung</p>
                            <div>
                                <a href="https://www.facebook.com/pg/hippoofficial.id" target="_bland"><img width="35" src="{{ asset('assets/img/logo/facebbok-logo.svg') }}" alt="Facebook"></a>
                                <a href="https://www.instagram.com/hippoofficial.id/" target="_bland"><img width="35" src="{{ asset('assets/img/logo/instagram-logo.svg') }}" alt="Instagram"></a>
                                <a href="https://www.instagram.com/hippoofficial.id/" target="_bland"><img width="35" src="{{ asset('assets/img/logo/youtube-logo.svg') }}" alt="Youtube"></a>
                                <a href="https://www.linkedin.com/company/ics-hippo/?viewAsMember=true" target="_bland"><img width="35" src="{{ asset('assets/img/logo/linkedin-logo.svg') }}" alt="Linkedin"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between pt-4 mt-4 border-top">
                    <p>Hak Cipta &copy; <?php echo date('Y') ?> HIPPO Indonesia. Semua hak dilindungi undang-undang.</p>
                </div>
            </footer>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
        $('form').on('submit', function() {
            $(this).find(':submit').attr('disabled', true).text('Loading...');
        });
    </script>
    @stack('js')
</body>
</html>
