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
                                style="visibility: visible; animation-name: fadeInUp;"><span class="color-brand-2">
                                    {{ count($job) }} Công việc</span> Phù hợp</h3>
                        </div>
                    </div>
                </section>

            </div>
            <div class="ht-30"></div>
        </div>
        <!-- ======================= Top Breadcrubms ======================== -->
        <div class="container-xxl  pt-2">
            <div class="col-lg-12 col-md-12 col-sm-12">
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
                        'urlSeach' => route('home.search.jobGood'),
                        'skillSearch' => $skillSearch,
                        'request' => !empty($request) ? $request->all() : new stdClass(),
                    ]) }}">
                </home-search>
            </div>
        </div>

        <section>
            <div class="container-xxl pt-2"
                style=" background: #ffffff; box-shadow: var(--jobbox-box-shadow-1); border-radius: 8px;">
                <div class="col-lg-12 col-md-12 col-sm-12 pl-15 pt-4">

                    <div class="elementor-widget-container">
                        <h2 class="control-heading-title m-0">Việc làm tìm thấy</h2>
                    </div>

                    <div class="row flex-row-reverse ">
                        <div class="col-lg-12">
                            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 job_listings mt-30" id="paginated-list">
                                @foreach ($job as $value)
                                    <div class="col jobbox-grid-item render-job-search">
                                        <div class="card-grid-2 hover-up">
                                            <div class="card-grid-2-image-left">
                                                <div class="image-box">
                                                    <img src="{{ asset($value->logo) }}" width="52" alt="Percepta">
                                                </div>
                                                <div class="right-info">
                                                    <a style=" -webkit-line-clamp: 1;
                                                            -webkit-box-orient: vertical;
                                                            overflow: hidden;
                                                            text-overflow: ellipsis;
                                                            display: -webkit-box;
                                                            text-align: left;"
                                                        href="home/detail/{{ $value->id }}">
                                                        <span class="name-job">{{ $value->title }}</span>
                                                    </a>
                                                    <div
                                                        style=" -webkit-line-clamp: 1;
                                                            -webkit-box-orient: vertical;
                                                            overflow: hidden;
                                                            text-overflow: ellipsis;
                                                            display: -webkit-box;
                                                            text-align: justify;">
                                                        <span class="location-small custom-text-company"><a
                                                                href="{{ route('detail.company', $value->idCompany) }}">{{ $value->nameCompany }}</a></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-block-info">
                                                <div class="d-flex align-items-center gap-3 font-xs color-text-mutted">
                                                    <span><i
                                                            class="fi-rr-briefcase ms-0 me-5"></i>{{ $value->getTime_work->name }}</span>
                                                    <span><i class="fi-rr-clock ms-0 me-5"></i><time
                                                            datetime="2022-09-27">{{ $value->end_job_time }}</time></span>
                                                </div>
                                                <div class="card-2-bottom mt-30">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-6 col-7">
                                                            <span class="card-text-price">{{ $value->getwage->name }}</span>
                                                        </div>

                                                        <div class="col-lg-6 col-5 text-end">
                                                            <a class="btn btn-apply-now"
                                                                href="home/detail/{{ $value->id }}">Xem chi tiết</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- All jobs -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> <br><br>
                            <span class="page-item text-center">
                                <div id="pagination-numbers" style="margin-bottom: 20px">
                                </div>

                            </span>
                        </div>
                    </div>
                    <!-- paginate -->
                </div>
            </div>
        </section>
        @if (!empty($request->all()))
            <section style="margin-top: 30px">
                <div class="container-xxl pt-2 "
                    style=" background: #ffffff; box-shadow: var(--jobbox-box-shadow-1); border-radius: 8px;">
                    <div class="col-lg-12 col-md-12 col-sm-12 pl-15 pt-4">
                        <div class="elementor-element elementor-element-ed0a5e5 m-0 elementor-widget elementor-widget-title"
                            data-id="ed0a5e5" data-element_type="widget" data-widget_type="title.default">
                            <div class="elementor-widget-container">
                                <h2 class="control-heading-title m-0">Công việc liên quan</h2>
                            </div>
                        </div>
                        <div class="row flex-row-reverse">
                            <div class="col-lg-12">
                                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 job_listings mt-25"
                                    id="paginated-list1">
                                    @foreach ($datalq as $value)
                                        <div class="col jobbox-grid-item render-job-search1">
                                            <div class="card-grid-2 hover-up">
                                                <div class="card-grid-2-image-left">
                                                    <div class="image-box">
                                                        <img src="{{ asset($value->logo) }}" width="52" alt="Percepta">
                                                    </div>
                                                    <div class="right-info">
                                                        <a href="home/detail/{{ $value->id }}">
                                                            <span class="name-job"
                                                                style=" -webkit-line-clamp: 1;
                                                            -webkit-box-orient: vertical;
                                                            overflow: hidden;
                                                            text-overflow: ellipsis;
                                                            display: -webkit-box;
                                                            text-align: left;">{{ $value->title }}</span>
                                                        </a>
                                                        <div
                                                            style=" -webkit-line-clamp: 1;
                                                            -webkit-box-orient: vertical;
                                                            overflow: hidden;
                                                            text-overflow: ellipsis;
                                                            display: -webkit-box;
                                                            text-align: justify;">
                                                            <span class="location-small custom-text-company"><a
                                                                    href="">{{ $value->nameCompany }}</a></span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card-block-info">
                                                    <div class="d-flex align-items-center gap-3 font-xs color-text-mutted">
                                                        <span><i
                                                                class="fi-rr-briefcase ms-0 me-5"></i>{{ $value->getTime_work->name }}</span>
                                                        <span><i class="fi-rr-clock ms-0 me-5"></i><time
                                                                datetime="2022-09-27">{{ $value->end_job_time }}</time></span>
                                                    </div>

                                                    <div class="card-2-bottom mt-30">
                                                        <div class="row align-items-center">
                                                            <div class="col-lg-6 col-7">
                                                                <span
                                                                    class="card-text-price">{{ $value->getwage->name }}</span>
                                                            </div>

                                                            <div class="col-lg-6 col-5 text-end">
                                                                <a class="btn btn-apply-now"
                                                                    href="/home/detail/{{ $value->id }}">Xem chi
                                                                    tiết</a>
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
                                <span class="page-item text-center">
                                    <div id="pagination-numbers1" style="margin-bottom: 20px">
                                    </div>

                                </span>
                            </div>
                        </div>
                        <!-- paginate -->
                    </div>
                </div>
            </section>
        @endif
        <!-- ============================ Main Section End ================================== -->
        <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
    </div>
@endsection
