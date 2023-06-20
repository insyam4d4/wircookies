@extends('frontend.layouts.app')
@push('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        .sidebar {
          height: 100%;
          width: 0;
          position: fixed;
          z-index: 1;
          top: 0;
          right: 0;
          background-color: #ffffff;
          overflow-x: hidden;
          transition: 0.5s;
          padding-top: 60px;
        }

        .sidebar a.closebtn {
          padding: 8px 8px 8px 32px;
          text-decoration: none;
          font-size: 25px;
          color: #818181;
          display: block;
          transition: 0.3s;
        }

        .sidebar a:hover {
          color: #f1f1f1;
        }

        .sidebar .closebtn {
          position: absolute;
          top: 0;
          right: 25px;
          font-size: 36px;
          margin-left: 50px;
        }

        .openbtn {
          font-size: 20px;
          cursor: pointer;
          background-color: #111;
          color: white;
          padding: 10px 15px;
          border: none;
        }

        .openbtn:hover {
          background-color: #444;
        }

        #main {
          transition: margin-left .5s;
          padding: 16px;
        }

        /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
        @media screen and (max-height: 450px) {
          .sidebar {padding-top: 15px;}
          .sidebar a {font-size: 18px;}
        }
    </style>
@endpush
@section('content')
    <div class="container">
        <section class="py-5">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="fw-bold">Produk Kamu</h3>
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link rounded-pill bg-green-active active" id="today-tab" data-bs-toggle="pill" data-bs-target="#today" type="button" role="tab" aria-controls="today" aria-selected="true">Hari Ini</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link rounded-pill bg-green-active" id="all-products-tab" data-bs-toggle="pill" data-bs-target="#all-products" type="button" role="tab" aria-controls="all-products" aria-selected="false">Semua</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="today" role="tabpanel" aria-labelledby="today-tab" tabindex="0">
                            @forelse ($products as $product)
                            <div id="product-{{$product->product->id}}" class="card shadow border-0 mb-3">
                                <div class="card-body row align-items-center">
                                    <div class="col-6">
                                        <p class="text-grey">{{ date('d/m/Y H:i', strtotime($product->created_at)) }}</p>
                                        <h6 class="fw-bold">{{ $product->product->productSku->name }}</h6>
                                     </div>
                                    <div class="col-6 form-area">
                                        @if ($product->product?->status == null)
                                            <form class="request-claim">
                                                @csrf
                                                <input name="product_id" type="hidden" value="{{$product->product->id}}" />
                                                <button type="submit" class="btn btn-success bg-green border-0 w-100 fw-bold py-3">Request Klaim</button>
                                            </form>
                                        @else
                                            @if ($product->product?->status == 'process')
                                                <button onclick="openNav('process')" class="btn btn-warning border-0 w-100 fw-bold py-3">Dalam Proses</button>
                                            @endif
                                            @if ($product->product?->status == 'approved')
                                                <button onclick="openNav('approved')" class="btn btn-primary border-0 w-100 fw-bold py-3">Disetujui</button>
                                            @endif
                                            @if ($product->product?->status == 'rejected')
                                                <button onclick="openNav('rejected', {{$product->id}}, '{{$product->product->reason}}')" class="btn btn-danger border-0 w-100 fw-bold py-3">Ditolak</button>
                                            @endif
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @empty
                                <div class="alert alert-warning">Tidak ada data hari ini</div>
                            @endforelse
                        </div>
                        <div class="tab-pane fade" id="all-products" role="tabpanel" aria-labelledby="all-products-tab" tabindex="0">
                            <div id="all-products-container"></div>
                            <center><button class="btn btn-success" id="btn-load-more">Load More</button></center>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <div id="image"></div>
    </div>
@endsection
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        function openNav(status, userProductId = null, message = '') {
            $("#mySidebar").css('width', '500px')
            if(status == 'process') {
                $('#mySidebar #image').html(`<center>
                    <img src="{{ asset('assets/img/user-process.svg') }}" class="img-fluid" alt="Process">
                    <h4 class="fw-bold">Dalam Proses</h4>
                    <p class="text-grey">Klaim kamu sedang kami proses</p>
                </center>`);
            } else if(status == 'approved') {
                $('#mySidebar #image').html(`<center>
                    <img src="{{ asset('assets/img/user-approved.svg') }}" class="img-fluid" alt="approved">
                    <h4 class="fw-bold">Disetujui</h4>
                    <p class="text-grey">Klaim kamu sudah disetujui</p>
                </center>`);
            } else {
                $('#mySidebar #image').html(`<center>
                    <img src="{{ asset('assets/img/user-rejected.svg') }}" class="img-fluid" alt="rejected">
                    <h4 class="fw-bold">Ditolak</h4>
                    <p class="text-grey">`+message+`</p>
                    <a href="{{ url('add-product') }}/`+userProductId+`" class="btn btn-primary">Edit Product</a>
                </center>`)
            }
        }

        function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
            document.getElementById("main").style.marginRight= "0";
        }

        $(document).ready(function(){
            var productsPage = 1;
            var allProductsHtml = '';
            function getAllProducts(){
                $.get('{{ route("getMyProducts") }}?page='+productsPage, function(res){
                    console.log(res)
                    if(res.last_page < 2) {
                        $('#btn-load-more').remove();
                    }
                    if(res.data.length > 0){
                        $.each(res.data, function(i, data){
                            allProductsHtml += '<div id="product-'+data.id+'" class="card shadow border-0 mb-3">';
                                allProductsHtml += '<div class="card-body row align-items-center">';
                                    allProductsHtml += '<div class="col-6">';
                                        allProductsHtml += '<p class="text-grey">'+data.created_at+'</p>';
                                        allProductsHtml += '<h6 class="fw-bold">'+data.name+'</h6>';
                                    allProductsHtml += '</div>';
                                    allProductsHtml += '<div class="col-6 form-area">';
                                        if(data.status == null){
                                            allProductsHtml += '<form class="request-claim">';
                                            allProductsHtml += '<input type="hidden" name="_token" value="{{ csrf_token() }}" />';
                                            allProductsHtml += '<input name="product_id" type="hidden" value="'+data.id+'" />';
                                            allProductsHtml += '<button type="submit" onclick="openNav()" class="btn btn-success bg-green border-0 w-100 fw-bold py-3">Request Klaim</button>';
                                            allProductsHtml += '</form>';
                                        } else {
                                            if(data.status == 'process') allProductsHtml += `<button onclick="openNav('process')" class="btn btn-warning border-0 w-100 fw-bold py-3">Dalam Proses</button>`;
                                            if(data.status == 'approved') allProductsHtml += `<button onclick="openNav('approved')" class="btn btn-primary border-0 w-100 fw-bold py-3">Disetujui</button>`;
                                            if(data.status == 'rejected') allProductsHtml += `<button onclick="openNav('rejected', `+data.user_products_id+`,'`+data.reason+`')" class="btn btn-danger border-0 w-100 fw-bold py-3">Ditolak</button>`;
                                        }
                                    allProductsHtml += '</div>';
                                allProductsHtml += '</div>';
                            allProductsHtml += '</div>';
                        });
                    } else {
                        $('#btn-load-more').remove();
                    }

                    $('#all-products-container').append(allProductsHtml);
                    allProductsHtml = '';
                    productsPage++;
                });
            }

            getAllProducts();

            $('#btn-load-more').click(function(){
                getAllProducts();
            });

            $('body').on('submit', '.request-claim', function(e){
                e.preventDefault();
                var data = $(this).serializeArray();
                $.post('{{ route("requestClaim") }}', data, function(res){
                    if(res.success) {
                        $('#product-'+res.product_id+' form.request-claim').remove();
                        $('#product-'+res.product_id+' .form-area').attr('disabled', false).html(`<button onclick="openNav('process')" class="btn btn-warning border-0 w-100 fw-bold py-3">Dalam Proses</button>`);
                    }
                });
            })
        });
    </script>
@endpush
