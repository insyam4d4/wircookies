@extends('layouts.app', ['title' => __('Sales Target Management')])

@section('content')
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 d-flex align-items-center">
                        <li class="breadcrumb-item"><a href="{{ route('console.dashboard') }}" class="link"><i
                                    class="mdi mdi-home-outline fs-4"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Menu</li>
                    </ol>
                </nav>
                <h1 class="mb-0 fw-bold">Menu</h1>
            </div>
            <div class="col-6">
                <div class="text-end upgrade-btn">
                    <a href="{{ route('console.menu.create') }}" class="btn btn-primary text-white"><i
                            class="mdi mdi-plus"></i> Input Data</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tabel Data</h4>
                        <h6 class="card-subtitle">Tersinkronisasi dengan database.
                        </h6>
                    </div>
                    <div class="table-responsive px-4 pb-4">
                        <table class="table table-hover datatables">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Kode</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Menu Favorite</th>
                                    <th scope="col">Status</th>
                                    <th scope="col" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
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
            ajax: '{{ route('console.menu.index') }}',
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
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'menu_category_name',
                    name: 'menu_category_name'
                },
                {
                    data: 'price',
                    name: 'price'
                },
                {
                    data: 'is_favorite',
                    name: 'is_favorite'
                },
                {
                    data: 'is_active',
                    name: 'is_active'
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
