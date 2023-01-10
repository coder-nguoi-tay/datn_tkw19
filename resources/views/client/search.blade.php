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
        <section class="bg-light" style="margin-top: 30px">
            <div class="container-xxl pt-2">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul class="nav nav-tabs" role="tablist">
                        <li>
                            <a class="" id="nav-tab-content-writer" href="#tab-content-writer" data-bs-toggle="tab"
                                role="tab" aria-controls="tab-content-writer" aria-selected="false" tabindex="-1">
                                <img decoding="async" src="wp-content/uploads/2022/10/security-icon.png" width="18"
                                    alt="Content Writer">
                                Content Writer </a>
                        </li>
                        <li>
                            <a class="" id="nav-tab-finance" href="#tab-finance" data-bs-toggle="tab" role="tab"
                                aria-controls="tab-finance" aria-selected="false" tabindex="-1">
                                <img decoding="async" src="wp-content/uploads/2022/10/bank.png" width="18"
                                    alt="Finance">
                                Finance </a>
                        </li>
                        <li>
                            <a class="" id="nav-tab-human-resource" href="#tab-human-resource" data-bs-toggle="tab"
                                role="tab" aria-controls="tab-human-resource" aria-selected="false" tabindex="-1">
                                <img decoding="async" src="wp-content/uploads/2022/10/human-resource.png" width="18"
                                    alt="Human Resource">
                                Human Resource </a>
                        </li>
                        <li>
                            <a class="active" id="nav-tab-management" href="#tab-management" data-bs-toggle="tab"
                                role="tab" aria-controls="tab-management" aria-selected="true">
                                <img decoding="async" src="wp-content/uploads/2022/10/management-icon.png" width="18"
                                    alt="Management">
                                Management </a>
                        </li>
                        <li>
                            <a class="" id="nav-tab-market-research" href="#tab-market-research"
                                data-bs-toggle="tab" role="tab" aria-controls="tab-market-research"
                                aria-selected="false" tabindex="-1">
                                <img decoding="async" src="wp-content/uploads/2022/10/research-icon.png" width="18"
                                    alt="Market Research">
                                Market Research </a>
                        </li>
                        <li>
                            <a class="" id="nav-tab-marketing-sale" href="#tab-marketing-sale"
                                data-bs-toggle="tab" role="tab" aria-controls="tab-marketing-sale"
                                aria-selected="false" tabindex="-1">
                                <img decoding="async" src="wp-content/uploads/2022/10/career-icon.png" width="18"
                                    alt="Marketing &amp; Sale">
                                Marketing &amp; Sale </a>
                        </li>
                        <li>
                            <a class="" id="nav-tab-retail-products" href="#tab-retail-products"
                                data-bs-toggle="tab" role="tab" aria-controls="tab-retail-products"
                                aria-selected="false" tabindex="-1">
                                <img decoding="async" src="wp-content/uploads/2022/10/retail-icon.png" width="18"
                                    alt="Retail &amp; Products">
                                Retail &amp; Products </a>
                        </li>
                        <li>
                            <a class="" id="nav-tab-software" href="#tab-software" data-bs-toggle="tab"
                                role="tab" aria-controls="tab-software" aria-selected="false" tabindex="-1">
                                <img decoding="async" src="wp-content/uploads/2022/10/lamp-icon.png" width="18"
                                    alt="Software">
                                Software </a>
                        </li>
                    </ul>
                    <div class="row align-items-center ">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                            <div class="row align-items-center justify-content-between mx-0 rounded p-3">
                                <div class="col-xl-3 col-lg-4 col-md-5 col-sm-12 ">
                                    <h4 class="mb-0 ft-medium fs-sm">Việc làm liên quan</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="row flex-row-reverse">
                        <div class="col-lg-12">
                            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 job_listings mt-25"
                                id="paginated-list2">
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
