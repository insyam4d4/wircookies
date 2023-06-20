@extends('frontend.layouts.app')
@push('css')
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
@endpush
@section('content')
<div class="container">
    <section class="py-5">
        <div class="row">
            <div class="@auth col-md-9 @else col-md-12 @endauth">
                <div class="swiper slider-swipe rounded">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide"><img src="{{ asset('assets/img/sliders/slider.png') }}" alt="Slider"></div>
                      <div class="swiper-slide"><img src="{{ asset('assets/img/sliders/slider.png') }}" alt="Slider"></div>
                      <div class="swiper-slide"><img src="{{ asset('assets/img/sliders/slider.png') }}" alt="Slider"></div>
                      <div class="swiper-slide"><img src="{{ asset('assets/img/sliders/slider.png') }}" alt="Slider"></div>
                      <div class="swiper-slide"><img src="{{ asset('assets/img/sliders/slider.png') }}" alt="Slider"></div>
                      <div class="swiper-slide"><img src="{{ asset('assets/img/sliders/slider.png') }}" alt="Slider"></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            @auth
            <div class="col-md-3">
                <div class="card shadow border-0 h-100 py-4">
                    <div class="card-body text-center">
                        <a href="{{ url('add-product') }}">
                            <img src="{{ asset('assets/img/file_dummy.svg') }}">
                        </a>
                        <div class="mt-4">
                            <h5 class="card-title">Hi, {{auth()->user()->name}}</h5>
                            <p class="card-text text-grey">Daftarkan produk baru kamu disini</p>
                        </div>
                    </div>
                </div>
            </div>
            @endauth
        </div>
    </section>
    <section class="py-5">
        <div id="phone-claim-tnc">
            <h2 class="text-center fw-bold text-green">Tata Cara Klaim Garansi</h2>
            <ul class="nav nav-pills mb-3 justify-content-center" id="klaim-tab" role="tablist">
                <li class="nav-item" role="presentation">
                <button class="nav-link rounded-pill active" id="klaim-langsung-tab" data-bs-toggle="pill" data-bs-target="#klaim-langsung" type="button" role="tab" aria-controls="klaim-langsung" aria-selected="true">Kunjungan Langung</button>
                </li>
                <li class="nav-item" role="presentation">
                <button class="nav-link rounded-pill" id="klaim-home-tab" data-bs-toggle="pill" data-bs-target="#klaim-home" type="button" role="tab" aria-controls="klaim-home" aria-selected="false">Dari Rumah</button>
                </li>
            </ul>
            <div class="tab-content" id="klaim-tabContent">
                <div class="tab-pane fade show active" id="klaim-langsung" role="tabpanel" aria-labelledby="klaim-langsung-tab" tabindex="0">
                    <ol class="text-grey">
                        <li>Klik tombol "Request Klaim Garansi" pada produk yang telah di-scan</li>
                        <li>Datang ke HIPPO Care Pusat pada alamat di bawah : <br>Komplek Ruko ITC Roxy Mas Blok E2. 9 - 11, Jl. KH. Hasyim Ashari No.125, RW.8, Cideng, <br>Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10150</li>
                        <li>Produk HIPPO kamu akan dicek oleh tim kami untuk menentukan apakah produk kamu layak untuk ditukar atau tidak</li>
                        <li>Jika layak, maka kamu akan mendapatkan produk pengganti</li>
                    </ol>
                </div>
                <div class="tab-pane fade" id="klaim-home" role="tabpanel" aria-labelledby="klaim-home-tab" tabindex="0">
                    <ol class="text-grey">
                        <li>Klik tombol "Request Klaim Garansi" pada produk yang telah di-scan</li>
                        <li>Kirim produk yang ingin kamu klaim garansi ke alamat di bawah ini : <br>Komplek Ruko ITC Roxy Mas Blok E2. 9 - 11, Jl. KH. Hasyim Ashari No.125, RW.8, Cideng, <br>Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10150</li>
                        <li>Tuliskan nama, alamat rumah, email dan nomor telepon di sebuah kertas dan sisipkan dalam paket pengiriman</li>
                        <li>Produk HIPPO kamu akan dicek oleh tim kami untuk menentukan apakah produk kamu layak untuk ditukar atau tidak</li>
                        <li>Jika layak, maka kamu akan mendapatkan produk pengganti</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row" id="dekstop-claim-tnc">
            <div class="col-md-6">
                <h5 class="fw-bold">Kunjungan Langsung</h5>
                <ol class="text-grey">
                    <li>Klik tombol "Request Klaim Garansi" pada produk yang telah di-scan</li>
                    <li>Datang ke HIPPO Care Pusat pada alamat di bawah : <br>Komplek Ruko ITC Roxy Mas Blok E2. 9 - 11, Jl. KH. Hasyim Ashari No.125, RW.8, Cideng, <br>Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10150</li>
                    <li>Produk HIPPO kamu akan dicek oleh tim kami untuk menentukan apakah produk kamu layak untuk ditukar atau tidak</li>
                    <li>Jika layak, maka kamu akan mendapatkan produk pengganti</li>
                </ol>
            </div>
            <div class="col-md-6">
                <h5 class="fw-bold">Dari Rumah</h5>
                <ol class="text-grey">
                    <li>Klik tombol "Request Klaim Garansi" pada produk yang telah di-scan</li>
                    <li>Kirim produk yang ingin kamu klaim garansi ke alamat di bawah ini : <br>Komplek Ruko ITC Roxy Mas Blok E2. 9 - 11, Jl. KH. Hasyim Ashari No.125, RW.8, Cideng, <br>Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10150</li>
                    <li>Tuliskan nama, alamat rumah, email dan nomor telepon di sebuah kertas dan sisipkan dalam paket pengiriman</li>
                    <li>Produk HIPPO kamu akan dicek oleh tim kami untuk menentukan apakah produk kamu layak untuk ditukar atau tidak</li>
                    <li>Jika layak, maka kamu akan mendapatkan produk pengganti</li>
                </ol>
            </div>
        </div>
    </section>
    <section class="py-5">
        <h2 class="text-center fw-bold text-green">Lokasi HIPPO Care</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="accordion" id="hippoCareAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"aria-controls="collapseOne">HIPPO Care Pusat</button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#hippoCareAccordion">
                            <div class="accordion-body">
                                Komplek Ruko ITC Roxy Mas Blok E2. 9 - 11,<br>Jl. KH. Hasyim Ashari No.125, RW.8, Cideng,<br>Kecamatan Gambir, Kota Jakarta Pusat,<br>Daerah Khusus Ibukota Jakarta 10150
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">HCP Jakarta Timur</button>
                        </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#hippoCareAccordion">
                        <div class="accordion-body">
                            Komplek Ruko ITC Roxy Mas Blok E2. 9 - 11,<br>Jl. KH. Hasyim Ashari No.125, RW.8, Cideng,<br>Kecamatan Gambir, Kota Jakarta Pusat,<br>Daerah Khusus Ibukota Jakarta 10150
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">HCP Yogyakarta</button>
                        </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#hippoCareAccordion">
                        <div class="accordion-body">
                            Komplek Ruko ITC Roxy Mas Blok E2. 9 - 11,<br>Jl. KH. Hasyim Ashari No.125, RW.8, Cideng,<br>Kecamatan Gambir, Kota Jakarta Pusat,<br>Daerah Khusus Ibukota Jakarta 10150
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">HCP Makassar</button>
                        </h2>
                      <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#hippoCareAccordion">
                        <div class="accordion-body">
                            Komplek Ruko ITC Roxy Mas Blok E2. 9 - 11,<br>Jl. KH. Hasyim Ashari No.125, RW.8, Cideng,<br>Kecamatan Gambir, Kota Jakarta Pusat,<br>Daerah Khusus Ibukota Jakarta 10150
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <img src="{{ asset('assets/img/hippoku-map.svg') }}" alt="Hippoku Map" class="img-fluid">
            </div>
        </div>
    </section>
</div>
@endsection
@push('js')
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".slider-swipe", {
        // effect: 'fade',
        loop: true,
        autoplay: {
            delay: 4000,
        },
        pagination: {
            el: ".swiper-pagination",
        },
    });
    </script>
@endpush
