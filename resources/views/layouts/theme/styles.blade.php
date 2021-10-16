<link href="{{ asset('assets/css/loader.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ asset('assets/js/loader.js') }}"></script>

<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
<link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{ asset('assets/css/structure.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/font-icons/fontawesome/css/fontawesome.css') }}">
<link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/elements/avatar.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/sweetalerts/sweetalert.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/notification/snackbar/snackbar.min.css') }}">

<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
<link rel="stylesheet" href="{{ asset('assets/css/widgets/modules-widgets.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/forms/theme-checkbox-radio.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/scrollspyNav.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/select2/select2.min.css') }}">
<!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->


<style>
    aside{
        display: none !important;
    }
    .page-item.active .page-link {
        z-index: 3;
        color: #fff;
        background-color: #3b3f5c;
        border-color: #3b3f5c;
    }

    @media (max-width: 480px) {
        .mtmobile{
            margin-bottom: 20px!important;
        }

        .mbmobile{
            margin-bottom: 10px!important;
        }

        .hideonsm {
            display: none!important;
        }

        .inblock {
            display: block;
        }

    }
</style>

@livewireStyles
