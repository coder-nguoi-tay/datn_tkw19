@php
    use Carbon\Carbon;
@endphp
@extends('client.layout.index')
@section('client')

    <body>
        <div class="home-banner margin-bottom-0" style="background:#00ab46 url('banner-bg.jpg')" data-overlay="5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="container">
                            <div class="col-lg-12">
                                <form id="search-form" action="{{ route('home.search') }}" name="gs" method="submit"
                                    role="search">
                                    <div class="row">
                                        <div class="col-lg-3 align-self-center">
                                            <fieldset>
                                                <input type="address" name="key" class="searchText"
                                                    placeholder="Tìm Kiêm..." autocomplete="on">
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
                                                    @foreach ($location as $item)
                                                        <option value="{{ $item->id }}">
                                                            {{ $item->label }}</option>
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
                </div>
            </div>
        </div>
        <section class="middle space gray">
            <div class="container bg-white">
                <div class="container container-header-box border ">
                    <h1 class="header-box">Tìm việc làm nhanh 24h, việc làm mới nhất trên toàn quốc</h1>
                    <p class="header-box-description">Tiếp cận 30,000+ tin tuyển dụng việc làm mới mỗi ngày từ hàng nghìn
                        doanh nghiệp uy tín tại Việt Nam</p>
                    @if (!Auth::guard('user')->check())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Hệ thống mong muốn bạn đăng nhập để có thể
                            hiển thị các việc làm phù hợp nhất!, <strong><a href="#" class="show-turn-on-location"
                                    data-toggle="modal" data-target="#exampleModallogin">Đăng
                                    nhập tại đây!</a></strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">X</span>
                            </button>
                        </div>
                    @endif

                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        Hãy báo cáo cho tôi nếu bạn gặp phải sự cố hoặc bạn phát hiện ai đó có hành vi lừa đảo!, <strong><a
                                href="{{ route('index') }}" class="show-turn-on-location">Liên hệ!</a></strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">X</span>
                        </button>
                    </div>
                </div>
                <div class="search-book">
                    <h2 class="ft-bold">Tin tuyển dụng, việc làm tốt nhất</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="container p-3">

                        <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3" id="paginated-list">
                            @foreach ($job as $value)
                                <div class="col-3 render-job-search">
                                    <div class="p-3 border bg-light box-showdow">
                                        <div class="position-absolute ab-right">
                                            <a type="button"
                                                class="
                                            p-3
                                            border
                                            circle
                                            d-flex
                                            align-items-center
                                            justify-content-center
                                            bg-white
                                            text-gray
                                            ">
                                                <i
                                                    class="
                                            lni lni-heart-filled
                                            position-absolute
                                            snackbar-wishlist
                                        "></i>
                                            </a>
                                        </div>
                                        <div class="row">
                                            <div class="job_grid_thumb mb-3 title-name px-3 col-4">
                                                <a href="home/detail/{{ $value->title . '-' . $value->id }}"
                                                    class="d-block m-auto" style="width: 68px; height: 68px;">
                                                    <img src="{{ $value->logo }}" class="img-fluid" alt="" /></a>
                                            </div>
                                            <div class="job_grid_caption title-name px-3 col-8 g-1">
                                                <h4 class="mb-0 ft-medium medium ml-20">
                                                    <a href="home/detail/{{ $value->title . '-' . $value->id }}"
                                                        class="text-dark fs-md" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Tooltip on top">
                                                        <p
                                                            style="width: 200px !important;overflow: hidden !important;text-overflow: ellipsis !important;white-space: nowrap">
                                                            {{ $value->title }}
                                                        </p>
                                                    </a>
                                                </h4>

                                                <div class="jbl_location ml-20" style="margin-top: -10px">
                                                    <a href="" class="text-dark fs-md"> {{ $value->nameCompany }}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="job_grid_footer d-flex align-items-center justify-content-between text-mute-footer">
                                            <div class="df-1 text-muted">
                                                <i class="lni lni-wallet mr-1"></i>{{ $value->getwage->name }}
                                            </div>
                                            <div class="df-1 text-muted ml-2">
                                                <i class="lni lni-timer mr-1"></i>{{ $value->end_job_time }}
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
                <!-- end -->
            </div>
        </section>
        <section class="middle space gray">
            <div class="container-xxl p-0 bg-white text-dark">
                <!-- Item Wrap Start -->
                <div class="col-lg-12 p-0">
                    <!-- row -->
                    <div class="p-1 pl-3 mb-2 alert alert-secondary rounded">
                        <h2 class="ft-bold">Tất cả việc làm</h2>
                    </div>
                    <div class="row justify-content-center">
                        <!-- Single -->
                        <div class="row justify-content-center">
                            <div class="container p-3">
                                <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3" id="paginated-list">
                                    @foreach ($jobAttractive as $value)
                                        <div class="col-3 render-job-search">
                                            <div class="p-3 border bg-light box-showdow">
                                                <div class="position-absolute ab-right"><a type="button"
                                                        class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray"><i
                                                            class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></a>
                                                </div>
                                                <div class="row" style="height: 80px;">
                                                    <div class="job_grid_thumb mb-3 title-name px-3 col-4"><a
                                                            href="home/detail/Tuyển FPT-1" class="d-block m-auto"
                                                            style="width: 68px; height: 68px;"><img
                                                                src="images/cv/TTa7yGhFlC7j878HvIYIbEMHzID5Jrbka0f90HiN.jpg"
                                                                class="img-rounded" alt="" style=""></a>
                                                    </div>
                                                    <div class="job_grid_caption title-name px-3 col-8 g-1">
                                                        <h4 class="mb-0 ft-medium medium ml-20"><a
                                                                href="home/detail/{{ $value->title . '-' . $value->id }}"
                                                                class="text-dark fs-md" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title="Tooltip on top">
                                                                <p
                                                                    style="width: 200px !important; overflow: hidden !important; text-overflow: ellipsis !important; white-space: nowrap;">
                                                                    {{ $value->title }}</p>
                                                            </a></h4>
                                                        <div class="jbl_location ml-20" style="margin-top: -10px;"><a
                                                                href=""
                                                                class="text-dark fs-md">{{ $value->nameCompany }}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="job_grid_footer d-flex align-items-center justify-content-between text-mute-footer">
                                                    <div class="df-1 text-muted"><i
                                                            class="lni lni-wallet mr-1"></i>{{ $value->getwage->name }}
                                                    </div>
                                                    <div class="df-1 text-muted ml-2"><i
                                                            class="lni lni-timer mr-1"></i>{{ $value->end_job_time }}
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
                    </div><!-- row -->
                </div>
            </div>
        </section>
        @if (Auth::guard('user')->check())
            @if (!$user->getProfileUse == null)
                <section class="middle space gray">
                    <div class="container-xxl p-0 bg-white text-dark">
                        <!-- Item Wrap Start -->
                        <div class="col-lg-12 p-0">
                            <!-- row -->
                            <div class="p-1 pl-3 mb-2 alert alert-secondary rounded">
                                <h2 class="ft-bold">Việc làm phù hợp với bạn</h2>
                            </div>
                            <div class="row justify-content-center">
                                <!-- Single -->
                                <div class="row justify-content-center">
                                    <div class="container p-3">
                                        <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3" id="paginated-list">
                                            @foreach ($jobForUser as $value)
                                                <div class="col-3 render-job-search">
                                                    <div class="p-3 border bg-light box-showdow">
                                                        <div class="position-absolute ab-right"><a type="button"
                                                                class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray"><i
                                                                    class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></a>
                                                        </div>
                                                        <div class="row" style="height: 80px;">
                                                            <div class="job_grid_thumb mb-3 title-name px-3 col-4"><a
                                                                    href="home/detail/Tuyển FPT-1" class="d-block m-auto"
                                                                    style="width: 68px; height: 68px;"><img
                                                                        src="images/cv/TTa7yGhFlC7j878HvIYIbEMHzID5Jrbka0f90HiN.jpg"
                                                                        class="img-rounded" alt=""
                                                                        style=""></a></div>
                                                            <div class="job_grid_caption title-name px-3 col-8 g-1">
                                                                <h4 class="mb-0 ft-medium medium ml-20"><a
                                                                        href="home/detail/{{ $value->title . '-' . $value->id }}"
                                                                        class="text-dark fs-md" data-bs-toggle="tooltip"
                                                                        data-bs-placement="top" title="Tooltip on top">
                                                                        <p
                                                                            style="width: 200px !important; overflow: hidden !important; text-overflow: ellipsis !important; white-space: nowrap;">
                                                                            {{ $value->title }}</p>
                                                                    </a></h4>
                                                                <div class="jbl_location ml-20"
                                                                    style="margin-top: -10px;"><a href=""
                                                                        class="text-dark fs-md">{{ $value->nameCompany }}</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="job_grid_footer d-flex align-items-center justify-content-between text-mute-footer">
                                                            <div class="df-1 text-muted"><i
                                                                    class="lni lni-wallet mr-1"></i>{{ $value->getwage->name }}
                                                            </div>
                                                            <div class="df-1 text-muted ml-2"><i
                                                                    class="lni lni-timer mr-1"></i>{{ $value->end_job_time }}
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
                            </div><!-- row -->
                        </div>
                    </div>
                </section>
            @endif
        @endif


        <section class="space gray">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="sec_title position-relative text-center mb-5">
                            <h2 class="ft-bold">Ngành Nghề Trọng Điểm</h2>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <div class="row justify-content-center">

                    <div class="page-white-100">
                        <div id="box-discover">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <div class="review-slide px-3">
                                    <!-- single review -->
                                    <div class="single_review px-2">
                                        <div class="reviews_wrap position-relative bg-white rounded py-4 px-4">
                                            <div class="col-xl-12">

                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512 "
                                                    class="ic-1 ">
                                                    <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                                                    <path
                                                        d="M255.03 261.65c6.25 6.25 16.38 6.25 22.63 0l11.31-11.31c6.25-6.25 6.25-16.38 0-22.63L253.25 192l35.71-35.72c6.25-6.25 6.25-16.38 0-22.63l-11.31-11.31c-6.25-6.25-16.38-6.25-22.63 0l-58.34 58.34c-6.25 6.25-6.25 16.38 0 22.63l58.35 58.34zm96.01-11.3l11.31 11.31c6.25 6.25 16.38 6.25 22.63 0l58.34-58.34c6.25-6.25 6.25-16.38 0-22.63l-58.34-58.34c-6.25-6.25-16.38-6.25-22.63 0l-11.31 11.31c-6.25 6.25-6.25 16.38 0 22.63L386.75 192l-35.71 35.72c-6.25 6.25-6.25 16.38 0 22.63zM624 416H381.54c-.74 19.81-14.71 32-32.74 32H288c-18.69 0-33.02-17.47-32.77-32H16c-8.8 0-16 7.2-16 16v16c0 35.2 28.8 64 64 64h512c35.2 0 64-28.8 64-64v-16c0-8.8-7.2-16-16-16zM576 48c0-26.4-21.6-48-48-48H112C85.6 0 64 21.6 64 48v336h512V48zm-64 272H128V64h384v256z" />
                                                </svg>
                                            </div>
                                            <br>
                                            <div class="col-xl-12">
                                                <h4 class="title-company">IT-PHẦN MỀM
                                                </h4>
                                                <p class="number-job">600 Việc làm
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- single review -->
                                    <div class="single_review px-2">
                                        <div class="reviews_wrap position-relative bg-white rounded py-4 px-4">
                                            <div class="col-xl-12">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                                                    class="ic-1 ">
                                                    <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                                                    <path
                                                        d="M539.71 237.308c3.064-12.257 4.29-24.821 4.29-37.384C544 107.382 468.618 32 376.076 32c-77.22 0-144.634 53.012-163.02 127.781-15.322-13.176-34.934-20.53-55.157-20.53-46.271 0-83.962 37.69-83.962 83.961 0 7.354.92 15.015 3.065 22.369-42.9 20.225-70.785 63.738-70.785 111.234C6.216 424.843 61.68 480 129.401 480h381.198c67.72 0 123.184-55.157 123.184-123.184.001-56.384-38.916-106.025-94.073-119.508zM199.88 401.554c0 8.274-7.048 15.321-15.321 15.321H153.61c-8.274 0-15.321-7.048-15.321-15.321V290.626c0-8.273 7.048-15.321 15.321-15.321h30.949c8.274 0 15.321 7.048 15.321 15.321v110.928zm89.477 0c0 8.274-7.048 15.321-15.322 15.321h-30.949c-8.274 0-15.321-7.048-15.321-15.321V270.096c0-8.274 7.048-15.321 15.321-15.321h30.949c8.274 0 15.322 7.048 15.322 15.321v131.458zm89.477 0c0 8.274-7.047 15.321-15.321 15.321h-30.949c-8.274 0-15.322-7.048-15.322-15.321V238.84c0-8.274 7.048-15.321 15.322-15.321h30.949c8.274 0 15.321 7.048 15.321 15.321v162.714zm87.027 0c0 8.274-7.048 15.321-15.322 15.321h-28.497c-8.274 0-15.321-7.048-15.321-15.321V176.941c0-8.579 7.047-15.628 15.321-15.628h28.497c8.274 0 15.322 7.048 15.322 15.628v224.613z" />
                                                </svg>

                                            </div>
                                            <br>
                                            <div class="col-xl-12">
                                                <h4 class="title-company">BÁN HÀNG
                                                </h4>
                                                <p class="number-job">600 Việc làm
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single review -->
                                    <div class="single_review px-2">
                                        <div class="reviews_wrap position-relative bg-white rounded py-4 px-4">
                                            <div class="col-xl-12">

                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                    class="ic-1 ">
                                                    <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                                                    <path
                                                        d="M560 224h-29.5c-8.8-20-21.6-37.7-37.4-52.5L512 96h-32c-29.4 0-55.4 13.5-73 34.3-7.6-1.1-15.1-2.3-23-2.3H256c-77.4 0-141.9 55-156.8 128H56c-14.8 0-26.5-13.5-23.5-28.8C34.7 215.8 45.4 208 57 208h1c3.3 0 6-2.7 6-6v-20c0-3.3-2.7-6-6-6-28.5 0-53.9 20.4-57.5 48.6C-3.9 258.8 22.7 288 56 288h40c0 52.2 25.4 98.1 64 127.3V496c0 8.8 7.2 16 16 16h64c8.8 0 16-7.2 16-16v-48h128v48c0 8.8 7.2 16 16 16h64c8.8 0 16-7.2 16-16v-80.7c11.8-8.9 22.3-19.4 31.3-31.3H560c8.8 0 16-7.2 16-16V240c0-8.8-7.2-16-16-16zm-128 64c-8.8 0-16-7.2-16-16s7.2-16 16-16 16 7.2 16 16-7.2 16-16 16zM256 96h128c5.4 0 10.7.4 15.9.8 0-.3.1-.5.1-.8 0-53-43-96-96-96s-96 43-96 96c0 2.1.5 4.1.6 6.2 15.2-3.9 31-6.2 47.4-6.2z" />
                                                </svg>
                                            </div>
                                            <br>
                                            <div class="col-xl-12">
                                                <h4 class="title-company">TÀI CHÍNH/ĐẦU TƯ
                                                </h4>
                                                <p class="number-job">600 Việc làm
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- single review -->
                                    <div class="single_review px-2">
                                        <div class="reviews_wrap position-relative bg-white rounded py-4 px-4">
                                            <div class="col-xl-12">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                    class="ic-1 ">
                                                    <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                                                    <path
                                                        d="M501.62 92.11L267.24 2.04a31.958 31.958 0 0 0-22.47 0L10.38 92.11A16.001 16.001 0 0 0 0 107.09V144c0 8.84 7.16 16 16 16h480c8.84 0 16-7.16 16-16v-36.91c0-6.67-4.14-12.64-10.38-14.98zM64 192v160H48c-8.84 0-16 7.16-16 16v48h448v-48c0-8.84-7.16-16-16-16h-16V192h-64v160h-96V192h-64v160h-96V192H64zm432 256H16c-8.84 0-16 7.16-16 16v32c0 8.84 7.16 16 16 16h480c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16z" />
                                                </svg>

                                            </div>
                                            <br>
                                            <div class="col-xl-12">
                                                <h4 class="title-company">NGÂN HÀNG
                                                </h4>
                                                <p class="number-job">600 Việc làm
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- single review -->
                                    <div class="single_review px-2">
                                        <div class="reviews_wrap position-relative bg-white rounded py-4 px-4">
                                            <div class="col-xl-12">


                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                    class="ic-1 ">
                                                    <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                                                    <path
                                                        d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM160 368c0 8.84-7.16 16-16 16h-32c-8.84 0-16-7.16-16-16V240c0-8.84 7.16-16 16-16h32c8.84 0 16 7.16 16 16v128zm96 0c0 8.84-7.16 16-16 16h-32c-8.84 0-16-7.16-16-16V144c0-8.84 7.16-16 16-16h32c8.84 0 16 7.16 16 16v224zm96 0c0 8.84-7.16 16-16 16h-32c-8.84 0-16-7.16-16-16v-64c0-8.84 7.16-16 16-16h32c8.84 0 16 7.16 16 16v64z" />
                                                </svg>
                                            </div>
                                            <br>
                                            <div class="col-xl-12">
                                                <h4 class="title-company">MARKETING
                                                </h4>
                                                <p class="number-job">600 Việc làm
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- ======================= Job List ======================== -->

        <!-- ======================= All category ======================== -->
        <section class="space gray">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="sec_title position-relative text-center mb-5">
                            <h2 class="ft-bold">Top Ngành Nghề nổi Bật</h2>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <div class="row justify-content-center">

                    <div class="page-white-100">
                        <div id="box-discover">
                            <div class="container">
                                <div class="list-discover">
                                    @foreach ($majors as $item)
                                        <div class="item">
                                            <div class="image">
                                                <img src="{{ $item->image_majors }}" alt="">
                                            </div>
                                            <div class="title">{{ $item->name }}</div>
                                            <p class="count">(<span class="number count_job_manager">2,682</span> việc
                                                làm)</p>
                                            <div>
                                                <a target="_blank" href="" class="see-more">Khám phá
                                                    ngay </a>
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
        <!-- ======================= Blog Start ============================ -->
        <section class="space min gray">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="sec_title position-relative text-center mb-4">
                            <h2 class="ft-bold">Tin Tức
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">

                    <!-- Single Item -->
                    @foreach ($new as $item)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                            <div class="blg_grid_box">
                                <div class="blg_grid_thumb">
                                    <a href="blog-detail.html"><img src="{{ $item->new_image }}"
                                            class="img-fluid w-75 rounded "
                                            style="display : block;
                                                   margin-left: auto;
                                                   margin-right: auto;
                                                   margin-top: 10px;"alt=""></a>
                                </div>
                                <div class="blg_grid_caption">
                                    <p class="theme-cl px-3 py-1 rounded bg-light-success d-inline-flex">
                                        {{ $item->majors }}
                                    </p>
                                    <div class="blg_title">
                                        <h4><a href="blog-detail.html">{{ $item->title }}</a></h4>
                                    </div>
                                    <div class="blg_desc  "
                                        style="
                                           max-height: 20px;
                                           overflow: hidden;
                                           text-overflow: ellipsis !important;
                                            ">
                                        <p>{{ $item->describe }}...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- ======================= Newsletter Start ============================ -->
        <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
        <!-- Button trigger modal -->
        <!-- Modal login -->
        <div class="modal fade" id="exampleModallogin" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Chào mừng bạn đến với ITWork</h5>
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
    </body>
    @if (Auth::guard('user')->check())
        @if ($user->getProfileUse == null)
            <div class="loading-div">
                <div class="loader-img"></div>
            </div>
            <div class="modal fade" id="checkmodalProfile" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title " id="exampleModalLabel"
                                style="margin-left: 15%; font-size: 24px; font-weight: 500">Vui lòng bổ sung các thông tin
                                dưới đây để hoàn tất đăng ký tài khoản
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">X</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <user-profile
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
                                    'user' => $user,
                                    'urlStore' => route('profile.store'),
                                    'urlBack' => route('profile.index'),
                                    'getskill' => $getskill,
                                ]) }}">
                            </user-profile>
                        </div>
                    </div>
                </div>
            </div>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    $("#checkmodalProfile").modal('show');
                });
            </script>
        @endif
    @endif
@endsection
