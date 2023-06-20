@extends('layouts.app')

@section('content')
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 d-flex align-items-center">
                        <li class="breadcrumb-item"><a href="{{ route('console.dashboard') }}" class="link"><i
                                    class="mdi mdi-home-outline fs-4"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{ route('console.menu.index') }}" class="link">Menu</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Input</li>
                    </ol>
                </nav>
                <h1 class="mb-0 fw-bold">Menu</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <form class="form-horizontal form-material mx-2" action="{{ route('console.menu.store') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label class="col-sm-12 required">Kategori</label>
                                <div class="col-sm-12">
                                    <select
                                        class="form-select shadow-none form-control-line set-select2 @error('menu_category_id') is-invalid @enderror"
                                        name="menu_category_id" required="required" autofocus>
                                        <option></option>
                                        @foreach ($menuCategories as $menuCategory)
                                            <option value="{{ $menuCategory->id }}"
                                                {{ old('menu_category_id') == $menuCategory->id ? 'selected' : null }}>
                                                {{ $menuCategory->name }}
                                            </option>
                                        @endforeach
                                    </select>

                                    @error('menu_category_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12 required">Nama</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Nama"
                                        class="form-control form-control-line @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" required="required">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12">Deskripsi</label>
                                <div class="col-md-12">
                                    <textarea class="form-control form-control-line @error('description') is-invalid @enderror" name="description"
                                        rows="3" placeholder="Deskripsi">{{ old('description') }}</textarea>

                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12 required">Harga</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Rp0"
                                        class="form-control form-control-line idr-format @error('name') is-invalid @enderror"
                                        name="price" required="required" value="{{ old('price') }}">

                                    @error('price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12">Menu Favorite</label>
                                <div class="col-md-12">
                                    <input type="checkbox" data-toggle="toggle" data-on="Ya" data-off="Tidak"
                                        data-onstyle="success" data-offstyle="danger" name="is_favorite"
                                        value={{ old('is_favorite') }}>

                                    @error('is_favorite')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12">Image</label>
                                <div class="col-md-12 form-control form-control-line">
                                    <div class="input-group bg-white">
                                        <input id="upload" type="file" onchange="readURL(this);"
                                            class="form-control form-control-line" name="image">
                                        <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose
                                            file</label>
                                        <div class="input-group-append">
                                            <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i
                                                    class="fa fa-cloud-upload mr-2 text-muted"></i><small
                                                    class="text-uppercase font-weight-bold text-muted">Choose
                                                    file</small></label>
                                        </div>
                                    </div>

                                    <div class="image-area mt-2"><img id="imageResult" src="#" alt=""
                                            class="img-fluid rounded shadow-sm mx-auto d-block"></div>
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
