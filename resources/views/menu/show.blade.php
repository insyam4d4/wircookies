@extends('layouts.app')

@section('content')
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 d-flex align-items-center">
                        <li class="breadcrumb-item"><a href="{{ route('console.dashboard') }}" class="link"><i
                                    class="mdi mdi-home-outline fs-4"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{ route('console.menu.index') }}" class="link">Product
                                SKU</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Detail</li>
                    </ol>
                </nav>
                <h1 class="mb-0 fw-bold">Menu</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-body">
                        <center class="m-t-30"> <img src="{{ $productSku->image_url }}" class="rounded" width="300" />
                            <h4 class="card-title m-t-30">{{ $productSku->code }}</h4>

                            <div class="row text-center justify-content-md-center">
                                <font class="font-medium">{{ $productSku->products->count() }} products</font>
                            </div>
                            {{-- <h6 class="card-subtitle">Accoubts Manager Amix corp</h6>
                            <div class="row text-center justify-content-md-center">
                                <div class="col-4"><a href="javascript:void(0)" class="link"><i
                                            class="icon-people"></i>
                                        <font class="font-medium">254</font>
                                    </a></div>
                                <div class="col-4"><a href="javascript:void(0)" class="link"><i
                                            class="icon-picture"></i>
                                        <font class="font-medium">54</font>
                                    </a></div>
                            </div> --}}
                        </center>
                    </div>
                    <div>
                        <hr>
                    </div>
                    <div class="card-body">
                        <small class="text-muted">Name</small>
                        <h6>{{ $productSku->name }}</h6>

                        <small class="text-muted p-t-30 db">Short Name</small>
                        <h6>{{ $productSku->short_name }}</h6>

                        <small class="text-muted p-t-30 db">Category</small>
                        <h6>{{ $productSku->productCategory->name ?? '-' }}</h6>

                        <hr>

                        <small class="text-muted p-t-30 db">MD Price</small>
                        <h6>{{ formattedPrice($productSku->price_1) }}</h6>

                        <small class="text-muted p-t-30 db">Reseller Price</small>
                        <h6>{{ formattedPrice($productSku->price_2) }}</h6>

                        <small class="text-muted p-t-30 db">End User I Price</small>
                        <h6>{{ formattedPrice($productSku->price_3) }}</h6>

                        <small class="text-muted p-t-30 db">End User II Price</small>
                        <h6>{{ formattedPrice($productSku->price_4) }}</h6>

                        <hr>

                        <small class="text-muted p-t-30 db">Standard Expiration Time</small>
                        <h6>{{ $productSku->standard_expired_in_days ?? '0' }} days</h6>

                        <small class="text-muted p-t-30 db">Extended Expiration Time</small>
                        <h6>{{ $productSku->extended_expired_in_days ?? '0' }} days</h6>

                        <small class="text-muted p-t-30 db">Trade In Expiration Time</small>
                        <h6>{{ $productSku->trade_in_expired_in_days ?? '0' }} days</h6>

                        {{-- <div class="map-box">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508"
                                width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div> <small class="text-muted p-t-30 db">Social Profile</small>
                        <br />
                        <button class="btn btn-circle btn-secondary"><i class="fab fa-facebook-f"></i></button>
                        <button class="btn btn-circle btn-secondary"><i class="fab fa-twitter"></i></button>
                        <button class="btn btn-circle btn-secondary"><i class="fab fa-youtube"></i></button> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <div class="card-body row">
                        <div class="col-6">
                            <h4 class="card-title">Product List</h4>
                            <h6 class="card-subtitle">Synchronized with database.</h6>
                        </div>
                        <div class="col-6">
                            <div class="text-end upgrade-btn">
                                <button type="button" class="btn btn-info text-white" data-bs-toggle="modal"
                                    data-bs-target="#exportDataModal"><i class="mdi mdi-printer"></i> Export Data</button>
                                <button type="button" class="btn btn-primary text-white" data-bs-toggle="modal"
                                    data-bs-target="#newDataModal"><i class="mdi mdi-plus"></i> Input Data</button>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive px-4 pb-4">
                        <table class="table table-hover datatables">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Code</th>
                                    <th scope="col">QR Code</th>
                                    <th scope="col">Seller Scan Status</th>
                                    <th scope="col">Buyer Scan Status</th>
                                    <th scope="col">Created Date</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- export data modal -->
    <div class="modal fade" id="exportDataModal" tabindex="-1" aria-labelledby="exportDataModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form class="form-horizontal form-material mx-2" id="exportDataModalForm"
                    action="{{ route('console.menu.product.export', $productSku->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="modal-header">
                        <div class="modal-title">
                            <h4 class="card-title">Export Data</h4>
                            <h6 class="card-subtitle text-secondary fw-light">This action will generate pdf file.</h6>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="required">Created Date</label>
                            <div class="">
                                <select class="form-select shadow-none form-control-line set-select2" name="created_at"
                                    required="required">
                                    <option></option>
                                    @foreach ($createdDates->pluck('created_date') as $createdDate)
                                        <option value="{{ $createdDate }}">
                                            {{ \Carbon\Carbon::parse($createdDate . ':00:00')->format('M d, Y - gA') }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" onclick="document.getElementById('exportDataModalForm').submit()"
                            class="btn btn-primary">Export</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Input Data modal -->
    <div class="modal fade" id="newDataModal" tabindex="-1" aria-labelledby="newDataModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form class="form-horizontal form-material mx-2"
                    action="{{ route('console.menu.product.store', [$productSku->id, $productSku->code]) }}"
                    method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="modal-header">
                        <div class="modal-title">
                            <h4 class="card-title">Input Data</h4>
                            <h6 class="card-subtitle text-secondary fw-light">QR code will be automatically generated.</h6>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-md-12 required">Quantity</label>
                            <div class="col-md-12">
                                <input type="number" min="0" placeholder="0"
                                    class="form-control form-control-line" name="quantity" required="required">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        var table;
        var table = $('.datatables').DataTable({
            processing: true,
            serverSide: true,
            searching: true,
            responsive: true,
            ajax: '{{ route('console.menu.product.index', $productSku->id) }}?sku={{ $productSku->code }}',
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'code',
                    name: 'code'
                },
                {
                    "data": "qr_code",
                    "render": function(data, type, row) {
                        return '<a href="' + data + '" download="qr-code"><img src="' +
                            data +
                            '" width="50" /></a>';
                    }
                },
                {
                    data: 'seller_scan_at',
                    name: 'seller_scan_at'
                },
                {
                    data: 'buyer_scan_at',
                    name: 'buyer_scan_at'
                },
                {
                    data: 'created_at',
                    name: 'created_at'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                }
            ]
        });
    </script>
@endpush
