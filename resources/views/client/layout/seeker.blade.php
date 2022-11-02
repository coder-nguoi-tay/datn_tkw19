<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from themezhub.net/live-workplex/workplex/dashboard-my-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Aug 2022 09:32:11 GMT -->

<head>
    <meta charset="utf-8" />
    <meta name="author" content="Themezhub" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Workplex - Creative Job Board HTML Template</title>

    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <script src="{{ asset('js/userApp.js') }}" defer></script>
    <script>
        window.Laravel = {!! json_encode(
            [
                'csrfToken' => csrf_token(),
                'baseUrl' => url('/'),
            ],
            JSON_UNESCAPED_UNICODE,
        ) !!};
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
</head>

<body>
    <div id="main-wrapper">
        <div class="dashboard-wrap bg-light">
            <a class="mobNavigation" data-toggle="collapse" href="#MobNav" role="button" aria-expanded="false"
                aria-controls="MobNav">
                <i class="fas fa-bars mr-2"></i>Dashboard Navigation
            </a>
            @include('client.layout.navbar')
            <div class="dashboard-content">
                <div class="dashboard-tlbar d-block mb-5">
                    <div class="row">
                        <div class="colxl-12 col-lg-12 col-md-12">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item text-muted"><a href="#">Home</a></li>
                                    @if (isset($breadcrumbs))
                                        @foreach ($breadcrumbs as $key => $breadcrumb)
                                            @if ($key != count($breadcrumbs) - 1)
                                                <li class="breadcrumb-item">
                                                <li class="breadcrumb-item"><a href="{{ $breadcrumb['url'] }}"
                                                        class="text-light">{{ $breadcrumb['name'] }}</a></li>
                                                </li>
                                            @else
                                                <li class="breadcrumb-item active theme-cl" aria-current="page">
                                                    {{ $breadcrumb }}</li>
                                            @endif
                                        @endforeach
                                    @endif
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div id="app">
                    @yield('seeker')
                    @if (session()->get('Message.flash'))
                        <popup-alert :data="{{ json_encode(session()->get('Message.flash')[0]) }}"></popup-alert>
                    @endif
                    @php
                        session()->forget('Message.flash');
                    @endphp
                </div>
                <!-- footer -->
            </div>
        </div>
        <!-- ======================= dashboard Detail End ======================== -->

        <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>


    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/slider-bg.js') }}"></script>
    <script src="{{ asset('assets/js/smoothproducts.js') }}"></script>
    <script src="{{ asset('assets/js/snackbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/jQuery.style.switcher.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->

</body>

<!-- Mirrored from themezhub.net/live-workplex/workplex/dashboard-my-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Aug 2022 09:32:11 GMT -->

</html>
