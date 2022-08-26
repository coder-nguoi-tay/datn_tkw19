<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
        @if (isset($title))
            <title>{{ $title }}</title>
        @endif
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/guestApp.js') }}" defer></script>

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
            <div class="c-wrapper">
                <div class="c-body">
                    <main class="c-main">
                        @yield('content')
                    </main>
                </div>
            </div>
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
        @yield('javascript')
    </body>
</html>
