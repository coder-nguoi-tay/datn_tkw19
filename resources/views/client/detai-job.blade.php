@php
    use Carbon\Carbon;
@endphp
@extends('client.layout.index')
@section('client')
    <div id="main-wrapper">

        <!-- ============================================================== -->
        <!-- Top header  -->
        <!-- ============================================================== -->
        <!-- Start Navigation -->
        <!-- End Navigation -->
        <div class="clearfix"></div>
        <!-- ============================================================== -->
        <!-- Top header  -->
        {{-- {{ dd($rules) }} --}}
        <!-- ============================================================== -->
        <!-- ======================= Searchbar Banner ======================== -->
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
        <!-- ======================= Searchbar Banner ======================== --
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           <!-- ============================ Job Details Start ================================== -->
        <section class="bg-light py-5 position-relative">
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
                                    <div class="jbl_button mb-2"><a href="javascript:void(0);"
                                            class="btn rounded theme-bg-light theme-cl fs-sm ft-medium">Nộp đơn</a>
                                    </div>
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
                                                class="btn btn-md rounded theme-bg text-light fs-sm ft-medium">Nộp đơn</a>
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
        <section class="space min">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="sec_title position-relative text-center">
                            <h2 class="ft-bold">Việc làm liên quan</h2>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="review-slide px-3 space gray" style="padding: 30px">
                            {{--  --}}
                            @foreach ($rules as $item)
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="job_grid border rounded ">
                                        <div class="position-absolute ab-left"><button type="button"
                                                class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray"><i
                                                    class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></button>
                                        </div>
                                        <div class="position-absolute ab-right"><span
                                                class="medium theme-cl theme-bg-light px-2 py-1 rounded">{{ $item[0]->getTime_work->name }}</span>
                                        </div>
                                        <div class="job_grid_thumb mb-2 pt-5 px-3">
                                            <a href="job-detail.html" class="d-block text-center m-auto"><img
                                                    src="{{ $item[0]->logo }}" class="img-fluid" width="70"
                                                    alt="" /></a>
                                        </div>
                                        <div class="job_grid_caption text-center pb-3 px-3">
                                            <h4 class="mb-0 ft-medium medium"><a
                                                    href="{{ route('home.detail.show', [$item[0]->title, $item[0]->id]) }}"
                                                    class="text-dark fs-md">{{ $item[0]->title }}</a></h4>
                                            <div class="jbl_location"><i
                                                    class="lni lni-map-marker mr-1"></i><span>{{ $item[0]->getlocation->name }}</span>
                                            </div>
                                        </div>
                                        <div class="job_grid_footer pb-4 px-3">

                                            <ul class="p-0 skills_tag text-center">
                                                @foreach ($item[0]->getskill as $value)
                                                    <li><span
                                                            class="px-2 py-1 medium skill-bg rounded text-dark">{{ $value->name }}</span>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div
                                            class="job_grid_footer pb-4 px-3 d-flex align-items-center justify-content-between">
                                            <div class="df-1 text-muted"><i
                                                    class="lni lni-wallet mr-1"></i>{{ $item[0]->getWage->name }}
                                            </div>
                                            <div class="df-1 text-muted"><i
                                                    class="lni lni-timer mr-1"></i>{{ Carbon::parse($item[0]->end_job_time)->format('d/m/Y') }}

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- row -->

            </div>
        </section>
        <section class="space min">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="sec_title position-relative text-center">
                            <h2 class="ft-bold">Việc làm cùng công ty</h2>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="review-slide px-3 space gray" style="padding: 30px">

                            <!-- single review -->
                            @foreach ($jobCompany as $item)
                                <div class="col-xl-3  col-md-6 col-sm-12">
                                    <div class="job_grid border rounded ">
                                        <div class="position-absolute ab-left"><button type="button"
                                                class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray"><i
                                                    class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></button>
                                        </div>
                                        <div class="position-absolute ab-right"><span
                                                class="medium bg-light-danger text-danger px-2 py-1 rounded">{{ $item->getTime_work->name }}</span>
                                        </div>
                                        <div class="job_grid_thumb mb-3 pt-5 px-3">
                                            <a href="" class="d-block text-center m-auto"><img
                                                    src="{{ $item->logo }}" class="img-fluid" width="70"
                                                    alt="" /></a>
                                        </div>
                                        <div class="job_grid_caption text-center pb-5 px-3">
                                            {{-- <h6 class="mb-0 lh-1 ft-medium medium"><a href="employer-detail.html"
                                                    class="text-muted medium">Google Inc</a></h6> --}}
                                            <h4 class="mb-0 ft-medium medium"><a
                                                    href="{{ route('home.detail.show', [$item->title, $item->id]) }}"
                                                    class="text-dark fs-md">{{ $item->title }}</a></h4>
                                            <div class="jbl_location"><i
                                                    class="lni lni-map-marker mr-1"></i><span>{{ $item->getlocation->name }}</span>
                                            </div>
                                        </div>
                                        <div
                                            class="job_grid_footer pb-4 px-3 d-flex align-items-center justify-content-between">
                                            <div class="df-1 text-muted"><i
                                                    class="lni lni-wallet mr-1"></i>{{ $item->getWage->name }}
                                            </div>
                                            <div class="df-1 text-muted"><i
                                                    class="lni lni-timer mr-1"></i>{{ Carbon::parse($item->end_job_time)->format('d/m/y') }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <!-- single review -->

                        </div>
                    </div>
                </div>
                <!-- row -->

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
        <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginmodal"
            aria-hidden="true">
            <div class="modal-dialog modal-xl login-pop-form" role="document">
                <div class="modal-content" id="loginmodal">
                    <div class="modal-headers">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="ti-close"></span>
                        </button>
                    </div>

                    <div class="modal-body p-5">
                        <div class="text-center mb-4">
                            <h2 class="m-0 ft-regular">Login</h2>
                        </div>

                        <form>
                            <div class="form-group">
                                <label>User Name</label>
                                <input type="text" class="form-control" placeholder="Username*">
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Password*">
                            </div>

                            <div class="form-group">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="flex-1">
                                        <input id="dd" class="checkbox-custom" name="dd" type="checkbox">
                                        <label for="dd" class="checkbox-custom-label">Remember Me</label>
                                    </div>
                                    <div class="eltio_k2">
                                        <a href="#" class="theme-cl">Lost Your Password?</a>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit"
                                    class="btn btn-md full-width theme-bg text-light fs-md ft-medium">Login</button>
                            </div>

                            <div class="form-group text-center mb-0">
                                <p class="extra">Not a member?<a href="#et-register-wrap" class="text-dark">
                                        Register</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal -->

        <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>


    </div>
@endsection
