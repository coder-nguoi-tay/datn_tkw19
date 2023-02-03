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
    <link rel='dns-prefetch' href='http://code.jquery.com/' />
    <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
    <link rel="alternate" type="application/rss+xml" title="Jobbox &raquo; Feed" href="../feed/index.html" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

    <link rel='stylesheet' id='jobbox-google-fonts-css'
        href='https://fonts.googleapis.com/css?family=Plus+Jakarta+Sans%3A400%2C500%2C600%2C700%2C800&amp;ver=1.0.0'
        media='all' />

    <link rel='stylesheet' id='bootstrap-css'
        href='{{ asset('wp-content/themes/jobbox/assets/css/bootstrap/bootstrapbb49.css?ver=5.2.2') }}'
        media='all' />
    <link rel='stylesheet' id='jobbox-uicons-css'
        href='{{ asset('wp-content/themes/jobbox/assets/css/vendors/uicons-regular-rounded8a54.css?ver=1.0.0') }}'
        media='all' />
    <link rel='stylesheet' id='fontawesome-css' href='../wp-content/themes/jobbox/assets/css/all.min10df.css?ver=6.2.0'
        media='all' />
    <link rel='stylesheet' id='jobbox-swiper-css'
        href='{{ asset('wp-content/themes/jobbox/assets/css/plugins/swiper-bundle.min5d50.css?ver=8.3.2') }}'
        media='all' />
    <link rel='stylesheet' id='jobbox-magnific-css'
        href='{{ asset('wp-content/themes/jobbox/assets/css/plugins/magnific-popupf488.css?ver=1.1.0') }}'
        media='all' />
    <link rel='stylesheet' id='jobbox-select2-css'
        href='{{ asset('wp-content/themes/jobbox/assets/css/plugins/select2.min8a54.css?ver=1.0.0') }}'
        media='all' />
    <link rel='stylesheet' id='jobbox-perfect-scrollbar-css'
        href='{{ asset('wp-content/themes/jobbox/assets/css/plugins/perfect-scrollbar8a54.css?ver=1.0.0') }}'
        media='all' />
    <link rel='stylesheet' id='jobbox-animate-css'
        href='{{ url('wp-content/themes/jobbox/assets/css/plugins/animate.min49eb.css?ver=3.5.2') }}' media='all' />
    <link rel='stylesheet' id='jobbox-theme-css' href='../wp-content/themes/jobbox/assets/css/theme8a54.css?ver=1.0.0'
        media='all' />
    <link rel='stylesheet' id='jobbox-style-css' href='../wp-content/themes/jobbox/assets/css/style8a54.css?ver=1.0.0'
        media='all' />
    <link rel='stylesheet' id='woocommerce-css'
        href='../wp-content/themes/jobbox/assets/css/woocommercecb18.css?ver=1.0.9' media='all' />
    <link rel='stylesheet' id='wp-job-manager-css'
        href='../wp-content/themes/jobbox/assets/css/wp-job-managercb18.css?ver=1.0.9' media='all' />
    <link rel='stylesheet' id='jobbox-css' href='../wp-content/themes/jobbox/style6a4d.css?ver=6.1.1' media='all' />
    {{-- <link rel='stylesheet' id='control-elementor-css'
        href='../wp-content/plugins/control-elementor/assets/css/control-elementor8a54.css?ver=1.0.0' media='all' /> --}}
    <link rel='stylesheet' id='elementor-icons-css'
        href='../wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min91ce.css?ver=5.16.0'
        media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'
        href='../wp-content/uploads/elementor/css/custom-frontend-lite.min93ef.css?ver=1672899280' media='all' />
    <link rel='stylesheet' id='elementor-post-16-css'
        href='../wp-content/uploads/elementor/css/post-1693ef.css?ver=1672899280' media='all' />
    <link rel='stylesheet' id='elementor-global-css'
        href='../wp-content/uploads/elementor/css/global93ef.css?ver=1672899280' media='all' />
    <link rel='stylesheet' id='elementor-post-1341-css'
        href='../wp-content/uploads/elementor/css/post-1341302f.css?ver=1672900424' media='all' />
    <link rel='stylesheet' id='google-fonts-1-css'
        href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=6.1.1'
        media='all' />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script src='../wp-includes/js/jquery/jquery.mina7a0.js?ver=3.6.1' id='jquery-core-js'></script>
    <script src='../wp-includes/js/jquery/jquery-migrate.mind617.js?ver=3.3.2' id='jquery-migrate-js'></script>
    <link rel="https://api.w.org/" href="../wp-json/index.html" />
    <link rel="alternate" type="application/json" href="../wp-json/wp/v2/pages/1341.json" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../wp-includes/wlwmanifest.xml" />

    <link rel="canonical" href="index.html" />
    <link rel='shortlink' href='../index42a6.html?p=1341' />
    <link rel="alternate" type="application/json+oembed"
        href="../wp-json/oembed/1.0/embed39e0.json?url=https%3A%2F%2Fjthemes.com%2Fthemes%2Fwp%2Fjobbox%2Fhome-3%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="../wp-json/oembed/1.0/embed02a7?url=https%3A%2F%2Fjthemes.com%2Fthemes%2Fwp%2Fjobbox%2Fhome-3%2F&amp;format=xml" />
    <link rel="icon" href="../wp-content/uploads/2022/09/favicon.png" sizes="32x32" />
    <link rel="icon" href="../wp-content/uploads/2022/09/favicon.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="../wp-content/uploads/2022/09/favicon.png" />
    <meta name="msapplication-TileImage"
        content="https://jthemes.com/themes/wp/jobbox/wp-content/uploads/2022/09/favicon.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
    <!-- use the latest release -->
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

<body
    class="page-template page-template-elementor_header_footer page page-id-1341 wp-embed-responsive theme-jobbox woocommerce-no-js jobbox elementor-default elementor-template-full-width elementor-kit-16 elementor-page elementor-page-1341">
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center"><img src="../wp-content/themes/jobbox/assets/imgs/template/loading.gif"
                        alt="">
                </div>
            </div>
        </div>
    </div>
    <div id="main-wrapper">
        <div id="app">
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
</body>

<script type="text/javascript">
    (function() {
        var c = document.body.className;
        c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
        document.body.className = c;
    })();
</script>
<script src='../wp-includes/js/jquery/ui/autocomplete.min3f14.js?ver=1.13.2' id='jquery-ui-autocomplete-js'></script>
<script id='control-job-manager-js-extra'>
    var controlJobManager = {
        "skills": ["Adobe XD", "APP", "Digital", "Figma", "PSD"],
        "ajax": "https:\/\/jthemes.com\/themes\/wp\/jobbox\/wp-admin\/admin-ajax.php"
    };
</script>
<script id='wp-job-manager-bookmarks-bookmark-js-js-extra'>
    var job_manager_bookmarks = {
        "i18n_confirm_delete": "Are you sure you want to delete this bookmark?",
        "i18n_add_bookmark": "Add Bookmark",
        "i18n_update_bookmark": "Update Bookmark",
        "spinner_url": "https:\/\/jthemes.com\/themes\/wp\/jobbox\/wp-includes\/images\/spinner.gif"
    };
</script>
<script src='../wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min8bd8.js?ver=2.7.0-wc.7.2.2'
    id='jquery-blockui-js'></script>

<script src='../wp-includes/js/imagesloaded.mineda1.js?ver=4.1.4' id='imagesloaded-js'></script>
<script src='../wp-includes/js/masonry.min3a05.js?ver=4.2.2' id='masonry-js'></script>
<script src='../wp-includes/js/jquery/jquery.masonry.minef70.js?ver=3.1.2b' id='jquery-masonry-js'></script>
<script src='../wp-content/themes/jobbox/assets/js/mainbb93.js?ver=5.0.0' id='jobbox-main-js'></script>
<script src='../wp-content/plugins/elementor/assets/lib/jquery-numerator/jquery-numerator.min3958.js?ver=0.2.1'
    id='jquery-numerator-js'></script>
{{-- <script src='../wp-content/plugins/control-email-subscriber/jquery.ajaxchimp.min6f3e.js?ver=1.3.0'
    id='jquery-ajaxchimp-js'></script> --}}
