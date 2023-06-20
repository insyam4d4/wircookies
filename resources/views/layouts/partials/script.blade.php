{{-- template --}}
<script src="{{ asset('templates/flexy/assets/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('templates/flexy/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('templates/flexy/dist/js/app-style-switcher.js') }}"></script>
<script src="{{ asset('templates/flexy/dist/js/waves.js') }}"></script>
<script src="{{ asset('templates/flexy/dist/js/sidebarmenu.js') }}"></script>
<script src="{{ asset('templates/flexy/dist/js/custom.js') }}"></script>
<script src="{{ asset('templates/flexy/assets/libs/chartist/dist/chartist.min.js') }}"></script>
<script src="{{ asset('templates/flexy/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}">
</script>
<script src="{{ asset('templates/flexy/dist/js/pages/dashboards/dashboard1.js') }}"></script>

{{-- extend --}}
<script src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-price-format/2.2.0/jquery.priceformat.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
{{-- custom --}}
<script>
    // form
    $('form').on('submit', function() {
        $(this).find(':submit').attr('disabled', true).text('Loading...');
        // $(this).find('.idr-format').each(function() {
        //     console.log($(this).unmask())
        // })
        // alert('a');
    });

    $('.toggle-switch').change(function() {
        if ($(this).prop('checked')) {
            $(this).val('1');
        } else {
            $(this).val('0');
        }
    });

    $('label.required').append('<span class="text-danger"> *</span>')

    $('.idr-format').on('focus', function() {
        $(this).priceFormat({
            prefix: 'Rp',
            centsSeparator: ',',
            thousandsSeparator: '.',
            allowNegative: false,
            centsLimit: 0
        });
    })

    $('.idr-format').on('blur', function() {
        $(this).unmask();
        $(this).val($(this).unmask());
    })

    // datatabes
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function deleteData(url) {
        if (confirm('This data will be permanently deleted and cannot be recovered. Continue this action?')) {
            $.post(url, {
                _method: 'delete'
            }, function(res) {
                if (res.success) {
                    toastr.success(res.message);
                    table.ajax.reload();
                } else {
                    toastr.error(res.message);
                }
            }, 'json');
        }
    }

    // select2
    $(document).ready(function() {
        $('.set-select2').select2({
            placeholder: 'Mohon pilih'
        });
    });

    // upload image
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#imageResult')
                    .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    $(function() {
        $('#upload').on('change', function() {
            readURL(input);
        });
    });

    var input = document.getElementById('upload');
    var infoArea = document.getElementById('upload-label');

    if (input) {
        input.addEventListener('change', showFileName);
    }

    function showFileName(event) {
        var input = event.srcElement;
        var fileName = input.files[0].name;
        infoArea.textContent = 'File name: ' + fileName;
    }
</script>
