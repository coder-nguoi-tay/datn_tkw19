@php
    use Carbon\Carbon;
    use App\Components\SearchQueryComponent;
@endphp
@extends('client.layout.index')
@section('client')
    <div id="main-wrapper">
        <div class="clearfix"></div>
        <div class=" py-5">
            <div class="ht-30"></div>

            <div class="container" style="background: white">
                <section class="section-box-2">
                    <div class="banner-hero banner-single banner-single-bg" data-settings-id="banner-job">
                        <div class="block-banner text-center">
                            <h3 class="wow animate__ animate__fadeInUp animated"
                                style="visibility: visible; animation-name: fadeInUp;"><span
                                    class="color-brand-2">{{ count($job) }}
                                    Công việc</span> Phù hợp</h3>
                            <div class="font-sm color-text-paragraph-2 mt-10 wow animate__ animate__fadeInUp animated"
                                data-wow-delay=".1s"
                                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">Lorem
                                ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni,<br
                                    class="d-none d-xl-block">atque delectus molestias quis</div>

                        </div>
                    </div>
                </section>
                {{-- <div class="row">
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
                </div> --}}
            </div>
            <div class="ht-30"></div>
        </div>
        <!-- ======================= Top Breadcrubms ======================== -->
        <div class="container-xxl pt-4 pb-4">
            <div class="col-lg-12 ">
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
            <div class="container-xxl pt-2">
                <div class="col-lg-12 col-md-12 col-sm-12">

                    {{-- <div class="row align-items-center bg-secondary"
                        style="border-top-left-radius: 30px; border-bottom-right-radius: 30px;">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                            <div class="row align-items-center justify-content-between mx-0 rounded p-3">
                                <div class="col-xl-3 col-lg-4 col-md-5 col-sm-12">
                                    <h6 class="mb-0 ft-medium fs-sm">{{ count($job) }} Công việc được tìm thấy</h6>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="row flex-row-reverse ">
                        <div class="col-lg-12">
                            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 job_listings mt-30" id="paginated-list1">
                                @foreach ($job as $value)
                                    <div class="col jobbox-grid-item ">
                                        <div class="card-grid-2 hover-up">
                                            <div class="card-grid-2-image-left">
                                                <div class="image-box">
                                                    <img src="{{ asset($value->logo) }}" width="52" alt="Percepta">
                                                </div>
                                                <div class="right-info">
                                                    <a href="home/detail/{{ $value->title . '-' . $value->id }}">
                                                        <span class="name-job">{{ $value->nameCompany }}</span>
                                                    </a>
                                                    <div
                                                        style=" -webkit-line-clamp: 1;
                                                            -webkit-box-orient: vertical;
                                                            overflow: hidden;
                                                            text-overflow: ellipsis;
                                                            display: -webkit-box;
                                                            text-align: justify;">
                                                        <span class="location-small">{{ $value->getLocation->name }}</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-block-info">
                                                <h6 class="mb-1"
                                                    style=" -webkit-line-clamp: 1;
                                                            -webkit-box-orient: vertical;
                                                            overflow: hidden;
                                                            text-overflow: ellipsis;
                                                            display: -webkit-box;
                                                            text-align: justify;">
                                                    <a href="home/detail/{{ $value->title . '-' . $value->id }}">
                                                        {{ $value->title }}</a>
                                                </h6>

                                                <div class="d-flex align-items-center gap-3 font-xs color-text-mutted">
                                                    <span><i class="fi-rr-briefcase ms-0 me-5"></i>Part Time</span>
                                                    <span><i class="fi-rr-clock ms-0 me-5"></i><time
                                                            datetime="2022-09-27">{{ $value->end_job_time }}</time></span>
                                                </div>

                                                {{-- <p class="font-sm color-text-paragraph mt-15">
                                                    {!! $value->describe !!}</p> --}}


                                                <div class="card-2-bottom mt-30">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-6 col-7">
                                                            <span class="card-text-price">{{ $value->getwage->name }}</span>
                                                        </div>

                                                        <div class="col-lg-6 col-5 text-end">
                                                            <a class="btn btn-apply-now" href="">Apply
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach



                            </div>
                            <!--row job_listings-->
                        </div>
                        <!--col-lg-9-->
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
        <section class="bg-light">
            <div class="container-xxl pt-2">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    {{-- <div class="row align-items-center ">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                            <div class="row align-items-center justify-content-between mx-0 rounded p-3">
                                <div class="col-xl-3 col-lg-4 col-md-5 col-sm-12 ">
                                    <h6 class="mb-0 ft-medium fs-sm">Việc làm liên quan</h6>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <section class="section-box" style="
    background: #c9b7b7;">
                        <div class="breacrumb-cover " style="">
                            <div class="container">
                                <div class="row d-grid d-md-flex gap-30 gap-lg-0 align-items-end">
                                    <div class="col-lg-6">
                                        <h3 class="mb-0">Sản phẩm liên quan</h3>

                                    </div>
                                    <div class="col-lg-6 text-lg-end">
                                        <ul class="breadcrumbs list-unstyled">
                                            <!-- Breadcrumb NavXT 7.1.0 -->
                                            <li class="home"><span property="itemListElement" typeof="ListItem"><a
                                                        property="item" typeof="WebPage" title="Go to Jobbox."
                                                        href="" class="home home-icon"><span
                                                            property="name">Home</span></a>
                                                    <meta property="position" content="1">
                                                </span></li>
                                            <li class="post-root post post-post current-item"><span
                                                    property="itemListElement" typeof="ListItem"><span property="name"
                                                        class="post-root post post-post current-item">Blog</span>
                                                    <meta property="url" content="">
                                                    <meta property="position" content="2">
                                                </span></li>
                                            <!-- <li><a class="home-icon" href="#">Home</a></li> -->

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="row flex-row-reverse">
                        <div class="col-lg-12">
                            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 job_listings mt-30" id="paginated-list2">
                                @foreach ($datalq as $value)
                                    <div class="col jobbox-grid-item ">
                                        <div class="card-grid-2 hover-up">
                                            <div class="card-grid-2-image-left">
                                                <div class="image-box">
                                                    <img src="{{ asset($value->logo) }}" width="52" alt="Percepta">
                                                </div>
                                                <div class="right-info">
                                                    <a href="home/detail/{{ $value->title . '-' . $value->id }}">
                                                        <span class="name-job">{{ $value->nameCompany }}</span>
                                                    </a>
                                                    <div
                                                        style=" -webkit-line-clamp: 1;
                                                            -webkit-box-orient: vertical;
                                                            overflow: hidden;
                                                            text-overflow: ellipsis;
                                                            display: -webkit-box;
                                                            text-align: justify;">
                                                        <span
                                                            class="location-small">{{ $value->getLocation->name }}</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-block-info">
                                                <h6 class="mb-1"
                                                    style=" -webkit-line-clamp: 1;
                                                            -webkit-box-orient: vertical;
                                                            overflow: hidden;
                                                            text-overflow: ellipsis;
                                                            display: -webkit-box;
                                                            text-align: justify;">
                                                    <a href="home/detail/{{ $value->title . '-' . $value->id }}">
                                                        {{ $value->title }}</a>
                                                </h6>

                                                <div class="d-flex align-items-center gap-3 font-xs color-text-mutted">
                                                    <span><i class="fi-rr-briefcase ms-0 me-5"></i>Part Time</span>
                                                    <span><i class="fi-rr-clock ms-0 me-5"></i><time
                                                            datetime="2022-09-27">{{ $value->end_job_time }}</time></span>
                                                </div>
                                                {{-- <div>
                                                    <p class="font-sm color-text-paragraph mt-15">
                                                        {!! $value->describe !!}</p>
                                                </div> --}}

                                                <div class="card-2-bottom mt-30">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-6 col-7">
                                                            <span
                                                                class="card-text-price">{{ $value->getwage->name }}</span>
                                                        </div>

                                                        <div class="col-lg-6 col-5 text-end">
                                                            <a class="btn btn-apply-now" href="">Apply
                                                                now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach



                            </div>
                            <!--row job_listings-->
                        </div>
                        <!--col-lg-9-->
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
        <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
    </div>
@endsection
