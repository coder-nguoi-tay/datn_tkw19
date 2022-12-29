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
