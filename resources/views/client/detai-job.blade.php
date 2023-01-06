@php
    use Carbon\Carbon;
@endphp
@extends('client.layout.index')
@section('client')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <div id="main-wrapper" style="background: #f0f2f5 !important;">
        <div class="clearfix"></div>

        <div class="py-5" style="background:#03343b url(assets/img/landing-bg.png) no-repeat;" data-overlay="0">
            <div class="container">
                <div class="col-lg-12">
                    <form id="search-form" action="{{ route('home.search') }}" name="gs" method="submit"
                        role="search">
                        <div class="row">
                            <div class="col-lg-3 align-self-center">
                                <fieldset>
                                    <input type="address" name="key" class="searchText" placeholder="Tìm Kiêm..."
                                        autocomplete="on">
                                </fieldset>
                            </div>
                            <div class="col-lg-3 align-self-center">
                                <fieldset>
                                    <select class="form-select" name="majors">
                                        <option selected disabled>Chuyên Ngành</option>
                                        @foreach ($majors as $item)
                                            <option value="{{ $item->id }}">
                                                {{ $item->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-3 align-self-center">
                                <fieldset>
                                    <select class="form-select" name="location">
                                        <option selected disabled>Địa chỉ</option>
                                        @foreach ($locationAll as $item)
                                            <option value="{{ $item->id }}">
                                                {{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-3">
                                <fieldset>
                                    <button class="main-button"><i class="fa fa-search"></i> Tìm Kiếm</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <section class="bg-light py-5 position-relative" style="background: #f0f2f5 !important">
            <div class="container">
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="colxl-12 col-lg-12 col-md-12">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('index') }}"
                                                class="text-blue">Home</a>
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
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                        @if (Session::has('thongbao'))
                            <div class="alert alert-danger thongbao">
                                {{ Session::get('thongbao') }}
                            </div>
                        @endif
                        <div class="bg-white rounded px-3 py-4 mb-4">
                            <div class="jbd-01 d-flex align-items-center justify-content-between">
                                <div class="jbd-flex d-flex align-items-center justify-content-start">
                                    <div class="jbd-01-thumb" style="overflow: hidden; width: 150px; height: 150px;">
                                        <img src="{{ asset($job->logo) }}" class="img-fluid"
                                            style="width: 150px; height: 150px;" alt="" />
                                    </div>
                                    <div class="jbd-01-caption pl-3">
                                        <div class="tbd-title">
                                            <h4 class="mb-0 ft-medium fs-md">{{ $job->title }}</h4>
                                        </div>
                                        <div class="jbl_location mb-3"><span><i
                                                    class="lni lni-map-marker mr-1"></i>{{ $job->getlocation->name }}</span><span
                                                class="medium ft-medium text-warning ml-3"> |
                                                {{ $job->getTime_work->name }}</span></div>
                                        <div class="jbl_info01">
                                            <span
                                                class="px-2 py-1 ft-medium medium rounded theme-cl theme-bg-light mr-2">{{ $job->getMajors->name }}</span>
                                            <span
                                                class="px-2 py-1 ft-medium medium rounded theme-cl theme-bg-light mr-2">{{ $job->getWage->name }}</span>
                                        </div>

                                    </div>
                                </div>
                                <div class="jbd-01-right text-right hide-1023">
                                    @if (Auth::guard('user')->check())
                                        <div class="jbl_button mb-2"><a href="javascript:void(0);" data-toggle="modal"
                                                data-target="#exampleModal"
                                                class="btn rounded theme-bg-light theme-cl fs-sm ft-medium">Ứng tuyển
                                                ngay</a>
                                        </div>
                                    @else
                                        <div class="jbl_button mb-2"><a href="javascript:void(0);" data-toggle="modal"
                                                data-target="#exampleModallogin"
                                                class="btn rounded theme-bg-light theme-cl fs-sm ft-medium">Ứng tuyển
                                                ngay</a>
                                        </div>
                                    @endif

                                    <div class="jbl_button"><a href="javascript:void(0);"
                                            class="btn rounded bg-white border fs-sm ft-medium">Xem công ty</a></div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white rounded mb-4">
                            <div class="jbd-01 px-3 py-4">
                                <div class="jbd-details mb-4">
                                    <h5 class="ft-medium fs-md">Mô tả công việc</h5>
                                    <p>{!! $job->describe !!}</p>

                                </div>

                                <div class="jbd-details mb-3">
                                    <h5>Yêu cầu ứng viên</h5>
                                    <div class="position-relative row">
                                        <div class="col-lg-12 col-md-12 col-12">
                                            <div class="mb-2 mr-4 ml-lg-0 mr-lg-4">
                                                <div class="d-flex align-items-center">
                                                    <h6 class="mb-0 ml-3 text-muted fs-sm">
                                                        {!! $job->candidate_requirements !!}</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="jbd-details mb-4">
                                    <h5 class="ft-medium fs-md">Quyền lợi</h5>
                                    <div class="position-relative row">
                                        <div class="col-lg-12 col-md-12 col-12">
                                            <div class="mb-2 mr-4 ml-lg-0 mr-lg-4">
                                                <div class="d-flex align-items-center">
                                                    <h6 class="mb-0 ml-3 text-muted fs-sm">
                                                        {!! $job->benefit !!}</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="jbd-details mb-1">
                                    <h5 class="ft-medium fs-md">Kỹ năng</h5>
                                    <ul class="p-0 skills_tag text-left">
                                        @foreach ($job->getskill as $item)
                                            <li><span
                                                    class="px-2 py-1 medium skill-bg rounded text-dark">{{ $item->name }}</span>
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>

                            </div>

                            <div class="jbd-02 px-3 py-3 br-top">
                                <div class="jbd-02-flex d-flex align-items-center justify-content-between">
                                    <div class="jbd-02-social">
                                        <ul class="jbd-social">
                                            <li><i class="ti-sharethis"></i></li>
                                            <li><a href="javascript:void(0);"><i class="ti-facebook"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="ti-twitter"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="ti-linkedin"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="ti-instagram"></i></a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Sidebar -->
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <div class="jb-apply-form bg-white rounded py-3 px-4 box-static">
                            <div class="box-keyword-job">
                                <h3>Ngành nghề</h3>
                                <div class="keyword">
                                    <span>
                                        <a href="{{ route('home.search.majors', [$getMajors, $job->getMajors->id]) }}"
                                            class="btn btn-sm btn-default text-dark-gray" target="_blank"
                                            title="Tìm việc làm {{ $job->getMajors->name }}"
                                            style="background-color: #fafafa; font-weight: normal; border-color: #dfdfdf; margin-top: 5px;">{{ $job->getMajors->name }}</a>
                                    </span>
                                </div>
                                <h3>Khu vực</h3>
                                <div class="area">
                                    <span><a class="btn btn-sm btn-default text-dark-gray"
                                            style="background-color: #fafafa; font-weight: normal; border-color: #dfdfdf; margin-top: 5px;"
                                            href="{{ route('home.search.location', [$location, $job->getlocation->id]) }}"
                                            target="_blank"
                                            title="Tìm việc làm it tại {{ $job->getlocation->name }}">{{ $job->getlocation->name }}</a></span>

                                </div>
                                <div class="area">
                                    <div>
                                        <img src="assets/img/logo.png" alt="">
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- ============================ Job Details End ================================== -->

        <!-- ======================= Related Jobs ======================== -->
        <section class="space min container-company-detai mb-3">
            <div class="container container-detai pt-3 pb-2">
                <div class="box-title">
                    <h2 class="box-name"><span style="margin-left: 5px !important">{{ $jobCompany[0]->name }}</span></h2>
                    <a href="https://www.topcv.vn/cong-ty/cong-ty-cp-duoc-pham-tin-phong/48787.html" target="_blank"
                        class="box-link">Xem
                        trang công ty <i class="fas fa-chevron-right"></i></a>
                </div>
                <div class="box-info">
                    <div class="box-item">
                        <div class="dro_141 de icon-item"><i class="fa fa-business-time"></i></div>
                        <div>
                            <p class="title">Giới thiệu</p>
                            <span class="content">
                                <p>{!! $jobCompany[0]->desceibe !!}
                                </p>

                                <p>
                                </p>
                                <p>
                                </p>
                                <p>
                                </p>
                                <p>
                                </p>
                            </span>
                        </div>
                    </div>
                    <div class="box-item">

                        <div class="dro_141 de"><i class="fa fa-user-shield"></i></div>
                        <div>
                            <p class="title" style="margin-bottom: 0">Quy mô</p>
                            <span class="content">{{ $jobCompany[0]->number_tax }}</span>
                        </div>
                    </div>
                    <div class="box-item">
                        <div class="dro_141 de"><i class="fa fa-map-marker"></i></div>
                        <div>
                            <p class="title" style="margin-bottom: 0">Địa điểm</p>
                            <span class="content">{{ $jobCompany[0]->address }}</span>
                        </div>
                    </div>
                    <div class="box-job-company pb-10">
                        <div class="box-title">
                            <h2 class="box-name"> <span style="margin-left: 5px !important;">Việc làm cùng công
                                    ty</span></h2>
                            <a href="" target="_blank" style="margin-top: 5px">Xem nhiều hơn <i
                                    class="fas fa-chevron-right"></i></a>
                        </div>
                        <div class="row justify-content-center">
                            <div class="container">
                                <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
                                    @foreach ($jobCompany as $item)
                                        <div class="col">
                                            <div class="p-3 bg-light box-showdow-company">
                                                <div class="position-absolute ab-right"><button type="button"
                                                        class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray"
                                                        title="123123213"><i
                                                            class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></button>
                                                </div>
                                                <div class="row">
                                                    <div
                                                        class="job_grid_caption title-name px-3 col-8 g-1 text-name-company">
                                                        <h4 class="mb-0 ft-medium medium ml-20"><a
                                                                href="{{ route('home.detail.show', [$item->title, $item->id]) }}"
                                                                class="text-dark fs-md " data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title="Tooltip on top">
                                                                <p style="width: 200px !important; overflow: hidden !important;text-overflow: ellipsis !important; white-space: nowrap;"
                                                                    title="{{ $item->title }}">
                                                                    {{ $item->title }}</p>
                                                            </a></h4>

                                                        <div class="jbl_location ml-20" style="margin-top: -10px"><a
                                                                href="" class="text-dark fs-md"><i
                                                                    class="lni lni-map-marker mr-1"></i>{{ $item->getlocation->name }}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="job_grid_footer d-flex">
                                                    <div class="df-1  text-wage-company"><i
                                                            class="lni lni-wallet mr-1"></i>{{ $item->getWage->name }}
                                                    </div>
                                                    <div class="df-1  ml-2 text-wage-company text-time"><i
                                                            class="lni lni-timer mr-1"></i>còn 10 ngày
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <div class="space min container-relate container container-detai p-3" id="tab-job">
            <div class="box-job-similar  box-white">
                <h2 class="box-name"> <span style="margin-left: 5px !important;">Việc làm liên quan</span> </h2>
                <div class="box-content">
                    <div class="job-body row">
                        <div class="col-md-9">
                            <div id="box-relate-jobs" class="box_general">
                                <div class="" id="relate-jobs">
                                    @foreach ($rules as $item)
                                        <div class="job_grid d-block border rounded px-3 pt-3 pb-2">
                                            <div class="jb-list01-flex d-flex align-items-start justify-content-start">
                                                <div class="jb-list01-thumb">
                                                    <img src="{{ asset($item->logo) }}" class="img-fluid circle"
                                                        width="90" alt="">
                                                </div>

                                                <div class="jb-list01 pl-3">
                                                    <div class="jb-list-01-title">
                                                        <h5 class="ft-medium mb-1"><a
                                                                href="{{ route('home.detail.show', [$item->title, $item->id]) }}">{{ $item->title }}<img
                                                                    src="assets/img/verify.svg" class="ml-1"
                                                                    width="12" alt=""></a></h5>
                                                    </div>
                                                    <div class="jb-list-01-info d-block mb-3">
                                                        <span class="text-muted mr-2"><i
                                                                class="lni lni-map-marker mr-1"></i>{{ $item->getlocation->name }}</span>
                                                        <span class="text-muted mr-2"><i
                                                                class="lni lni-tag mr-1"></i>{{ $item->getprofession->name }}</span>
                                                        <span class="text-muted mr-2"><i
                                                                class="lni lni-briefcase mr-1"></i>{{ $item->getTime_work->name }}</span>
                                                        <span class="text-muted mr-2"><i
                                                                class="lni lni-graduation mr-1"></i>{{ $item->getExperience->name }}</span>
                                                    </div>
                                                    <div class="jb-list-01-title d-inline">
                                                        @foreach ($item->getskill as $item)
                                                            <span
                                                                class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded theme-cl theme-bg-light">{{ $item->name }}</span>
                                                        @endforeach

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach



                                    {{-- <div data-job-id="895139"
                                        data-jr-id="job-graph-v2::1672847954248-7a12fd::e3defc0a91aa4575bf55a81d0bd46a1c::15"
                                        data-job-position="15" class="job-item job-ta result-job-hover">
                                        <div class="avatar"><a
                                                href="https://www.topcv.vn/viec-lam/lap-trinh-vien-php-wordpress/895139.html?ta_source=SuggestSimilarJob&amp;jr_i=job-graph-v2%3A%3A1672847954248-7a12fd%3A%3Ae3defc0a91aa4575bf55a81d0bd46a1c%3A%3A15"
                                                target="_blank" lass="company-logo"><img loading="lazy"
                                                    src="https://www.topcv.vn/v4/image/topcv-logo-company-default.png"
                                                    alt="Công ty Cổ phần Công nghệ Phần mềm Tinh Vân"
                                                    title="Lập Trình Viên PHP (Wordpress)" class="w-100"></a></div>
                                        <div class="body">
                                            <div class="content">
                                                <div class="ml-auto">
                                                    <h3 class="title">
                                                        <!----> <a target="_blank"
                                                            href="https://www.topcv.vn/viec-lam/lap-trinh-vien-php-wordpress/895139.html?ta_source=SuggestSimilarJob&amp;jr_i=job-graph-v2%3A%3A1672847954248-7a12fd%3A%3Ae3defc0a91aa4575bf55a81d0bd46a1c%3A%3A15"
                                                            class="underline-box-job"><span data-toggle="tooltip"
                                                                title="" data-placement="top" data-container="body"
                                                                class="bold transform-job-title"
                                                                data-original-title="Lập Trình Viên PHP (Wordpress)">Lập
                                                                Trình Viên PHP (Wordpress)</span> <span
                                                                class="icon-verified-employer level-five"><i
                                                                    data-toggle="tooltip" data-html="true" title=""
                                                                    data-placement="top" class="fa-solid fa-circle-check"
                                                                    data-original-title="
                                                            <b>Nhà tuyển dụng</b><span> đã được xác thực:</span><br>
                                                            <span><i class='fa-solid fa-circle-check color-green'></i> Đã xác thực email tên miền công ty</span><br>
                                                            <span><i class='fa-solid fa-circle-check color-green'></i> Đã xác thực số điện thoại</span><br>
                                                            <span><i class='fa-solid fa-circle-check color-green'></i> Đã được duyệt Giấy phép kinh doanh</span><br>
                                                            <span><i class='fa-solid fa-circle-check color-green'></i> Tài khoản NTD được tạo tối thiểu 6 tháng</span><br>
                                                            <span><i class='fa-solid fa-circle-check color-green'></i> Chưa có lịch sử bị báo cáo tin đăng</span><br>"></i></span></a>
                                                    </h3>
                                                    <p class="company underline-box-job"><a
                                                            href="https://www.topcv.vn/cong-ty/cong-ty-co-phan-cong-nghe-phan-mem-tinh-van/102136.html"
                                                            data-toggle="tooltip" title="" data-placement="top"
                                                            data-container="body" target="_blank"
                                                            data-original-title="Công ty Cổ phần Công nghệ Phần mềm Tinh Vân">Công
                                                            ty Cổ phần Công nghệ Phần mềm Tinh Vân</a></p>
                                                </div>
                                                <div class="mr-auto text-right">
                                                    <p class="deadline">Còn <b>14</b> ngày để ứng tuyển</p>
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="label-content ml-auto"><label class="salary">15-25
                                                        triệu</label> <label data-toggle="tooltip" data-html="true"
                                                        title="" data-placement="top" data-container="body"
                                                        class="address"
                                                        data-original-title="<p style='text-align: left'>Hồ Chí Minh: Quận 1</p>">Hồ
                                                        Chí Minh</label> <label class="time">2 tuần trước</label></div>
                                                <div class="icon mr-auto">
                                                    <div id="box-save-job-895139"
                                                        class="box-save-job box-save-job-hover job-notsave"><a
                                                            href="javascript:void(0)" data-id="895139"
                                                            data-title="Lập Trình Viên PHP (Wordpress)"
                                                            class="btn-save save"><span id="save-job-loading"
                                                                style="display: none;"><img
                                                                    src="https://www.topcv.vn/v3/images/ap-loading.gif"
                                                                    style="width: 20px;"></span> <i
                                                                class="fa-light fa-heart"></i></a> <a
                                                            href="javascript:void(0)" data-toggle="tooltip"
                                                            title="" data-id="895139"
                                                            data-title="Lập Trình Viên PHP (Wordpress)"
                                                            data-placement="top" data-container="body"
                                                            class="btn-unsave unsave text-highlight"
                                                            data-original-title="Bỏ lưu"><span id="unsave-job-loading"
                                                                style="display: none;"><img
                                                                    src="https://www.topcv.vn/v3/images/ap-loading.gif"
                                                                    style="width: 20px;"></span> <i
                                                                class="fa-solid fa-heart"></i></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}




                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 right-box">
                            <div class="interested">
                                <div class="box box-white box-no-padding" id="company-spotlight">

                                    <div class="spotlight-company">
                                        <div class="spotlight-image">

                                            <div class="spotlight-cover-wraper">

                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.863855881457!2d105.74459841535469!3d21.038132792833228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b991d80fd5%3A0x53cefc99d6b0bf6f!2sFPT%20Polytechnic%20Hanoi!5e0!3m2!1sen!2s!4v1672850305456!5m2!1sen!2s"
                                                    width="300px" height="300px" style="border:0;" allowfullscreen=""
                                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                                                    class="spotlight-cover"></iframe>
                                            </div>

                                        </div>


                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Log In Modal -->
        <div class="modal fade" id="exampleModallogin" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Đăng nhập</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <client-login
                            :data="{{ json_encode([
                                'urlStore' => route('owner.store'),
                                'urlRegister' => route('owner.update.register'),
                                'message' => $message ?? '',
                            ]) }}">
                            <client-login>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal -->

        <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ứng Tuyền {{ $job->title }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">x</span>
                        </button>
                    </div>
                    <up-cv
                        :data="{{ json_encode([
                            'checkLogin' => Auth::guard('user')->check(),
                            'cv' => $cv,
                            'urlStore' => route('home.detail.upcv'),
                            'urlStoreCv' => route('quan-ly-cv.create'),
                            'jobId' => $job->id,
                            'checkUser' => $profileUser,
                            'seeker' => $seeker,
                        ]) }}">
                    </up-cv>
                </div>
            </div>
        </div>
    </div>
@endsection
