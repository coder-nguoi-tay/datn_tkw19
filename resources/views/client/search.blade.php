@php
    use Carbon\Carbon;
    use App\Components\SearchQueryComponent;
@endphp
@extends('client.layout.index')
@section('client')
    <div id="main-wrapper">
        <div class="clearfix"></div>
        <div class="bg-title py-5" data-overlay="0">
            <div class="ht-30"></div>
            <div class="container">
                <div class="row">
                    <div class="colxl-12 col-lg-12 col-md-12">
                        <h1 class="ft-medium">Việc làm đã tìm thấy</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('index') }}" class="text-light">Home</a>
                                </li>
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
            <div class="ht-30"></div>
        </div>
        <!-- ======================= Top Breadcrubms ======================== -->
        <div class="container-fluid">
            <div class="col-lg-12 p-4">
                <home-search
                    :data="{{ json_encode([
                        'lever' => $lever,
                        'experience' => $experience,
                        'wage' => $wage,
                        'skill' => $skill,
                        'timework' => $timework,
                        'profession' => $profession,
                        'majors' => $majors,
                        'location' => $location,
                        'workingform' => $workingform,
                        'urlSeach' => route('home.search'),
                        'skillSearch' => $skillSearch,
                        'request' => !empty($request) ? $request->all() : new stdClass(),
                    ]) }}">
                </home-search>
            </div>
        </div>
        <section class="bg-light">
            <div class="container-fluid">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                            <div class="row align-items-center justify-content-between mx-0 bg-white rounded py-2 mb-4">
                                <div class="col-xl-3 col-lg-4 col-md-5 col-sm-12">
                                    <h6 class="mb-0 ft-medium fs-sm">{{ count($job) }} Công việc được tìm thấy</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="p-3 container">
                            <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3" id="paginated-list">
                                @foreach ($job as $value)
                                    <div class="col render-job-search">

                                        <div class="p-3 border bg-light box-showdow">
                                            <div class="position-absolute ab-right">
                                                <a type="button"
                                                    class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray">
                                                    <i class="lni lni-heart-filled position-absolute snackbar-wishlist"></i>
                                                </a>
                                            </div>
                                            <div class="row">
                                                <div class="job_grid_thumb mb-3 title-name px-3 col-4">
                                                    <a href="home/detail/{{ $value->title . '-' . $value->id }}"
                                                        class="d-block m-auto"><img src="{{ asset($value->logo) }}"
                                                            class="img-fluid border-0"
                                                            style="width: 70% !important; height: 70% !important"
                                                            alt="" /></a>
                                                </div>
                                                <div class="job_grid_caption title-name px-3 col-8">
                                                    <h4 class="mb-0 ft-medium medium ml-20">
                                                        <a href="home/detail/{{ $value->title . '-' . $value->id }}"
                                                            class="text-dark fs-md mb-5" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="{{ $value->title }}">
                                                            {{ $value->title }}
                                                        </a>
                                                        <br>
                                                        {{ $value->nameCompany }}
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-8">
                                                    <div class="cucstom-time"><span
                                                            class=" medium skill-bg  text-dark df-1  text-wage-company p-1">
                                                            {{ $value->getWage->name }}
                                                        </span>
                                                        <span
                                                            class=" medium skill-bg m-2  text-dark df-1  text-wage-company p-1">
                                                            <i
                                                                class="lni lni-map-marker mr-1"></i>{{ $value->getlocation->name }}
                                                        </span>
                                                    </div>

                                                </div>
                                                <div class="col-4">
                                                    <span
                                                        class="medium skill-bg m-2  text-dark df-1  text-wage-company p-1">
                                                        còn 10 ngày
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <span class="page-item text-center pagination-container">
                                        <div id="pagination-numbers">
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- All jobs -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> <br><br>
                            <span class="page-item text-center pagination-container d-flex">
                                <div id="pagination-numbers">
                                </div>

                            </span>
                        </div>
                    </div>
                    <!-- paginate -->
                </div>
            </div>
        </section>
        <!-- ============================ Main Section End ================================== -->

        <!-- ======================= Newsletter Start ============================ -->
        <section class="space bg-cover" style="background:#03343b url(assets/img/landing-bg.png) no-repeat;">
            <div class="container py-5">

                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="sec_title position-relative text-center mb-5">
                            <h6 class="text-light mb-0">Subscribr Now</h6>
                            <h2 class="ft-bold text-light">Get All New Job Notification</h2>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-7 col-lg-10 col-md-12 col-sm-12 col-12">
                        <form class="bg-white rounded p-1">
                            <div class="row no-gutters">
                                <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8">
                                    <div class="form-group mb-0 position-relative">
                                        <input type="text" class="form-control lg left-ico"
                                            placeholder="Enter Your Email Address">
                                        <i class="bnc-ico lni lni-envelope"></i>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                                    <div class="form-group mb-0 position-relative">
                                        <button class="btn full-width custom-height-lg theme-bg text-light fs-md"
                                            type="button">Subscribe</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Modal -->

        <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
    </div>

@endsection
