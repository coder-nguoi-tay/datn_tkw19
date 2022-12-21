@php
    use Carbon\Carbon;
@endphp
@extends('client.layout.index')
@section('client')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <div id="main-wrapper">
        <div class="clearfix"></div>

        <div class="py-5" style="background:#03343b url(assets/img/landing-bg.png) no-repeat;" data-overlay="0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12 col-12">
                        <div class="banner_caption text-center mb-2">
                            <h1 class="ft-bold mb-4">The Most Exciting Jobs</h1>
                        </div>

                        <form class="bg-white rounded p-1">
                            <div class="row no-gutters">
                                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">
                                    <div class="form-group mb-0 position-relative">
                                        <input type="text" class="form-control lg left-ico"
                                            placeholder="Job Title, Keyword or Company" />
                                        <i class="bnc-ico lni lni-search-alt"></i>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="form-group mb-0 position-relative">
                                        <input type="text" class="form-control lg left-ico"
                                            placeholder="Location or Zip Code" />
                                        <i class="bnc-ico lni lni-target"></i>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 col-12">
                                    <div class="form-group mb-0 position-relative">
                                        <button class="btn full-width custom-height-lg theme-bg text-white fs-md"
                                            type="button">Find Job</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
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
                                        <li class="breadcrumb-item"><a href="{{ route('home.index') }}"
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
                                    <div class="jbd-01-thumb">
                                        <img src="{{ $job->logo }}" class="img-fluid" width="90" alt="" />
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
                                    <p>{{ $job->describe }}</p>

                                </div>

                                <div class="jbd-details mb-3">
                                    <h5>Yêu cầu ứng viên</h5>
                                    <div class="position-relative row">
                                        <div class="col-lg-12 col-md-12 col-12">
                                            <div class="mb-2 mr-4 ml-lg-0 mr-lg-4">
                                                <div class="d-flex align-items-center">
                                                    <div
                                                        class="rounded-circle bg-light-success theme-cl p-1 small d-flex align-items-center justify-content-center">
                                                        <i class="fas fa-check small"></i>
                                                    </div>
                                                    <h6 class="mb-0 ml-3 text-muted fs-sm">
                                                        {{ $job->candidate_requirements }}</h6>
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
                                                    <div
                                                        class="rounded-circle bg-light-success theme-cl p-1 small d-flex align-items-center justify-content-center">
                                                        <i class="fas fa-check small"></i>
                                                    </div>
                                                    <h6 class="mb-0 ml-3 text-muted fs-sm">
                                                        {{ $job->candidate_requirements }}</h6>
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
                                    <div class="jbd-02-aply">
                                        <div class="jbl_button mb-2">
                                            <a href="#" class="btn btn-md rounded gray fs-sm ft-medium mr-2">lưu
                                                Job</a>
                                            <a href="#"
                                                class="btn btn-md rounded theme-bg text-light fs-sm ft-medium">Ứng tuyển
                                                ngay</a>
                                        </div>
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
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- ============================ Job Details End ================================== -->

        <!-- ======================= Related Jobs ======================== -->
        <section class="space min container-company-detai">
            <div class="container container-detai">
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
                                <p>Công ty Cổ phần Dược phẩm Tín Phong được thành lập ngày 09/09/2013 bởi đội ngũ giàu kinh
                                    nghiệm trong nghiên cứu và phân phối các sản phẩm thuốc uy tín cho thị trường Việt Nam.
                                    Với tầm nhìn dài hạn và quan điểm phát triển bền vững, TÍN PHONG tập trung gây dựng và
                                    kiến tạo hình ảnh một thương hiệu dược phẩm uy tín, lựa chọn tin cậy của mọi nhà. Bằng
                                    khát vọng vươn lên cùng chiến lược đầu tư – phát triển sáng tạo, TÍN PHONG phấn đấu trở
                                    thành công ty dược phẩm uy tín hàng đầu trong việc kinh doanh, phân phối sản phẩm dược
                                    và thực phẩm bảo vệ sức khỏe.
                                </p>
                                <p>TÍN PHONG mong muốn tạo nên một thương hiệu uy tín cho cộng đồng, trở thành niềm tin khi
                                    lựa chọn các sản phẩm chất lượng của người tiêu dùng, vì một cuộc sống khoẻ mạnh và phát
                                    triển toàn diện.
                                </p>
                                <p>TÍN PHONG tin rằng, niềm tin của khách hàng chính là thước đo cho thành công của doanh
                                    nghiệp. TÍN PHONG nỗ lực hết mình vì sự tín nhiệm của cộng đồng.
                                </p>
                                <p>Với triết lý kinh doanh đó, TÍN PHONG xây dựng những giá trị cốt lõi làm tôn chỉ xuyên
                                    suốt mọi hoạt động của công ty, cũng là lời hứa danh dự của người làm thuốc:
                                </p>
                                <p>TÍN - TÂM - NHÂN - ĐỨC</p>
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
                            <span class="content">100-499 nhân viên</span>
                        </div>
                    </div>
                    <div class="box-item">
                        <div class="dro_141 de"><i class="fa fa-map-marker"></i></div>
                        <div>
                            <p class="title" style="margin-bottom: 0">Địa điểm</p>
                            <span class="content">Lô B10/D6, KĐT Cầu Giấy, Dịch Vọng, Cầu Giấy, Hà Nội</span>
                        </div>
                    </div>
                    <div class="box-job-company">
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
                                            <div class="p-3  bg-light box-showdow-company">
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
        <section class="space min container-relate">
            <div class="row">
                <div class="col-8">
                    <div class="box-title">
                        <h2 class="box-name"><span style="margin-left: 5px !important">Việc làm liên quan</span></h2>
                        <a href="https://www.topcv.vn/cong-ty/cong-ty-cp-duoc-pham-tin-phong/48787.html" target="_blank"
                            class="box-link">Xem tất cả <i class="fas fa-chevron-right"></i></a>
                    </div>
                    @foreach ($rules as $item)
                        <div class="job_grid d-block border rounded px-3 pt-3 pb-2">
                            <div class="jb-list01-flex d-flex align-items-start justify-content-start">
                                <div class="jb-list01-thumb">
                                    <img src="{{ $item->logo }}" class="img-fluid circle" width="90"
                                        alt="">
                                </div>

                                <div class="jb-list01 pl-3">
                                    <div class="jb-list-01-title">
                                        <h5 class="ft-medium mb-1"><a
                                                href="{{ route('home.detail.show', [$item->title, $item->id]) }}">{{ $item->title }}<img
                                                    src="assets/img/verify.svg" class="ml-1" width="12"
                                                    alt=""></a></h5>
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
                </div>
                <div class="col-4">
                    <div class="bg-white rounded mb-4 box-text-search">
                        <div class="sidebar_header d-flex align-items-center justify-content-between px-4 py-3 br-bottom">
                            <h4 class="ft-medium fs-lg mb-0">Search Filter</h4>
                            <div class="ssh-header">
                                <a href="#search_open" data-toggle="collapse" aria-expanded="false" role="button"
                                    class="collapsed _filter-ico ml-2"><i class="lni lni-text-align-right"></i></a>
                            </div>
                        </div>

                        <!-- Find New Property -->
                        <div class="sidebar-widgets collapse miz_show" id="search_open" data-parent="#search_open">

                            <div class="search-inner">

                                <div class="filter-search-box px-4 pt-3 pb-0">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search by keywords...">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Location, Zip..">
                                    </div>
                                </div>

                                <div class="filter_wraps">

                                    <!-- Job categories Search -->
                                    <div class="single_search_boxed px-4 pt-0 br-bottom">
                                        <div class="widget-boxed-header">
                                            <h4>
                                                <a href="#categories" class="ft-medium fs-md pb-0" data-toggle="collapse"
                                                    aria-expanded="true" role="button">Job
                                                    Categories</a>
                                            </h4>

                                        </div>
                                        <div class="widget-boxed-body collapse show" id="categories"
                                            data-parent="#categories">
                                            <div class="side-list no-border">
                                                <!-- Single Filter Card -->
                                                <div class="single_filter_card">
                                                    <div class="card-body p-0">
                                                        <div class="inner_widget_link">
                                                            <ul class="no-ul-list filter-list">
                                                                <li>
                                                                    <input id="a1" class="checkbox-custom"
                                                                        name="ADA" type="checkbox" checked="">
                                                                    <label for="a1" class="checkbox-custom-label">IT
                                                                        Computers (62)</label>
                                                                    <ul class="no-ul-list filter-list">
                                                                        <li>
                                                                            <input id="aa1" class="checkbox-custom"
                                                                                name="ADA" type="checkbox">
                                                                            <label for="aa1"
                                                                                class="checkbox-custom-label">Web
                                                                                Design
                                                                                (31)</label>
                                                                        </li>
                                                                        <li>
                                                                            <input id="aa2" class="checkbox-custom"
                                                                                name="Parking" type="checkbox">
                                                                            <label for="aa2"
                                                                                class="checkbox-custom-label">Web
                                                                                development
                                                                                (20)</label>
                                                                        </li>
                                                                        <li>
                                                                            <input id="aa3" class="checkbox-custom"
                                                                                name="Coffee" type="checkbox">
                                                                            <label for="aa3"
                                                                                class="checkbox-custom-label">SEO
                                                                                Services
                                                                                (43)</label>
                                                                        </li>
                                                                    </ul>
                                                                </li>


                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group filter_button pt-2 pb-4 px-4">
                                    <button type="submit" class="btn btn-md theme-bg text-light rounded full-width">22
                                        Results Show</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- ======================= Related Jobs ======================== -->

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
                        ]) }}">
                    </up-cv>
                </div>
            </div>
        </div>
    </div>
@endsection
