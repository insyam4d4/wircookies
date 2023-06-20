@extends('layouts.app')

@section('content')
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 d-flex align-items-center">
                        <li class="breadcrumb-item"><a href="{{ route('console.dashboard') }}" class="link"><i
                                    class="mdi mdi-home-outline fs-4"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{ route('console.menu-category.index') }}"
                                class="link">Kategori Menu</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Input</li>
                    </ol>
                </nav>
                <h1 class="mb-0 fw-bold">Kategori Menu</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <form class="form-horizontal form-material mx-2" action="{{ route('console.menu-category.store') }}"
                    method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label class="col-md-12 required">Nama</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Nama"
                                        class="form-control form-control-line @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" required="required" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <div class="col-sm-12">
                            <button class="btn btn-success text-white px-4">SIMPAN</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
