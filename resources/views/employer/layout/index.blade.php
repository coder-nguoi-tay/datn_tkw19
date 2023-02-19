@php
    use App\Models\Employer;
    use App\Models\Company;
    use App\Models\Accuracy;
    use Illuminate\Support\Facades\Auth;
    use App\Models\PaymentHistoryEmployer;
    use Carbon\Carbon;
    $status = [];
    $checkCompany = Employer::where('user_id', Auth::guard('user')->user()->id)->first();
    if ($checkCompany->id_company) {
        $checkCompanyXt = Accuracy::where('user_id', $checkCompany->id_company)->first();
        if (!$checkCompanyXt) {
            $status = 1;
        }
        if ($checkCompanyXt) {
            if ($checkCompanyXt->status == 0) {
                $status = 1;
            }
        }
    } else {
        $status = 1;
    }
    // payment
    $formatday = Carbon::parse(Carbon::now())->format('d');
    $paymentHistory = PaymentHistoryEmployer::where('user_id', Auth::guard('user')->user()->id)
        ->whereTime('created_at', '>=', '00:00:00')
        ->whereTime('created_at', '<=', '23:59:00')
        ->whereDay('created_at', '=', $formatday)
        ->get()
        ->pluck('price');
    $totalPaymentInDay = [];
    foreach ($paymentHistory as $item) {
        $totalPaymentInDay[] = $item;
        if ($checkCompany->check_prioritize == 0) {
            if (array_sum($totalPaymentInDay) >= 5000000) {
                $employer = Employer::where('user_id', Auth::guard('user')->user()->id)->first();
                $employer->prioritize += 1;
                $employer->check_prioritize = 1;
                $employer->save();
            }
        }
    }
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="../wp-content/uploads/2022/09/favicon.png" sizes="32x32" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @if (isset($title))
        <title>{{ $title }}</title>
    @endif
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.2.0/dist/css/coreui.min.css" rel="stylesheet"
        integrity="sha384-UkVD+zxJKGsZP3s/JuRzapi4dQrDDuEf/kHphzg8P3v8wuQ6m9RLjTkPGeFcglQU" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:100,300,400,500,700,&amp;display=swap"
        rel="stylesheet">
    <!-- Template CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/company/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/company/line-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/company/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/company/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/company/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/company/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/company/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/company/chosen.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/company/jquery-te-1.4.0.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/company/style.css') }}">
    <link rel="stylesheet" href="/assets/css/adminlte.min.css">
    <link rel='stylesheet' id='jobbox-style-css'
        href='../../../wp-content/themes/jobbox/assets/css/style8a54.css?ver=1.0.0' media='all' />
    <script src="{{ asset('js/adminApp.js') }}" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.2.0/dist/css/coreui.min.css" rel="stylesheet"
        integrity="sha384-UkVD+zxJKGsZP3s/JuRzapi4dQrDDuEf/kHphzg8P3v8wuQ6m9RLjTkPGeFcglQU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.2.0/dist/js/coreui.bundle.min.js"
        integrity="sha384-n0qOYeB4ohUPebL1M9qb/hfYkTp4lvnZM6U6phkRofqsMzK29IdkBJPegsyfj/r4" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <script>
        window.Laravel = {!! json_encode(
            [
                'csrfToken' => csrf_token(),
                'baseUrl' => url('/'),
            ],
            JSON_UNESCAPED_UNICODE,
        ) !!};
    </script>
    <style>
        a {
            text-decoration: none !important
        }
    </style>

</head>

<body>
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center"><img src="../../wp-content/themes/jobbox/assets/imgs/template/loading.gif"
                        alt="">
                </div>
            </div>
        </div>
    </div>

    <div id="app">
        @if ($status == 1)
            @include('employer.layout.header')
        @endif
        @include('employer.layout.sidebar')
        @yield('content')

        @if (session()->get('Message.flash'))
            <notyf :data="{{ json_encode(session()->get('Message.flash')[0]) }}"></notyf>
        @endif
        @php
            session()->forget('Message.flash');
        @endphp
        @include('employer.layout.footer')
    </div>
    <div class="loading-div hidden">
        <div class="loader-img"></div>
    </div>
</body>

<script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/isotope-3.0.6.min.js') }}"></script>
<script src="{{ asset('assets/js/chosen.min.js') }}"></script>
<script src="{{ asset('assets/js/moment.min.js') }}"></script>
<script src="{{ asset('assets/js/daterangepicker.js') }}"></script>
<script src="{{ asset('assets/js/purecounter.js') }}"></script>
<script src="{{ asset('assets/js/progresscircle.js') }}"></script>
<script src="{{ asset('assets/js/jquery.MultiFile.min.js') }}"></script>
{{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAYzby4yYDVaXPmtu4jZAGR258K6IYwjIY&amp;libraries">
</script> --}}
<script src="{{ asset('assets/js/gmap-script.js') }}"></script>
<script src="{{ asset('assets/js/jquery-te-1.4.0.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src='../../../wp-content/themes/jobbox/assets/js/mainbb93.js?ver=5.0.0' id='jobbox-main-js'></script>

</html>
