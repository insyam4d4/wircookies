<!DOCTYPE html>
<html class="no-js">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Meghna One page parallax responsive HTML Template ">

    <meta name="author" content="WirCookies">

    <title>WirCookies</title>

    <!-- Mobile Specific Meta
    45
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" /> -->

    <!-- CSS
  ================================================== -->
    <!-- Fontawesome Icon font -->
    <link rel="stylesheet" href="{{ asset('templates/meghna/plugins/themefisher-font/style.css') }}">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{ asset('templates/meghna/plugins/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('templates/meghna/plugins/animate-css/animate.css') }}">
    <!-- Magnific popup css -->
    <link rel="stylesheet" href="{{ asset('templates/meghna/plugins/magnific-popup/dist/magnific-popup.css') }}">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="{{ asset('templates/meghna/plugins/slick-carousel/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/meghna/plugins/slick-carousel/slick/slick-theme.css') }}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('templates/meghna/css/style.css') }}">
</head>

<body id="body" data-spy="scroll" data-target=".navbar" data-offset="50">
    <!--
 Start Preloader
 ==================================== -->
    <div class="preloader">
        <div class="sk-cube-grid">
            <div class="sk-cube sk-cube1"></div>
            <div class="sk-cube sk-cube2"></div>
            <div class="sk-cube sk-cube3"></div>
            <div class="sk-cube sk-cube4"></div>
            <div class="sk-cube sk-cube5"></div>
            <div class="sk-cube sk-cube6"></div>
            <div class="sk-cube sk-cube7"></div>
            <div class="sk-cube sk-cube8"></div>
            <div class="sk-cube sk-cube9"></div>
        </div>
    </div>
    <!-- End Preloader
        ==================================== -->

    <!--
Welcome Slider
==================================== -->

    <section class="hero-area overlay" style="background-image: url('{{ asset('media/images/cookies1.jpg') }}');">
        <!-- <video autoplay muted loop class="hero-video">
  <source src="images/banner/hero-video.mp4" type="video/mp4">
 </video> -->
        <div class="block">
            {{-- <div class="video-button">
                <a class="popup-video" href="https://www.youtube.com/watch?v=jrkvirglgaQ">
                    <i class="tf-ion-play"></i>
                </a>
            </div> --}}
            <h1>Wir-Cookies</h1>
            <p class="st-font-caveat" style="font-size: 30px !important;">Rumah Cookies</p>
            <a data-scroll href="#portfolio" class="btn btn-transparent">Lihat Menu</a>
        </div>
    </section>

    <!--
  Fixed Navigation
  ==================================== -->
    <header id="navigation" class="navbar navigation">
        <div class="container">
            <div class="navbar-header">
                <!-- responsive nav button -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- /responsive nav button -->

                <!-- logo -->
                <a class="navbar-brand logo st-text-header" href="#body">
                    <!-- <img src="images/logo.png" alt="Website Logo" /> -->
                    WirCookies
                </a>
                <!-- /logo -->
            </div>

            <!-- main nav -->
            <nav class="collapse navbar-collapse navbar-right" role="Navigation">
                <ul id="nav" class="nav navbar-nav navigation-menu">
                    <li><a data-scroll href="#body">Beranda</a></li>
                    <li><a data-scroll>|</a></li>
                    <li><a data-scroll href="#about-us">Tentang Kami</a></li>
                    <li><a data-scroll>|</a></li>
                    {{-- <li><a data-scroll href="#services">Services</a></li> --}}
                    <li><a data-scroll href="#portfolio">Khas WirCookies</a></li>
                    <li><a data-scroll>|</a></li>
                    {{-- <li><a data-scroll href="#our-team">Team</a></li>
                    <li><a data-scroll href="#pricing">Pricing</a></li>
                    <li><a data-scroll href="#blog">Blog</a></li> --}}
                    <li><a data-scroll href="#contact-us">Kontak</a></li>
                </ul>
            </nav>
            <!-- /main nav -->

        </div>
    </header>
    <!--
  End Fixed Navigation
  ==================================== -->
    <div class="container">
        <hr>
    </div>

    <!--
  Start About Section
  ==================================== -->
    <section class="bg-one about section">
        <div class="container">
            <div class="row">

                <!-- section title -->
                <div class="title text-center wow fadeIn" data-wow-duration="1500ms">
                    <h2>Tentang <span class="color">Kami</span> </h2>
                    <div class="border"></div>
                </div>
                <!-- /section title -->

                <!-- About item -->
                <div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms">
                    <div class="block">
                        <div class="icon-box">
                            <i class="tf-ion-spoon"></i>
                        </div>
                        <!-- Express About Yourself -->
                        <div class="content text-center">
                            <h3 style="padding-top: 25px; padding-bottom: 25px;">BPOM</h3>
                            <p>Sudah bersertifikasi resmi dari BPOM.</p>
                        </div>
                    </div>
                </div>
                <!-- End About item -->

                <!-- About item -->
                <div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="250ms">
                    <div class="block">
                        <div class="icon-box">
                            <i class="tf-ion-thumbsup"></i>
                        </div>
                        <!-- Express About Yourself -->
                        <div class="content text-center">
                            <h3 style="padding-top: 25px; padding-bottom: 25px;">Makanan unik dan manis</h3>
                            <p>Menyediakan berbagai macam makanan manis seperti Cookies, Pie, Macaroon, Moci,Dessert Box
                                dan lain-lain.</p>
                        </div>
                    </div>
                </div>
                <!-- End About item -->

                <!-- About item -->
                <div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
                    <div class="block kill-margin-bottom">
                        <div class="icon-box">
                            <i class="tf-ion-android-checkmark-circle"></i>
                        </div>
                        <!-- Express About Yourself -->
                        <div class="content text-center">
                            <h3 style="padding-top: 25px; padding-bottom: 25px;">Halalan Thayyiban</h3>
                            <p>Selain citra menu makanan yang enak, tentunya menu tersebut halalan thayyiban, sehat, dan
                                bergizi.</p>
                        </div>
                    </div>
                </div>
                <!-- End About item -->

            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- End section -->

    <!--
Start Call To Action
==================================== -->
    <section class="call-to-action section-sm overly"
        style="background-image: url('{{ asset('media/images/cookies1.jpg') }}'); background-repeat: no-repeat; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Oh My Cookies!</h2>
                    <p>SEJAK 2020</p>
                    <a href="#" class="btn btn-main">Hubungi Kami</a>
                </div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- End section -->

    <!-- Start Services Section
==================================== -->

    {{-- <section class="section about-2 padding-0 bg-dark" id="about-us">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 padding-0 ">
                    <img class="img-responsive" src="images/about/about-business-man.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <div class="content-block">
                        <h2>We’re A Digital Design Agency.</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam tempora itaque, autem
                            dolores culpa cum mollitia voluptate nesciunt voluptatibus quasi.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis eveniet vel et mollitia
                            nemo corporis sed ut, exercitationem incidunt, rerum nam doloremque quos ratione doloribus,
                            officiis adipisci error quasi soluta?</p>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore, magnam.</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="media">
                                    <div class="pull-left">
                                        <i class="tf-circle-compass"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">SEO Optimized</h4>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus
                                            consectetur dolores repellendus eos saepe</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="media">
                                    <div class="pull-left">
                                        <i class="tf-hotairballoon"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Easy Customization</h4>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus
                                            consectetur dolores repellendus </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section id="services" class="bg-one section">
        <div class="container">
            <div class="row">

                <!-- section title -->
                <div class="title text-center wow fadeIn" data-wow-duration="500ms">
                    <h2><span class="color">Fasilitas</span></h2>
                    <div class="border"></div>
                </div>
                <!-- /section title -->

                <!-- Single Service Item -->
                <article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms">
                    <div class="service-block text-center">
                        <div class="service-icon text-center">
                            <i class="tf-ion-ios-home"></i>
                        </div>
                        <h3>Mushola</h3>
                        <p>Bagi yang ingin melaksanakan ibadah sholat sudah di sediakan mushola kecil.</p>
                    </div>
                </article>
                <!-- End Single Service Item -->

                <!-- Single Service Item -->
                <article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms"
                    data-wow-delay="200ms">
                    <div class="service-block text-center">
                        <div class="service-icon text-center">
                            <i class="tf-ion-waterdrop"></i>
                        </div>
                        <h3>Kamar Mandi</h3>
                        <p>Terdapat 2 kamar mandi yang dapat digunakan untuk BAK atau BAB.</p>
                    </div>
                </article>
                <!-- End Single Service Item -->

                <!-- Single Service Item -->
                <article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms"
                    data-wow-delay="400ms">
                    <div class="service-block text-center">
                        <div class="service-icon text-center">
                            <i class="tf-ion-android-car"></i>
                        </div>
                        <h3>Parkiran Luas</h3>
                        <p>Tidak perlu khawatir untuk area parkir kendaraan, kami menyediakan parkiran yang luas.</p>
                    </div>
                </article>
                <!-- End Single Service Item -->

                <!-- Single Service Item -->
                <article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms"
                    data-wow-delay="200ms">
                    <div class="service-block text-center">
                        <div class="service-icon text-center">
                            <i class="tf-ion-ios-pricetag"></i>
                        </div>
                        <h3>Warung Kecil</h3>
                        <p>Terdapat warung kecil yang menjual makanan ringan, minuman, rokok, tissue, dll.</p>
                    </div>
                </article>
                <!-- End Single Service Item -->

                <!-- Single Service Item -->
                <article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms"
                    data-wow-delay="400ms">
                    <div class="service-block text-center">
                        <div class="service-icon text-center">
                            <i class="tf-grid"></i>
                        </div>
                        <h3>Foto Box</h3>
                        <p>Bagi yang ingin berfoto kita sudah menyediakan tembat berfoto semacam foto box </p>
                    </div>
                </article>
                <!-- End Single Service Item -->

                <!-- Single Service Item -->
                <article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms"
                    data-wow-delay="600ms">
                    <div class="service-block text-center kill-margin-bottom">
                        <div class="service-icon text-center">
                            <i class="tf-ion-ios-box"></i>
                        </div>
                        <h3>Katering</h3>
                        <p>Menerima pesanan dalam bentuk katering (jemput/antar).</p>
                    </div>
                </article>
                <!-- End Single Service Item -->

            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- End section -->


    <!-- Start Team Skills
  =========================================== -->

    {{-- <section id="team-skills" class="parallax-section section section-bg overly">
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="col-md-12">
                    <div class="title text-center">
                        <h2>Our <span class="color">Skills</span></h2>
                        <div class="border"></div>
                    </div>
                </div>
                <!-- /section title -->
            </div> <!-- End row -->
            <div class="row">
                <div class="col-md-6">
                    <h2>We’ve skilled in wide range of web and <br>
                        Other digital market tools.</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis magni explicabo cum
                        aperiam recusandae sunt accusamus totam. Quidem quos fugiat sapiente numquam accusamus quas hic,
                        itaque in libero reiciendis tempora!</p>
                    <img class="img-responsive" src="images/about/company-growth.png" alt="">
                </div>
                <div class="col-md-6">
                    <ul class="skill-bar">
                        <li>
                            <p><span>01-</span> Business Development</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                    aria-valuemax="100" style="width:90%">
                                </div>
                            </div>
                        </li>
                        <li>
                            <p><span>02-</span> Analysis</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                    aria-valuemax="100" style="width:70%">
                                </div>
                            </div>
                        </li>
                        <li>
                            <p><span>03-</span> Design</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                    aria-valuemax="100" style="width:85%">
                                </div>
                            </div>
                        </li>
                        <li>
                            <p><span>04-</span> IOS Development</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                    aria-valuemax="100" style="width:60%">
                                </div>
                            </div>
                        </li>
                        <li>
                            <p><span>04-</span> Andriod Development</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                    aria-valuemax="100" style="width:94%">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div> <!-- End container -->
    </section> <!-- End section --> --}}

    <!-- Start Portfolio Section
  =========================================== -->

    <section class="portfolio section" id="portfolio">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12">
                    <!-- section title -->
                    <div class="title text-center">
                        <h2>Khas <span class="color">WirCookies</span></h2>
                        <div class="border"></div>
                    </div>
                    <!-- /section title -->
                </div> <!-- /end col-lg-12 -->
            </div> <!-- end row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="portfolio-filter">
                        <button class="active" type="button" data-filter="all">Semua</button>
                        <button type="button" data-filter="favorite">Favorite</button>
                        @foreach ($menuCategories as $menuCategory)
                            <button type="button"
                                data-filter="{{ Str::slug($menuCategory->name, '-') }}">{{ $menuCategory->name }}</button>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row filtr-container">
                @foreach ($menus as $menu)
                    <div class="col-lg-4 filtr-item"
                        data-category="{{ Str::slug($menu->menuCategory->name, '-') }}">
                        <div class="portfolio-block">
                            <img class="img-responsive" src="{{ $menu->image_url }}" alt="">
                            <div class="caption">
                                <a class="search-icon image-popup" data-effect="mfp-with-zoom"
                                    href="{{ $menu->image_url }}" data-lightbox="image-1">
                                    <i class="tf-ion-android-search"></i>
                                </a>
                                <h4><a href="">{{ $menu->name }}</a></h4>
                                <p>{{ $menu->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div> <!-- end container -->
    </section> <!-- End section -->

    <!--
Start Counter Section
==================================== -->

    <section id="counter" class="call-to-action section overly"
        style="background-image: url('{{ asset('media/images/wood6.jpg') }}'); background-repeat: no-repeat; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center" style="margin-bottom: 40px;">
                    <h2>Galeri Terbaru</h2>
                </div>

                <hr>

                @for ($i = 0; $i < 4; $i++)
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms">
                        <div class="portfolio-block">
                            <img class="img-responsive" src="{{ asset('media/images/cookies1.jpg') }}"
                                alt="">
                            <div class="caption">
                                <a class="search-icon image-popup" data-effect="mfp-with-zoom"
                                    href="{{ asset('media/images/cookies1.jpg') }}" data-lightbox="image-1">
                                    <i class="tf-ion-android-search"></i>
                                </a>
                                <h4>Lihat Foto</h4>
                            </div>
                        </div>
                    </div>
                @endfor

                <div class="col-md-12 text-center">
                    <a href="#" class="btn btn-main">Lihat Semua</a>
                </div>

            </div> <!-- end row -->
        </div> <!-- end container -->
    </section> <!-- end section -->

    <!--
Start Our Team
=========================================== -->

    <section id="our-team" class="section">
        <div class="container">
            <div class="row">

                <!-- section title -->
                <div class="title text-center wow fadeInUp" data-wow-duration="500ms">
                    <h2>Tim <span class="color">Kami</span></h2>
                    <div class="border"></div>
                </div>
                <!-- /section title -->

                @for ($i = 0; $i < 4; $i++)
                    <!-- team member -->
                    <div class="col-md-3 col-sm-6 col-xs-12  wow fadeInDown" data-wow-duration="500ms">
                        <div class="team-member">
                            <div class="member-photo">
                                <!-- member photo -->
                                <img class="img-responsive"
                                    src="https://media.istockphoto.com/photos/chef-presenting-a-plate-of-food-picture-id1369920192?b=1&k=20&m=1369920192&s=170667a&w=0&h=BdA9eZ0RXwlAeRdaUfn-VYMVcWyG5m019GI5HAaKTLQ="
                                    alt="Meghna">
                                <!-- /member photo -->

                                <!-- member social profile -->
                                <div class="mask">
                                    <ul class="list-inline">
                                        <li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
                                        <li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
                                        <li><a href="#"><i class="tf-ion-social-linkedin"></i></a></li>
                                        <li><a href="#"><i class="tf-ion-social-dribbble-outline"></i></a></li>
                                    </ul>
                                </div>
                                <!-- /member social profile -->
                            </div>

                            <!-- member name & designation -->
                            <div class="member-meta">
                                <h4><H1</H1></h4>
                                <span>Staff</span>
                            </div>
                            <!-- /member name & designation -->
                            <!-- /about member -->

                        </div>
                    </div>
                    <!-- end team member -->
                @endfor

            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- End section -->


    <!-- Start Pricing section
  =========================================== -->

    {{-- <section id="pricing" class="pricing section">
        <div class="container">
            <div class="row">

                <!-- section title -->
                <div class="title text-center wow fadeInDown" data-wow-duration="500ms">
                    <h2>Our Greatest<span class="color"> Plans</span></h2>
                    <div class="border"></div>
                </div>
                <!-- /section title -->

                <!-- single pricing table -->
                <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp" data-wow-duration="200ms">
                    <div class="price-item">

                        <!-- plan name & value -->
                        <div class="price-title">
                            <h3>Free</h3>
                            <p><strong class="value">$99</strong>/ month</p>
                        </div>
                        <!-- /plan name & value -->

                        <!-- plan description -->
                        <ul>
                            <li>1GB Disk Space</li>
                            <li>10 Email Account</li>
                            <li>Script Installer</li>
                            <li>1 GB Storage</li>
                            <li>10 GB Bandwidth</li>
                            <li>24/7 Tech Support</li>
                        </ul>
                        <!-- /plan description -->

                        <!-- signup button -->
                        <a class="btn btn-transparent" href="#">Signup</a>
                        <!-- /signup button -->

                    </div>
                </div>
                <!-- end single pricing table -->

                <!-- single pricing table -->
                <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp" data-wow-duration="500ms"
                    data-wow-delay="400ms">
                    <div class="price-item">

                        <!-- plan name & value -->
                        <div class="price-title">
                            <h3>Silver</h3>
                            <p><strong class="value">$149</strong />/ month</p>
                        </div>
                        <!-- /plan name & value -->

                        <!-- plan description -->
                        <ul>
                            <li>1GB Disk Space</li>
                            <li>10 Email Account</li>
                            <li>Script Installer</li>
                            <li>1 GB Storage</li>
                            <li>10 GB Bandwidth</li>
                            <li>24/7 Tech Support</li>
                        </ul>
                        <!-- /plan description -->

                        <!-- signup button -->
                        <a class="btn btn-transparent" href="#">Signup</a>
                        <!-- /signup button -->

                    </div>
                </div>
                <!-- end single pricing table -->

                <!-- single pricing table -->
                <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp" data-wow-duration="500ms"
                    data-wow-delay="600ms">
                    <div class="price-item">

                        <!-- plan name & value -->
                        <div class="price-title">
                            <h3>Gold</h3>
                            <p><strong class="value">$199</strong />/ month</p>
                        </div>
                        <!-- /plan name & value -->

                        <!-- plan description -->
                        <ul>
                            <li>1GB Disk Space</li>
                            <li>10 Email Account</li>
                            <li>Script Installer</li>
                            <li>1 GB Storage</li>
                            <li>10 GB Bandwidth</li>
                            <li>24/7 Tech Support</li>
                        </ul>
                        <!-- /plan description -->

                        <!-- signup button -->
                        <a class="btn btn-transparent" href="#">Signup</a>
                        <!-- /signup button -->

                    </div>
                </div>
                <!-- end single pricing table -->

                <!-- single pricing table -->
                <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp" data-wow-duration="500ms"
                    data-wow-delay="750ms">
                    <div class="price-item">

                        <!-- plan name & value -->
                        <div class="price-title">
                            <h3>Platinum</h3>
                            <p><strong class="value">$299</strong />/ month</p>
                        </div>
                        <!-- /plan name & value -->

                        <!-- plan description -->
                        <ul>
                            <li>1GB Disk Space</li>
                            <li>10 Email Account</li>
                            <li>Script Installer</li>
                            <li>1 GB Storage</li>
                            <li>10 GB Bandwidth</li>
                            <li>24/7 Tech Support</li>
                        </ul>
                        <!-- /plan description -->

                        <!-- signup button -->
                        <a class="btn btn-transparent" href="#">Signup</a>
                        <!-- /signup button -->

                    </div>
                </div>
                <!-- end single pricing table -->


            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- End section --> --}}

    <!-- Start Testimonial
  =========================================== -->

    {{-- <section id="testimonial" class="testimonial overly section bg-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- testimonial wrapper -->
                    <div id="testimonials" class="wow fadeInUp" data-wow-duration="500ms" data-wow-delay="100ms">

                        <!-- testimonial single -->
                        <div class="item text-center">

                            <!-- client photo -->
                            <div class="client-thumb">
                                <img src="images/team/client-1.jpg" class="img-responsive" alt="Meghna">
                            </div>
                            <!-- /client photo -->

                            <!-- client info -->
                            <div class="client-info">
                                <div class="client-meta">
                                    <h3>Jonathon Andrew</h3>
                                    <span>Dec 26, 2018</span>
                                </div>
                                <div class="client-comment">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium minima ex,
                                        quia error, deserunt voluptatibus repellendus? Incidunt eligendi aliquam
                                        repellat molestias, vel sed optio rem odit quis ratione non consequuntur!</p>
                                </div>
                            </div>
                            <!-- /client info -->
                        </div>
                        <!-- /testimonial single -->

                        <!-- testimonial single -->
                        <div class="item text-center">

                            <!-- client photo -->
                            <div class="client-thumb">
                                <img src="images/team/client-2.jpg" class="img-responsive" alt="Meghna">
                            </div>
                            <!-- /client photo -->

                            <!-- client info -->
                            <div class="client-info">
                                <div class="client-meta">
                                    <h3>Jonathon Andrew</h3>
                                    <span>Dec 26, 2018</span>
                                </div>
                                <div class="client-comment">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel reiciendis qui in
                                        laborum obcaecati expedita blanditiis animi placeat, nemo exercitationem porro.
                                        Consequuntur qui commodi minima molestiae, dolores reprehenderit nemo inventore.
                                    </p>
                                </div>
                            </div>
                            <!-- /client info -->
                        </div>
                        <!-- /testimonial single -->

                        <!-- testimonial single -->
                        <div class="item text-center">

                            <!-- client photo -->
                            <div class="client-thumb">
                                <img src="images/team/client-1.jpg" class="img-responsive" alt="Meghna">
                            </div>
                            <!-- /client photo -->

                            <!-- client info -->
                            <div class="client-info">
                                <div class="client-meta">
                                    <h3>Jonathon Andrew</h3>
                                    <span>Dec 26, 2018</span>
                                </div>
                                <div class="client-comment">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia dolorem non
                                        delectus neque, voluptatem accusamus atque expedita doloribus minima iusto nemo,
                                        numquam eos quia maiores harum! Quaerat illum beatae necessitatibus!</p>
                                </div>
                            </div>
                            <!-- /client info -->
                        </div>
                        <!-- /testimonial single -->

                    </div> <!-- end testimonial wrapper -->
                </div> <!-- end col lg 12 -->
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- End Section --> --}}

    <!-- Start Blog Section =========================================== -->

    {{-- <section id="blog" class="section">
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="title text-center wow fadeInDown">
                    <h2> Latest <span class="color">Posts</span></h2>
                    <div class="border"></div>
                </div>
                <!-- /section title -->
                <div class="clearfix">
                    <!-- single blog post -->
                    <article class="col-md-4 col-sm-6 col-xs-12 clearfix wow fadeInUp" data-wow-duration="500ms">
                        <div class="post-block">
                            <div class="media-wrapper">
                                <img src="images/blog/blog-post-1.jpg" alt="amazing caves coverimage"
                                    class="img-responsive">
                            </div>
                            <div class="content">
                                <h3><a href="">Simple Image Post</a></h3>
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson
                                    ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
                                <a class="btn btn-transparent" href="blog-single.html">Read more</a>
                            </div>
                        </div>
                    </article>
                    <!-- /single blog post -->

                    <!-- single blog post -->
                    <article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms"
                        data-wow-delay="200ms">
                        <div class="post-block">
                            <div id="gallery-post" class="media-wrapper">
                                <div class="item">
                                    <img src="images/blog/blog-post-1.jpg" alt="blog post" class="img-responsive">
                                </div>
                                <div class="item">
                                    <img src="images/blog/blog-post-3.jpg" alt="blog post" class="img-responsive">
                                </div>
                                <div class="item">
                                    <img src="images/blog/blog-post-2.jpg" alt="blog post | Meghna"
                                        class="img-responsive">
                                </div>
                            </div>

                            <div class="content">
                                <h3><a href="">Simple Slider Post</a></h3>
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson
                                    ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
                                <a class="btn btn-transparent" href="blog-single.html">Read more</a>
                            </div>
                        </div>
                    </article>
                    <!-- end single blog post -->

                    <!-- single blog post -->
                    <article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms"
                        data-wow-delay="400ms">
                        <div class="post-block">
                            <div class="media-wrapper">
                                <img src="images/blog/blog-post-6.jpg" alt="amazing caves coverimage"
                                    class="img-responsive">
                            </div>

                            <div class="content">
                                <h3><a href="">Simple Image Post</a></h3>
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson
                                    ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
                                <a class="btn btn-transparent" href="blog-single.html">Read more</a>
                            </div>
                        </div>
                    </article>
                    <!-- end single blog post -->
                </div>
                <div class="all-post text-center">
                    <a class="btn btn-main" href="blog.html">View All Post</a>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section> <!-- end section --> --}}

    <!-- Srart Contact Us
=========================================== -->
    <section id="contact-us" class="contact-us">
        <div class="container">
            <div class="row">

                <!-- section title -->
                <div class="title text-center wow fadeIn" data-wow-duration="500ms">
                    <h2>Hubungi <span class="color">Kami</span></h2>
                    <div class="border"></div>
                </div>
                <!-- /section title -->

                <!-- Contact Details -->
                <div class="contact-info col-md-6 wow fadeInUp" data-wow-duration="500ms">
                    <h3>WirCookies</h3>
                    <p>Kunjungi rumah cookies by @wircookies yang ga ada dimana mana.
                        </p>
                    <div class="contact-details">
                        <div class="con-info clearfix">
                            <i class="tf-map-pin"></i>
                            <span>Di mars</span>
                        </div>

                        <div class="con-info clearfix">
                            <i class="tf-ion-ios-telephone-outline"></i>
                            <span>088297186846 (WA)</span>
                        </div>

                        <div class="con-info clearfix">
                            <i class="tf-ion-ios-email-outline"></i>
                            <span>rumah@wircookies.com</span>
                        </div>
                    </div>
                </div>
                <!-- / End Contact Details -->

                <!-- Contact Form -->
                <div class="contact-form col-md-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                    <form id="contact-form" method="post" action="sendmail.php" role="form">

                        <div class="form-group">
                            <input type="text" placeholder="Nama Kamu" class="form-control" name="name"
                                id="name">
                        </div>

                        <div class="form-group">
                            <input type="email" placeholder="Email Kamu" class="form-control" name="email"
                                id="email">
                        </div>

                        <div class="form-group">
                            <input type="text" placeholder="Judul" class="form-control" name="subject"
                                id="subject">
                        </div>

                        <div class="form-group">
                            <textarea rows="6" placeholder="Pesan" class="form-control" name="message" id="message"></textarea>
                        </div>

                        <div id="mail-success" class="success">
                            Terima kasih sudah menghubungi kami :)
                        </div>

                        <div id="mail-fail" class="error">
                            Gagal mengirim pesan, coba lagi nanti :(
                        </div>

                        <div id="cf-submit">
                            <input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit">
                        </div>

                    </form>
                </div>
                <!-- ./End Contact Form -->

            </div> <!-- end row -->
        </div> <!-- end container -->

        <!-- Google Map -->
        <div class="google-map">
            <div id="map-canvas"></div>
        </div>
        <!-- /Google Map -->

    </section> <!-- end section -->


    <!-- end Contact Area
  ========================================== -->

    <footer id="footer" class="bg-one">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-duration="500ms">
                <div class="col-lg-12">

                    <!-- Footer Social Links -->
                    <div class="social-icon">
                        <ul class="list-inline">
                            <li><a href="https://facebook.com/themefisher"><i class="tf-ion-social-facebook"></i></a>
                            </li>
                            <li><a href="https://twitter.com/themefisher"><i class="tf-ion-social-twitter"></i></a>
                            </li>
                            <li><a href="https://www.youtube.com/channel/UCx9qVW8VF0LmTi4OF2F8YdA"><i
                                        class="tf-ion-social-youtube"></i></a></li>
                            <li><a href="https://dribbble.com/themefisher"><i
                                        class="tf-ion-social-dribbble-outline"></i></a></li>
                            <li><a href="https://pinterest.com/themefisher"><i
                                        class="tf-ion-social-pinterest-outline"></i></a></li>
                        </ul>
                    </div>
                    <!--/. End Footer Social Links -->

                    <!-- copyright -->
                    <div class="copyright text-center">
                        <a href="index.html">
                            <!-- <img src="images/logo-meghna.png" alt="Meghna" />  -->
                            <svg width="40px" height="40px" viewBox="0 0 45 44" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                    fill-rule="evenodd">
                                    <g id="Group" transform="translate(2.000000, 2.000000)" stroke="#444343"
                                        stroke-width="3">
                                        <ellipse id="Oval" cx="20.5" cy="20" rx="20.5"
                                            ry="20"></ellipse>
                                        <path d="M6,7 L33.5,34.5" id="Line-2" stroke-linecap="square"></path>
                                        <path d="M21,20 L34,7" id="Line-3" stroke-linecap="square"></path>
                                    </g>
                                </g>
                            </svg>
                        </a>
                        <br />

                        <p>Design And Developed by <a href="http://www.themefisher.com">Themefisher.com</a>. Copyright
                            &copy;
                            <script>
                                document.write(new Date().getFullYear())
                            </script>. All Rights Reserved.
                        </p>
                    </div>
                    <!-- /copyright -->

                </div> <!-- end col lg 12 -->
            </div> <!-- end row -->
        </div> <!-- end container -->
    </footer> <!-- end footer -->
    <!--
  Essential Scripts
  =====================================-->

    <!-- Main jQuery -->
    <script type="text/javascript" src="{{ asset('templates/meghna/plugins/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap 3.1 -->
    <script type="text/javascript" src="{{ asset('templates/meghna/plugins/bootstrap/dist/js/bootstrap.min.js') }}">
    </script>
    <!-- Slick Carousel -->
    <script type="text/javascript" src="{{ asset('templates/meghna/plugins/slick-carousel/slick/slick.min.js') }}">
    </script>
    <!-- Portfolio Filtering -->
    <script type="text/javascript" src="{{ asset('templates/meghna/plugins/filterzr/jquery.filterizr.min.js') }}">
    </script>
    <!-- Smooth Scroll -->
    <script type="text/javascript"
        src="{{ asset('templates/meghna/plugins/smooth-scroll/dist/js/smooth-scroll.min.js') }}"></script>
    <!-- Magnific popup -->
    <script type="text/javascript"
        src="{{ asset('templates/meghna/plugins/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>
    <!-- Google Map API -->
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyArStKENbYHGKHR1lLGx3YmGVb8xR0QH3I&callback=initMap"></script>
    <!-- Sticky Nav -->
    <script type="text/javascript" src="{{ asset('templates/meghna/plugins/Sticky/jquery.sticky.js') }}"></script>
    <!-- Number Counter Script -->
    <script type="text/javascript" src="{{ asset('templates/meghna/plugins/count-to/jquery.countTo.js') }}"></script>
    <!-- wow.min Script -->
    <script type="text/javascript" src="{{ asset('templates/meghna/plugins/wow/dist/wow.min.js') }}"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="{{ asset('templates/meghna/js/script.js') }}"></script>
</body>

</html>
