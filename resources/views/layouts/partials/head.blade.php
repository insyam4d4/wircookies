<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="robots" content="noindex,nofollow">

<title>{{ config('app.name', 'Laravel') }}</title>
{{-- <script src="{{ asset('js/app.js') }}" defer></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

<link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link rel="canonical" href="https://www.wrappixel.com/templates/Flexy-admin-lite/" />
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('media/images/logo.jpg') }}">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<link href="{{ asset('templates/flexy/assets/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet">
<link
    href="{{ asset('templates/flexy/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css') }}"rel="stylesheet">
<link href="{{ asset('templates/flexy/dist/css/style.min.css') }}" rel="stylesheet">

{{-- extend --}}
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />

{{-- custom --}}
<style>
    /* table */
    .table>:not(caption)>*>* {
        padding: 1rem !important;
        border-bottom-width: 1px;
        border-color: #e9ecef;
    }

    td {
        vertical-align: middle;
    }


    /* select2 */
    .select2 {
        width: 100% !important;
    }

    .select2-selection,
    .select2-selection--single,
    .select2-container--open,
    .select2-dropdown--below,
    .select2-container--default,
    .select2-search--dropdown,
    .select2-search__field {
        border-color: #e9ecef !important;
    }

    .select2-selection {
        padding-top: 3px !important;
        padding-bottom: 3px !important;
        padding-left: 5px !important;
        height: inherit !important;
    }

    .select2-selection__arrow {
        height: 100% !important;
        right: 5px !important;
    }

    .select2-selection__placeholder,
    .select2-search__field,
    .select2-selection__rendered {
        color: #67757c !important;
    }

    /* upload image */
    #upload {
        opacity: 0;
    }

    #upload-label {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
    }

    .image-area {
        border: 2px dashed #e9ecef;
        padding: 1rem;
        position: relative;
    }

    .image-area::before {
        content: 'Uploaded image result';
        color: #fff;
        font-weight: bold;
        text-transform: uppercase;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 0.8rem;
        z-index: 1;
    }

    .image-area img {
        z-index: 2;
        position: relative;
    }
</style>
