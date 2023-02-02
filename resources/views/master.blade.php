<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('dist/assets/img/apple-icon.png') }}">
    {{-- <link rel="icon" type="image/png" href="{{ asset('dist/assets/img/favicon.png') }}"> --}}
    @if (isset($title))
        <title>{{ $title }}</title>
    @endif
    <link rel="icon" href="../wp-content/uploads/2022/09/favicon.png" sizes="32x32" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('dist/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('dist/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('dist/assets/css/material-dashboard.css?v=3.0.4') }}" rel="stylesheet" />
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="http://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>


    <script>
        window.Laravel = {!! json_encode(
            [
                'csrfToken' => csrf_token(),
                'baseUrl' => url('/'),
            ],
            JSON_UNESCAPED_UNICODE,
        ) !!};
        $(document).ready(function() {
            $('ul li a').click(function() {
                $('li a').removeClass("active");
                $(this).addClass("active");
            });
        });
    </script>
</head>

<body class="g-sidenav-show  bg-gray-200">
    {{-- aside --}}

    @include('layout.aside')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <!-- Navbar -->

        @include('layout.nav')
        <!-- End Navbar -->
        <div id="app">
            @yield('content')
            @if (session()->get('Message.flash'))
                <popup-alert :data="{{ json_encode(session()->get('Message.flash')[0]) }}"></popup-alert>
            @endif
            @php
                session()->forget('Message.flash');
            @endphp
        </div>
    </main>

    {{-- footer --}}
    @include('layout.footer')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.js">
    </script>
    <script src="{{ asset('dist/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('dist/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dist/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('dist/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ asset('dist/assets/js/plugins/chartjs.min.js') }}"></script>


    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('dist/assets/js/material-dashboard.min.js?v=3.0.4') }}"></script>
    <script src="{{ asset('js/adminApp.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity=" sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@coreui/coreui-pro@4.3.2/dist/js/coreui.min.js"
        integrity="sha384-9YyzhF1YDvkAxcmP1IaT6h2nzFXLtlj9TXe8uMHDgl19KqYpnB9mBb9PfiIgxlXH" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.2.0/dist/css/coreui.min.css" rel="stylesheet"
        integrity="sha384-UkVD+zxJKGsZP3s/JuRzapi4dQrDDuEf/kHphzg8P3v8wuQ6m9RLjTkPGeFcglQU" crossorigin="anonymous">


</body>

</html>
