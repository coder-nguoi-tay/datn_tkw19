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
        <div class="header header-light dark-text head-shadow">
            <div class="container">
                <nav id="navigation" class="navigation navigation-landscape">
                    <div class="nav-header">
                        <a class="nav-brand" href="{{ route('home.index') }}">
                            <img src="assets/img/logo.png" class="logo" alt="" />
                        </a>
                        <div class="nav-toggle"></div>
                        <div class="mobile_nav">
                            <ul>
                                <li>
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#login"
                                        class="crs_yuo12 w-auto text-dark gray">
                                        <span class="embos_45"><i
                                                class="lni lni-power-switch mr-1 mr-1"></i>Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="nav-menus-wrapper" style="transition-property: none;">
                        <ul class="nav-menu">

                            <li><a href="#">Home</a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="index.html">Home 1</a></li>
                                    <li><a href="home-2.html">Home 2</a></li>
                                    <li><a href="home-3.html">Home 3</a></li>
                                    <li><a href="home-4.html">Home 4</a></li>
                                    <li><a href="home-5.html">Home 5</a></li>
                                    <li><a href="home-6.html">Home 6</a></li>
                                    <li><a href="home-7.html">Home 7</a></li>
                                    <li><a href="home-8.html">Home 8</a></li>
                                </ul>
                            </li>

                            <li><a href="javascript:void(0);">Find Job</a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="job-search-v1.html">Job Search V1</a></li>
                                    <li><a href="job-search-v2.html">Job Search V2</a></li>
                                    <li><a href="job-search-v3.html">Job Search V3</a></li>
                                    <li><a href="job-list-v1.html">Job Search V4</a></li>
                                    <li><a href="job-list-v2.html">Job Search V5</a></li>
                                    <li><a href="job-list-v3.html">Job Search V6</a></li>
                                    <li><a href="javascript:void(0);">Map Styles</a>
                                        <ul class="nav-dropdown nav-submenu">
                                            <li><a href="job-half-map.html">Search On Map V1</a></li>
                                            <li><a href="job-half-map-v2.html">Search On Map V2</a></li>
                                            <li><a href="job-search-map-v1.html">Search On Map V3</a></li>
                                            <li><a href="job-search-map-v2.html">Search On Map V4</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:void(0);">Single Job</a>
                                        <ul class="nav-dropdown nav-submenu">
                                            <li><a href="single-job-1.html">Single Job V1</a></li>
                                            <li><a href="single-job-2.html">Single Job V2</a></li>
                                            <li><a href="single-job-3.html">Single Job V3</a></li>
                                            <li><a href="single-job-4.html">Single Job V4</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li><a href="javascript:void(0);">Candidates</a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="browse-jobs.html">Browse Jobs</a></li>
                                    <li><a href="browse-resumes.html">Browse Resumes</a></li>
                                    <li><a href="browse-category.html">Browse Categories</a></li>
                                    <li><a href="candidate-detail.html">Candidate Detail</a></li>
                                    <li><a href="candidate-dashboard.html">Candidate Dashboard</a></li>
                                </ul>
                            </li>

                            <li><a href="javascript:void(0);">Employers</a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="browse-employers.html">Browse Employers V1</a></li>
                                    <li><a href="browse-employers-list.html">Browse Employers V2</a></li>
                                    <li><a href="employer-detail.html">Employer Detail</a></li>
                                    <li><a href="employer-dashboard.html">Employer Dashboard</a></li>
                                </ul>
                            </li>

                            <li><a href="javascript:void(0);">Pages</a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="blog.html">Blog Style</a></li>
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="404.html">404 Page</a></li>
                                    <li><a href="privacy.html">Privacy Policy</a></li>
                                    <li><a href="faq.html">FAQs</a></li>
                                    <li><a href="docs.html">Docs</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
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
