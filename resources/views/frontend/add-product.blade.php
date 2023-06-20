@extends('frontend.layouts.app')
@push('css')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css"/>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
@endpush
@section('content')
    <div class="container">
        <section class="py-5">
            <div class="row">
                <div class="col-md-6">
                    <form method="post" action="">
                        @csrf
                        <div class="mb-3">
                            <label for="product_category_id" class="form-label">Tipe Produk</label>
                            <select name="product_category_id" id="product_category_id" class="form-select" required {{ $userProduct ? 'disabled' : '' }}>
                                <option value="">Pilih tipe produk</option>
                                @foreach($productCategories as $id => $name)
                                <option value="{{ $id }}">{{ $name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="product_sku_id" class="form-label">Nama Produk</label>
                            @if ($userProduct)
                            <input type="text" class="form-control" value="{{$userProduct?->product?->productSku?->name}}" readonly>
                            <input name="product_sku_id" type="hidden" class="form-control" value="{{$userProduct?->product?->productSku?->id}}">
                            @else
                            <select name="product_sku_id" id="product_sku_id" class="form-select" required disabled data-placeholder="Pilih nama produk"></select>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">Tanggal Pembelian</label>
                            <input name="date" type="date" class="form-control" id="date" placeholder="Tanggal Pembelian" value="{{ $userProduct ? date('Y-m-d', strtotime($userProduct->created_at)) : '' }}" {{ $userProduct ? 'readonly' : '' }}>
                        </div>
                        <div class="mb-3">
                            <label for="photo" class="form-label">Bukti Pembelian</label>
                            <div class="needsclick dropzone" id="photo"></div>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary bg-green border-0">@if ($userProduct) Update Produk @else Daftarkan Produk @endif</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <script>
        $('#product_category_id').change(function(){
            if($(this).val()){
                $('#product_sku_id').attr('disabled', false);
            } else {
                $('#product_sku_id').attr('disabled', true).val('').change();
            }
            getProducts($(this).val())
        });

        @if ($userProduct?->product?->productSku?->product_category_id)
            $('#product_category_id').val({{$userProduct?->product?->productSku?->product_category_id}}).change();
        @endif

        function getProducts(productCategoryId) {
            $('#product_sku_id').select2({
                placeholder: 'Pilih nama produk',
                allowClear: true,
                minimumInputLength: 3,
                ajax: {
                    url: '{{ route("ajaxGetProduct") }}?product_category_id='+productCategoryId,
                    dataType: 'json',
                    delay: 250,
                    processResults: function (data) {
                        return {
                            results: $.map(data, function (item) {
                                return {
                                    text: item.name,
                                    id: item.id
                                }
                            })
                        };
                    },
                    cache: true
                }
            });
        }

        var uploadedPhotoMap;
        Dropzone.options.photo = {
            url: '{{ route("uploadPhoto") }}',
            maxFilesize: 5, // MB
            maxFiles: 1,
            acceptedFiles: '.jpeg,.jpg,.png,.gif,.svg',
            addRemoveLinks: true,
            uploadMultiple: false,
            paramName: 'photo',
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            success: function (file, response) {
                $('form').append('<input type="hidden" name="photo" value="' + response.data.name + '">');
                uploadedPhotoMap = response.data.name;
            },
            removedfile: function (file) {
                file.previewElement.remove();
                var formPhoto = $('form').find('input[name="photo"]');
                $.ajax({
                    type: 'POST',
                    headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
                    url: '{{ route('deleteMedia') }}',
                    data: {name: formPhoto.val(), _method: 'delete'},
                    sucess: function(res){
                        formPhoto.delete();
                    }
                });
            },
            error: function (file, response) {
                if ($.type(response) === 'string') {
                    var message = response //dropzone sends it's own error messages in string
                } else {
                    var message = response.errors.file
                }
                file.previewElement.classList.add('dz-error')
                _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
                _results = []
                for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                    node = _ref[_i]
                    _results.push(node.textContent = message)
                }

                return _results
            }
        };
    </script>
@endpush
