<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from themezhub.net/live-workplex/workplex/home-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Aug 2022 09:31:28 GMT -->

<head>
    <meta charset="utf-8" />
    <meta name="author" content="Themezhub" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @if (isset($title))
        <title>{{ $title }}</title>
    @endif

    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/detail-company.css') }}" rel="stylesheet">
    <script src="{{ asset('js/userApp.js') }}" defer></script>
    <!-- CSS only -->
    <!-- JavaScript Bundle with Popper -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        .ic-1 {
            width: 80px !important;
            height: 80px !important;
            margin-left: 36%;
        }

        .reviews_wrap {
            width: 100%;
            height: 100%;
            background-color: #f7fdfa !important;
            margin-bottom: 20px;
        }

        .title-company {
            text-align: center;
        }

        .number-job {
            text-align: center;
            font-size: 18px;
        }
    </style>
    <script>
        window.Laravel = {!! json_encode(
            [
                'csrfToken' => csrf_token(),
                'baseUrl' => url('/'),
            ],
            JSON_UNESCAPED_UNICODE,
        ) !!};
    </script>

</head>
<div class="preloader"></div>

<div id="main-wrapper">
    <div id="app">
        @include('client.Tin-tuc.logn')
        @include('client.layout.header')
        <!-- End Navigation -->
        <div class="clearfix"></div>
        @yield('client')
        @if (session()->get('Message.flash'))
            <notyf :data="{{ json_encode(session()->get('Message.flash')[0]) }}"></notyf>
        @endif
        @php
            session()->forget('Message.flash');
        @endphp
        <div class="loading-div hidden">
            <div class="loader-img"></div>
        </div>
    </div>

    @include('client.layout.footer')

</div>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.js') }}"></script>
<script src="{{ asset('assets/js/slider-bg.js') }}"></script>
<script src="{{ asset('assets/js/smoothproducts.js') }}"></script>
<script src="{{ asset('assets/js/snackbar.min.js') }}"></script>
<script src="{{ asset('assets/js/jQuery.style.switcher.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
