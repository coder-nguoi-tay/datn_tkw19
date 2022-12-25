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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .main_gt {
            width: 1100px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 350px 1fr;
            font-size: 12px !important;
        }

        .left_cv {
            height: auto;
            width: 100%;
            color: #bbbdbf;
            background: #284350;
            padding: 10px;
        }

        .left_cv .box_img {
            width: 100%;
            margin-bottom: 10px;
            border: 3px solid #ffc628;
            height: 300px;
        }

        .left_cv .box_img>img {
            border: 3px solid #ffc628;
        }

        .left_cv>.contact {
            margin: 0 auto;
            width: 100%;
        }

        .box_contact>.mail {
            display: grid;
            grid-template-columns: 25px 1fr;
            color: #bbbdbf;
            font-size: 14px;
            font-weight: 400;
            gap: 5px;
        }

        .box_contact>.mail>p {
            margin: 0;
        }

        .box_contact>.mail>i {
            text-align: center;
            margin: auto 0;
            color: beige;
        }

        .left_cv .contact>h3 {
            color: #f1f1f1;
            text-transform: uppercase;
            margin: 10px 0;
            font-size: 18px;
            border-bottom: 1px solid #ffc628;

        }

        .left_cv>.contact .box_contact {
            line-height: 30px;
            margin: 10px 0;
        }

        .left_cv>.contact h4 {
            font-size: 12px;
            text-transform: capitalize;
            color: #f1f1f1;
        }

        .left_cv>.contact .box_contact .ky_nang {
            font-size: 14px;

        }

        .text-first {
            text-transform: capitalize;
        }

        .text-first::first-letter {
            text-transform: capitalize;
        }

        .main_gt .right_cv {
            border-top-right-radius: 3px;
            border-bottom-right-radius: 3px;
            background: white !important;
        }

        .main_gt .right_cv .box_cv {
            border-top: 1px solid #ffc628;
            position: relative;
            padding-left: 35px;
            color: #284350;
            font-size: 14px;
            padding-right: 30px;
            text-align: justify;
        }

        .main_gt .right_cv .box_cv:first-child {
            padding-top: 20px;
            border-top: none;
            text-transform: uppercase;
            padding-bottom: 20px;
        }

        .main_gt .right_cv .box_cv .name {
            font-size: 28px;
            color: #284350;
            margin-bottom: 20px;
        }

        .main_gt .right_cv .box_cv:first-child>h4 {
            font-size: 24px;
            color: #284350;
            margin-bottom: 20px;
        }

        .main_gt .right_cv>.box_cv:first-child h4 {
            border: none;
            border-radius: none;
        }

        .main_gt .right_cv>.box_cv>h3 {
            border: 1px solid #ffbb00;
            border-radius: 8px;
            width: 250px;
            text-align: center;
            padding: 8px 5px;
            position: absolute;
            top: -20px;
            color: #284350;
            background: white;
        }

        .main_gt .right_cv>.box_cv>h3> {
            font-size: 14px;
        }

        .main_gt .right_cv .box_cv>.mt {
            margin: 40px 0;
        }

        .main_gt .right_cv.title_cv {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .main_gt .right_cv.title_cv>h4 {
            color: #284350;
        }

        .main_gt .right_cv.title_cv>i {
            color: #ebad00;
        }

        .main_gt .right_cv.mt .h4 {
            font-weight: 600;
            margin: 10px 0;
        }

        .main_gt .right_cv .mt_cv {
            font-size: 14px;
            text-align: justify;
        }

        .main_gt .right_cv.mt_cv>.h4 {
            color: #284350;
            padding: 10px 0;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div id="main-wrapper">
        <div class="dashboard-wrap bg-light">
            <a class="mobNavigation" data-toggle="collapse" href="#MobNav" role="button" aria-expanded="false"
                aria-controls="MobNav">
                <i class="fas fa-bars mr-2"></i>
            </a>
            @include('client.layout.navbar')
            <div class="dashboard-content">
                <div class="dashboard-tlbar d-block mb-5">
                    <div class="row">
                        <div class="colxl-12 col-lg-12 col-md-12">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <a href="{{ route('profile.index') }}" class="breadcrumb-item text-muted">Home</a>
                                    @if (isset($breadcrumbs))
                                        @foreach ($breadcrumbs as $key => $breadcrumb)
                                            @if ($key != count($breadcrumbs) - 1)
                                                <li class="breadcrumb-item"><a href="{{ $breadcrumb['url'] }}"
                                                        class="text-breadcrumbs">{{ $breadcrumb['name'] }}</a></li>
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
            <div class="loading-div hidden">
                <div class="loader-img"></div>
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
