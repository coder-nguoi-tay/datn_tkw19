<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
    @if (isset($title))
        <title>{{ $title }}</title>
    @endif
    <link rel="stylesheet" href="assets/css/adminlte.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.css" rel="stylesheet" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.js"></script>
    <script src="{{ asset('js/adminApp.js') }}" defer></script>

    @yield('css')
    <style>
        .anh-cv {
            width: 100%;
            height: 100%;
        }

        .box-anh {
            height: 200px;
        }

        .me-md-3 {
            margin-left: 20px;
            font-size: 20px;
            font-weight: 550;
        }

        .list-service[data-v-5ca02e54] {
            display: flex;
            margin: 0 -10px;
            flex-wrap: wrap;
            padding: 10px 0;
        }

        .service[data-v-5ca02e54] {
            padding: 10px;
            width: 25%;
        }

        .service-item__md[data-v-6f51bd73] {
            min-height: 225px;
        }

        .service-item[data-v-6f51bd73] {
            background: #f3f4f5;
            border-radius: 5px;
            padding: 16px;
            height: 380px;

            transition: all 0.5s;
            border: 1px solid transparent;
        }

        .color-gray[data-v-6f51bd73] {
            color: #555;
        }

        .align-items-center {
            justify-content: center !important;
        }


        p {
            margin-top: 0;
            margin-bottom: 1rem;
        }

        .justify-content-between {
            margin-top: 0px;
            justify-content: center !important;
        }

        .title-cv {
            text-align: center;
        }

        .name-cv {
            text-align: center;
            margin: -5px 0px 5px 0px
        }

        .service-price[data-v-6f51bd73] {
            margin-bottom: 6px;
            font-weight: 700;
            font-size: 20px;
        }

        .text-primary {
            color: #00b14f !important;
        }

        .font-weight-bold {
            font-weight: 500 !important;
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem;
        }

        .title-vip[data-v-6f51bd73] {
            margin-left: 10px;
            padding: 4px 12px 4px 6px;
            color: #333;
            background: #ffbc53;
            border-radius: 5px 0 0 5px;
            position: relative;
        }

        .button-text {
            color: #00b14f;
            width: 100% !important;
            text-decoration: none;
            background-color: white !important;
            border-color: #00b14f !important;
        }

        .button-text:hover {
            color: white;
            border-color: #00b14f !important;
            background-color: #00b14f !important;
        }

        .btn-add-service[data-v-6f51bd73] {
            color: #00b14f;
            background: #fff;
            border: 1px solid #00b14f;
            transition: all 0.5s;

        }



        .btn-service[data-v-6f51bd73] {
            width: calc(50% - 6px);
            border-radius: 3px;
            padding: 10px;
        }

        .min-width.btn {
            min-width: 100px;
            font-size: 14px;
        }

        .btn {
            white-space: nowrap;
        }

        .font-weight-bold {
            font-weight: 500 !important;
        }

        .btn-secondary {
            color: #212529;
            background-color: #f3f4f5;
            border-color: #f3f4f5;
        }

        .btn-secondary:hover {
            border-color: #00b14f;
            background-color: #00b14f;
            color: white;
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
        }

        button {
            border-radius: 0;
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

<body class="c-app">
    <div id="app">
        @include('include.admin.sidebar')
        <div class="wrapper d-flex flex-column min-vh-100 bg-light">
            @include('include.admin.header')
            <div class="body" style="margin-left: 15px">
                @yield('content')
            </div>
        </div>
        @if (session()->get('Message.flash'))
            <notyf :data="{{ json_encode(session()->get('Message.flash')[0]) }}"></notyf>
        @endif
        @php
            session()->forget('Message.flash');
        @endphp
    </div>
    <div class="loading-div hidden">
        <div class="loader-img"></div>
    </div>
    <script src="{{ asset('js/coreui.bundle.min.js') }}"></script>
    @yield('javascript')

</body>

</html>
