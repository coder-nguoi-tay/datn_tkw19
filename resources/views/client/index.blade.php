@php
    use Carbon\Carbon;
@endphp

@extends('client.layout.index')
@section('client')
    <main class="main">
        <div data-elementor-type="wp-page" data-elementor-id="1341" class="elementor elementor-1341">
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-7931cbd7 elementor-section-full_width banner-hero hero-2 hero-3 elementor-section-height-default elementor-section-height-default"
                data-id="7931cbd7" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;slideshow&quot;,&quot;background_slideshow_gallery&quot;:[],&quot;background_slideshow_loop&quot;:&quot;yes&quot;,&quot;background_slideshow_slide_duration&quot;:5000,&quot;background_slideshow_slide_transition&quot;:&quot;fade&quot;,&quot;background_slideshow_transition_duration&quot;:500}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-556cdc8a"
                        data-id="556cdc8a" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-4989c9a3 banner-inner elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="4989c9a3" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-5ff9a4b1"
                                        data-id="5ff9a4b1" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-37d9d732 mb-0 elementor-widget elementor-widget-title"
                                                data-id="37d9d732" data-element_type="widget"
                                                data-widget_type="title.default">
                                                <div class="elementor-widget-container">
                                                    <h1
                                                        class="control-heading-title text-42 color-white wow animate__ animate__fadeInUp animated mb-0">
                                                        Trang tìm kiếm việc làm IT
                                                        <!-- <span class="color-green">cho Tuyển dụng hoặc</span> -->
                                                        <br class="d-none d-lg-block">
                                                        <span class="color-green">nhanh chóng</span>
                                                        và
                                                        <span class="color-green">hiệu quả</span>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-7b9da113 mb-0 elementor-widget elementor-widget-title"
                                                data-id="7b9da113" data-element_type="widget"
                                                data-widget_type="title.default">
                                                <div class="elementor-widget-container">
                                                    <div class="control-heading-title font-lg text-white mt-20">Mỗi tháng,
                                                        hơn 3 triệu người tìm việc truy cập trang web để tìm việc, thực hiện
                                                        hơn 140.000 đơn đăng ký mỗi ngày</div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-56e62b6d elementor-widget elementor-widget-template"
                                                data-id="56e62b6d" data-element_type="widget"
                                                data-widget_type="template.default">
                                                <div class="elementor-widget-container">

                                                    <div class="banner-hero p-0">
                                                        <div class="block-banner p-0">
                                                            <div class="form-find mt-40 wow animate__animated animate__fadeIn"
                                                                data-wow-delay=".2s">
                                                                <form method="get" action="{{ route('home.search') }}">

                                                                    <select class="form-input mr-10 select-active w-200"
                                                                        name="majors">
                                                                        <option value="">Chọn ngành nghề</option>
                                                                        @foreach ($majors as $item)
                                                                            <option value="{{ $item->id }}">
                                                                                {{ $item->name }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>

                                                                    <select class="form-input mr-10 select-active"
                                                                        name="location" id="location">
                                                                        <option value="">Chọn địa chỉ</option>
                                                                        @foreach ($location as $item)
                                                                            <option value="{{ $item->id }}">
                                                                                {{ $item->label }}</option>
                                                                        @endforeach
                                                                    </select>

                                                                    <input class="form-input input-keysearch mr-10"
                                                                        type="text" name="key" id="key"
                                                                        style="border: none;" placeholder="Nhập từ khóa" />

                                                                    <input class="btn btn-default btn-find font-sm"
                                                                        type="submit" value="Tìm kiếm">

                                                                </form>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-d98c6ff elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="d98c6ff" data-element_type="section">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1c22a67"
                        data-id="1c22a67" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-ed0a5e5 m-0 elementor-widget elementor-widget-title"
                                data-id="ed0a5e5" data-element_type="widget" data-widget_type="title.default">
                                <div class="elementor-widget-container">
                                    <h2 class="control-heading-title m-0">Tin tuyển dụng- việc làm tốt nhất</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-ce85727 m-0 elementor-widget elementor-widget-title"
                                data-id="ce85727" data-element_type="widget" data-widget_type="title.default">
                                <div class="elementor-widget-container">
                                    <p class="control-heading-title font-lg text-muted m-0">Tìm kiếm và kết nối với các ứng
                                        cử viên phù hợp nhanh hơn</p>
                                </div>
                            </div>
                            {{-- @dd($jobAttractive) --}}
                            <div class="elementor-element elementor-element-54a362e text-center elementor-widget elementor-widget-template"
                                data-id="54a362e" data-element_type="widget" data-widget_type="template.default">
                                <div class="elementor-widget-container">
                                    <div class="mt-10">
                                        <div class="tab-content" id="myTabContent-2">
                                            <div class="tab-pane fade show active" id="tab-content-writer" role="tabpanel"
                                                aria-labelledby="tab-content-writer">
                                                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 text-start"
                                                    id="paginated-list">
                                                    @foreach ($job as $item)
                                                        <div class="col render-job-search">
                                                            <div class="card-grid-2 grid-bd-16 hover-up">
                                                                <div class="card-block-info pt-25">
                                                                    <h6
                                                                        style=" display: -webkit-box;
                                                                                                     line-height: 1;
                                                                                                    -webkit-line-clamp: 1;
                                                                                                    -webkit-box-orient: vertical;
                                                                                                    overflow: hidden;
                                                                                                    text-overflow: ellipsis;">
                                                                        <a href="/home/detail/{{ $item->id }}"
                                                                            data-toggle="tooltip" title=""
                                                                            data-placement="top" data-container="body"
                                                                            data-original-title="{{ $item->nameCompany }}">{{ $item->title }}</a>
                                                                    </h6>
                                                                    <div
                                                                        class="d-flex flex-wrap gap-15 mt-5 border-bottom p-2">
                                                                        <span><i
                                                                                class="fi-rr-briefcase ms-0 me-5"></i>{{ $item->getTime_work->name }}</span>
                                                                        <span><i class="fi-rr-clock ms-0 me-5"></i><time
                                                                                datetime="2022-09-27">{{ $item->end_job_time }}</time></span>
                                                                    </div>
                                                                    <div class="card-2-bottom mt-20">
                                                                        <div class="row">
                                                                            <div class="col-lg-6 col-md-8">
                                                                                <div class="d-flex gap-15">
                                                                                    <img decoding="async"
                                                                                        class="rounded-circle"
                                                                                        src="{{ asset($item->logo) }}"
                                                                                        style="width: 35px; height: 35px"
                                                                                        alt="Ashford">
                                                                                    <div class="info-right-img">
                                                                                        <h6 style=" display: -webkit-box;
                                                                                                     line-height: 1;
                                                                                                    -webkit-line-clamp: 1;
                                                                                                    -webkit-box-orient: vertical;
                                                                                                    overflow: hidden;
                                                                                                    text-overflow: ellipsis;"
                                                                                            class="color-brand-1 lh-14 mb-0"
                                                                                            data-toggle="tooltip"
                                                                                            title=""
                                                                                            data-placement="top"
                                                                                            data-container="body"
                                                                                            data-original-title="{{ $item->nameCompany }}">
                                                                                            {{ $item->nameCompany }}</h6>
                                                                                        <span
                                                                                            class="card-location font-xxs pl-15 color-text-paragraph-2">{{ $item->getlocation->name }}</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-9 text-end col-lg-6">
                                                                                <p class="card-text-price">
                                                                                    {{ $item->getwage->name }}</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <span class="page-item">
                                                            <div id="pagination-numbers">
                                                            </div>
                                                        </span>
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
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-3988092 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                data-id="3988092" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7926be8"
                        data-id="7926be8" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-b21152e elementor-widget elementor-widget-template"
                                data-id="b21152e" data-element_type="widget" data-widget_type="template.default">
                                <div class="elementor-widget-container">

                                    <div class="section-box mb-30">
                                        <div class="container">

                                            <div class="box-we-hiring">
                                                <div class="text-1"><span class="text-we-are">We are</span><span
                                                        class="text-hiring">Hiring</span></div>
                                                <div class="text-2">Let&rsquo;s <span class="color-brand-1">Work</span>
                                                    Together<br> &amp; <span class="color-brand-1">Explore</span>
                                                    Opportunities</div>
                                                <div class="text-3">
                                                    <a href="../jobs/index.html"
                                                        class="btn btn-apply btn-apply-icon">Apply Now</a>
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
            <section
                class="elementor-section elementor-top-section elementor-element  elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                data-id="aa7ff34" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-40159c8"
                        data-id="40159c8" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-4826e5e elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                data-id="4826e5e" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-a11ad90"
                                        data-id="a11ad90" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-1defc89 elementor-widget elementor-widget-counter"
                                                data-id="1defc89" data-element_type="widget"
                                                data-widget_type="counter.default">
                                                <div class="elementor-widget-container">
                                                    <style>
                                                        .elementor-counter .elementor-counter-number-wrapper {
                                                            display: flex;
                                                            font-size: 69px;
                                                            font-weight: 600;
                                                            line-height: 1
                                                        }

                                                        .elementor-counter .elementor-counter-number-prefix,
                                                        .elementor-counter .elementor-counter-number-suffix {
                                                            flex-grow: 1;
                                                            white-space: pre-wrap
                                                        }

                                                        .elementor-counter .elementor-counter-number-prefix {
                                                            text-align: right
                                                        }

                                                        .elementor-counter .elementor-counter-number-suffix {
                                                            text-align: left
                                                        }

                                                        .elementor-counter .elementor-counter-title {
                                                            text-align: center;
                                                            font-size: 19px;
                                                            font-weight: 400;
                                                            line-height: 2.5
                                                        }
                                                    </style>
                                                    <div class="elementor-counter text-center">
                                                        <h1 class="ctrl-elementor-counter-number-wrapper color-brand-2">
                                                            <span class="elementor-counter-number-prefix"></span>
                                                            <span class="elementor-counter-number" data-duration="2000"
                                                                data-to-value="25" data-from-value="0"
                                                                data-delimiter=",">25</span>
                                                            <span class="elementor-counter-number-suffix">K+</span>
                                                        </h1>
                                                        <h5 class="ctrl-elementor-counter-title">Thành viên</h5>
                                                        <p class="font-sm color-text-paragraph mt-10">Đã có 25k thành viên
                                                            đã <br class="d-none d-lg-block"> đăng kí vào website của chúng
                                                            tôi</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-867e3a6"
                                        data-id="867e3a6" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-6a90da4 elementor-widget elementor-widget-counter"
                                                data-id="6a90da4" data-element_type="widget"
                                                data-widget_type="counter.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-counter text-center">
                                                        <h1 class="ctrl-elementor-counter-number-wrapper color-brand-2">
                                                            <span class="elementor-counter-number-prefix"></span>
                                                            <span class="elementor-counter-number" data-duration="2000"
                                                                data-to-value="17" data-from-value="0"
                                                                data-delimiter=",">17</span>
                                                            <span class="elementor-counter-number-suffix">+</span>
                                                        </h1>
                                                        <h5 class="ctrl-elementor-counter-title">Bài đăng
                                                        </h5>
                                                        <p class="font-sm color-text-paragraph mt-10">Trang web của chúng
                                                            tôi<br class="d-none d-lg-block">đã có 17+ bài job tìm kiếm
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-bc4da4e"
                                        data-id="bc4da4e" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-80133bc elementor-widget elementor-widget-counter"
                                                data-id="80133bc" data-element_type="widget"
                                                data-widget_type="counter.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-counter text-center">
                                                        <h1 class="ctrl-elementor-counter-number-wrapper color-brand-2">
                                                            <span class="elementor-counter-number-prefix"></span>
                                                            <span class="elementor-counter-number" data-duration="2000"
                                                                data-to-value="86" data-from-value="0"
                                                                data-delimiter=",">86</span>
                                                            <span class="elementor-counter-number-suffix">+</span>
                                                        </h1>
                                                        <h5 class="ctrl-elementor-counter-title">Ngành nghề
                                                        </h5>
                                                        <p class="font-sm color-text-paragraph mt-10">Trên website của
                                                            chúng tôi có<br class="d-none d-lg-block">5 Ngành nghề có sẵn
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-b3748e4"
                                        data-id="b3748e4" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-773d7cf elementor-widget elementor-widget-counter"
                                                data-id="773d7cf" data-element_type="widget"
                                                data-widget_type="counter.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-counter text-center">
                                                        <h1 class="ctrl-elementor-counter-number-wrapper color-brand-2">
                                                            <span class="elementor-counter-number-prefix"></span>
                                                            <span class="elementor-counter-number" data-duration="2000"
                                                                data-to-value="28" data-from-value="0"
                                                                data-delimiter=",">28</span>
                                                            <span class="elementor-counter-number-suffix">+</span>
                                                        </h1>
                                                        <h5 class="ctrl-elementor-counter-title">Nhà tuyển dụng
                                                        </h5>
                                                        <p class="font-sm color-text-paragraph mt-10">Trên trang web của
                                                            chúng tôi <br class="d-none d-lg-block">có 28+ nhà tuyển dụng
                                                            đang hoạt động
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-box mt-50">
                <div class="section-box wow animate__animated animate__fadeIn">
                    <div class="container">
                        <div class="text-start">
                            <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Ngành nghề nổi bật</h2>
                            <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Tìm kiếm và
                                kết nối với các ứng viên phù hợp nhanh hơn.</p>
                        </div>

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
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-d98c6ff elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="d98c6ff" data-element_type="section">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1c22a67"
                        data-id="1c22a67" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-ed0a5e5 m-0 elementor-widget elementor-widget-title"
                                data-id="ed0a5e5" data-element_type="widget" data-widget_type="title.default">
                                <div class="elementor-widget-container">
                                    <h2 class="control-heading-title m-0">Tất cả việc làm</h2>
                                </div>
                            </div>

                            <div class="elementor-element elementor-element-54a362e text-center elementor-widget elementor-widget-template"
                                data-id="54a362e" data-element_type="widget" data-widget_type="template.default">
                                <div class="elementor-widget-container">



                                    <div class="mt-10">
                                        <div class="tab-content" id="myTabContent-2">
                                            <div class="tab-pane fade show active" id="tab-content-writer"
                                                role="tabpanel" aria-labelledby="tab-content-writer">
                                                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 text-start">
                                                    @foreach ($jobAttractive as $item)
                                                        <div class="col">
                                                            <div class="card-grid-2 grid-bd-16 hover-up">
                                                                <div class="card-block-info pt-25">
                                                                    <h6
                                                                        style=" display: -webkit-box;
                                                                                                     line-height: 1;
                                                                                                    -webkit-line-clamp: 1;
                                                                                                    -webkit-box-orient: vertical;
                                                                                                    overflow: hidden;
                                                                                                    text-overflow: ellipsis;">
                                                                        <a
                                                                            href="home/detail/{{ $item->id }}">{{ $item->title }}</a>

                                                                    </h6>
                                                                    <div class="d-flex flex-wrap gap-15 mt-5">
                                                                        <span><i
                                                                                class="fi-rr-briefcase ms-0 me-5"></i>{{ $item->getTime_work->name }}</span>
                                                                        <span><i class="fi-rr-clock ms-0 me-5"></i><time
                                                                                datetime="2022-09-27">{{ $item->end_job_time }}</time></span>
                                                                    </div>

                                                                    <div class="card-2-bottom mt-20">
                                                                        <div class="row">
                                                                            <div class="col-lg-6 col-md-8">
                                                                                <div class="d-flex gap-15">
                                                                                    <img decoding="async"
                                                                                        class="rounded-circle"
                                                                                        src="{{ asset($item->logo) }}"
                                                                                        style="width: 35px; height: 35px"
                                                                                        alt="Ashford">
                                                                                    <div class="info-right-img">
                                                                                        <h6 style=" display: -webkit-box;
                                                                                                     line-height: 1;
                                                                                                    -webkit-line-clamp: 1;
                                                                                                    -webkit-box-orient: vertical;
                                                                                                    overflow: hidden;
                                                                                                    text-overflow: ellipsis;"
                                                                                            class="color-brand-1 lh-14 mb-0">
                                                                                            {{ $item->nameCompany }}
                                                                                        </h6>
                                                                                        <span
                                                                                            class="card-location font-xxs pl-15 color-text-paragraph-2">{{ $item->getlocation->name }}</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class=" col-md-6 text-end">
                                                                                <span
                                                                                    class="card-text-price">{{ $item->getwage->name }}</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <div class="col-sm-12">
                                                    <a href="{{ route('home.search') }}"
                                                        class="btn btn-default btn-find font-sm">Xem tất cả</a>
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
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-70bda6af elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="70bda6af" data-element_type="section">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-56806d45"
                        data-id="56806d45" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-2d8adcca elementor-section-full_width elementor-section-content-middle elementor-section-height-default elementor-section-height-default"
                                data-id="2d8adcca" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-wider">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3af251f5"
                                        data-id="3af251f5" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-4fae4bb0 elementor-widget elementor-widget-text-editor"
                                                data-id="4fae4bb0" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <style>
                                                        /*! elementor - v3.9.2 - 21-12-2022 */
                                                        .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
                                                            background-color: #818a91;
                                                            color: #fff
                                                        }

                                                        .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
                                                            color: #818a91;
                                                            border: 3px solid;
                                                            background-color: transparent
                                                        }

                                                        .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
                                                            margin-top: 8px
                                                        }

                                                        .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
                                                            width: 1em;
                                                            height: 1em
                                                        }

                                                        .elementor-widget-text-editor .elementor-drop-cap {
                                                            float: left;
                                                            text-align: center;
                                                            line-height: 1;
                                                            font-size: 50px
                                                        }

                                                        .elementor-widget-text-editor .elementor-drop-cap-letter {
                                                            display: inline-block
                                                        }
                                                    </style>
                                                    <div class="box-image-job">

                                                        <img decoding="async" class="img-job-1"
                                                            src="../wp-content/uploads/2022/10/Card.png" alt="jobBox"
                                                            width="390" /><img decoding="async" class="img-job-2"
                                                            src="../wp-content/uploads/2022/10/Medium_Safety.png"
                                                            alt="jobBox" width="335" />
                                                        <figure class=""
                                                            style="visibility: visible; animation-name: fadeIn;"><img
                                                                decoding="async"
                                                                src="../wp-content/uploads/2022/09/img1.png"
                                                                alt="jobBox" /></figure>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-717e9e71 my-auto"
                                        data-id="717e9e71" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-81c68 m-0 elementor-widget elementor-widget-title"
                                                data-id="81c68" data-element_type="widget"
                                                data-widget_type="title.default">
                                                <div class="elementor-widget-container">
                                                    <span class="control-heading-title color-text-mutted text-32 m-0">Hàng
                                                        triệu công việc</span>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-67f68714 m-0 elementor-widget elementor-widget-title"
                                                data-id="67f68714" data-element_type="widget"
                                                data-widget_type="title.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="control-heading-title text-52 m-0">Về chúng tôi
                                                    </h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-6e6d5458 mt-lg-40 mt-20 pr-50 text-md-lh28 mb-md-0 elementor-widget elementor-widget-title"
                                                data-id="6e6d5458" data-element_type="widget"
                                                data-widget_type="title.default">
                                                <div class="elementor-widget-container">
                                                    <p class="control-heading-title m-0">ITWORK là một Website nhân sự, với
                                                        năng lực và sứ mệnh của ITWORK đặt ra cho mình là thay đổi thị
                                                        trường tuyển dụng - nhân sự ngày một hiệu quả hơn. Bằng công nghệ,
                                                        chúng tôi tạo ra nền tảng cho phép người dùng tạo CV Phát triển được
                                                        kĩ năng cá nhân xây dựng hình ảnh chuyên nghiệp trong mắt nhà tuyển
                                                        dụng và tiếp cận được với các công việc phù hợp</p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>

            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-acd8c1d elementor-section-boxed elementor-section-height-default elementor-section-height-default">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="sec_title position-relative text-center mb-4">
                                {{-- <h6 class="text-muted mb-0">Latest News</h6> --}}
                                <h2 class="ft-bold">Tin Tức</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        @foreach ($new as $item)
                            <div class="col-xl-3 col-lg-2 col-md-4 col-sm-12">
                                <div
                                    class="card-grid-3 hover-up post-28 post type-post status-publish format-standard has-post-thumbnail hentry category-events tag-beauty tag-nature tag-travel-tips ">
                                    <div class="text-center card-grid-3-image">
                                        <a href="{{ route('detailNew', $item->id) }}">
                                            <figure><img
                                                    style="width:303px !important; height:157px !important; object-fit: cover; "
                                                    src="{{ $item->new_image }}" class=" img-fluid wp-post-image"
                                                    alt="" decoding="async" loading="lazy"></figure>
                                        </a>
                                    </div>
                                    <div class="card-block-info">

                                        <p class=" px-3   py-1 rounded bg-light-primary d-inline-flex"
                                            style="color : rgb(60,101,245) ; font-weight: 550 ; ">
                                            {{ $item->majors }}
                                        </p>

                                        <h5
                                            style="
                                           max-height: 25px;
                                           overflow: hidden;
                                           text-overflow: ellipsis;
                                            ">
                                            <a href="#">{{ $item->title }}</a>
                                        </h5>
                                        <p class="mt-10 color-text-paragraph font-sm"></p>
                                        <p>
                                        <div class="blg_desc  "
                                            style="
                                           max-height: 20px;
                                           overflow: hidden;
                                           text-overflow: ellipsis;
                                            ">
                                            <p>{!! $item->describe !!}</p>
                                        </div>
                                        </p>
                                        <p></p>
                                        <div class="card-2-bottom mt-20">
                                            <div class="row d-flex align-items-end">
                                                <div class="col-lg-6 col-6">
                                                    <div class="d-flex align-items-center">
                                                        <img alt=""
                                                            src="https://jthemes.com/themes/wp/jobbox/wp-content/uploads/2022/09/user10-150x150.png"
                                                            srcset="https://jthemes.com/themes/wp/jobbox/wp-content/uploads/2022/09/user10-150x150.png 2x"
                                                            class="avatar avatar-64 photo img-rounded" height="35"
                                                            width="35" loading="lazy" decoding="async">
                                                        <div class="info-right-img d-grid">
                                                            <span
                                                                class="font-sm font-bold color-brand-1 op-70">Admin</span>
                                                            <span
                                                                class="font-xs color-text-paragraph-2">{{ $item->created_at->format('m-d-Y') }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 text-end col-6">
                                                    <span class="color-text-paragraph-2 font-xs">2 mins to read</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>

        <section class="section-box mt-50 mb-20">
            <div class="container">
                <div class="box-newsletter">
                    <div class="row align-items-center">

                        <div class="col-xl-3 col-12 text-center d-none d-xl-block">
                            <img src="../wp-content/uploads/2022/12/newsletter-left.png" alt="Newsletter">
                        </div>
                        <div class="col-lg-12 col-xl-6 col-12">
                            <h2 class="text-md-newsletter text-center">Những điều mới sẽ luôn cập nhật thường xuyên</h2>
                            <div class="box-form-newsletter mt-40">
                                <form id="mc-form" class="form-newsletter">
                                    <input id="mc-email" class="input-newsletter" type="email"
                                        placeholder="Enter your email" required="required">
                                    <button class="btn btn-default font-heading icon-send-letter"
                                        type="submit">Subscribe</button>
                                </form>
                            </div>
                            <div id="mc-response" class="mt-15"></div>
                        </div>
                        <div class="col-xl-3 col-12 text-center d-none d-xl-block">
                            <img src="../wp-content/uploads/2022/12/newsletter-right.png" alt="Newsletter">
                        </div>

                    </div>
                    <!--row-->
                </div>
            </div>
        </section>
    </main>
    @if (Auth::guard('user')->check())
        @if ($user->getProfileUse == null)
            <div class="modal fade" id="checkmodalProfile" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <job-target
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
                                    'urlStore' => route('profile.updateProfile'),
                                    'getskill' => $getskill,
                                ]) }}">
                            </job-target>
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
    <div class="modal fade" id="controlJobManagerRegister" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style="--bs-backdrop-zindex: none;">
                    <h5 class="modal-title" id="exampleModalLabel">Chào mừng bạn đến với ITWork</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
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
@endsection
