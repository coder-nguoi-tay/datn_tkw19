<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
    @if (isset($title))
        <title>{{ $title }}</title>
    @endif
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="{{ asset('js/adminApp.js') }}" defer></script>

    @yield('css')
    <script>
        window.Laravel = {!!json_encode([
            'csrfToken' => csrf_token(),
            'baseUrl' => url('/'),
        ], JSON_UNESCAPED_UNICODE)!!};
    </script>
</head>

<body class="c-app">
    <div id="app">
        @include('include.admin.sidebar')
        <div class="wrapper d-flex flex-column min-vh-100 bg-light">
            @include('include.admin.header')
            <div class="body">
                @yield('content')
            </div>
        </div>
        {{-- <div class="wrapper d-flex flex-column min-vh-100 bg-light">
            <div class="body">
                <main class="c-main">
                    @yield('content')
                </main>
                {{-- @include('include.footer') --}}
            {{-- </div>
        </div> --}}
        @if (session()->get('Message.flash'))
            <popup-alert :data="{{json_encode(session()->get('Message.flash')[0])}}"></popup-alert>
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
