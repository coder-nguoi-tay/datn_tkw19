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
                                                        The #1 <span class="color-green">Job Board for</span><br
                                                            class="d-none d-lg-block">Hiring or Find your next job</h1>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-7b9da113 mb-0 elementor-widget elementor-widget-title"
                                                data-id="7b9da113" data-element_type="widget"
                                                data-widget_type="title.default">
                                                <div class="elementor-widget-container">
                                                    <div class="control-heading-title font-lg text-white mt-20">Each
                                                        month, more than 3 million job seekers turn to website in their
                                                        search for work, making over 140,000 applications every single
                                                        day</div>
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
                                                                        style="border: none;" placeholder="Keywords" />

                                                                    <input class="btn btn-default btn-find font-sm"
                                                                        type="submit" value="Search">

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
                                                                    <h6><a href="home/detail/{{ $item->title . '-' . $item->id }}"
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
                                                                            <div class="col-lg-8 col-md-8">
                                                                                <div class="d-flex gap-15">
                                                                                    <img decoding="async"
                                                                                        class="rounded-circle"
                                                                                        src="{{ asset($item->logo) }}"
                                                                                        style="width: 35px; height: 35px"
                                                                                        alt="Ashford">
                                                                                    <div class="info-right-img">
                                                                                        <h6 class="color-brand-1 lh-14 mb-0"
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
                                                                            <div class="col-lg-4 col-md-4 text-end">
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

                                    <div class="list-tabs list-tabs-2 mt-30">
                                        <ul class="nav nav-tabs ps-0" role="tablist">
                                            <li>
                                                <a class="active" id="nav-tab-content-writer" href="#tab-content-writer"
                                                    data-bs-toggle="tab" role="tab"
                                                    aria-controls="tab-content-writer" aria-selected="true">
                                                    <img decoding="async"
                                                        src="../wp-content/uploads/2022/10/security-icon.png"
                                                        width="18" alt="Content Writer">
                                                    Content Writer </a>
                                            </li>
                                            <li>
                                                <a class="" id="nav-tab-finance" href="#tab-finance"
                                                    data-bs-toggle="tab" role="tab" aria-controls="tab-finance"
                                                    aria-selected="true">
                                                    <img decoding="async" src="../wp-content/uploads/2022/10/bank.png"
                                                        width="18" alt="Finance">
                                                    Finance </a>
                                            </li>
                                            <li>
                                                <a class="" id="nav-tab-human-resource" href="#tab-human-resource"
                                                    data-bs-toggle="tab" role="tab"
                                                    aria-controls="tab-human-resource" aria-selected="true">
                                                    <img decoding="async"
                                                        src="../wp-content/uploads/2022/10/human-resource.png"
                                                        width="18" alt="Human Resource">
                                                    Human Resource </a>
                                            </li>
                                            <li>
                                                <a class="" id="nav-tab-management" href="#tab-management"
                                                    data-bs-toggle="tab" role="tab" aria-controls="tab-management"
                                                    aria-selected="true">
                                                    <img decoding="async"
                                                        src="../wp-content/uploads/2022/10/management-icon.png"
                                                        width="18" alt="Management">
                                                    Management </a>
                                            </li>
                                            <li>
                                                <a class="" id="nav-tab-market-research"
                                                    href="#tab-market-research" data-bs-toggle="tab" role="tab"
                                                    aria-controls="tab-market-research" aria-selected="true">
                                                    <img decoding="async"
                                                        src="../wp-content/uploads/2022/10/research-icon.png"
                                                        width="18" alt="Market Research">
                                                    Market Research </a>
                                            </li>
                                            <li>
                                                <a class="" id="nav-tab-marketing-sale" href="#tab-marketing-sale"
                                                    data-bs-toggle="tab" role="tab"
                                                    aria-controls="tab-marketing-sale" aria-selected="true">
                                                    <img decoding="async"
                                                        src="../wp-content/uploads/2022/10/career-icon.png" width="18"
                                                        alt="Marketing &amp; Sale">
                                                    Marketing &amp; Sale </a>
                                            </li>
                                            <li>
                                                <a class="" id="nav-tab-retail-products"
                                                    href="#tab-retail-products" data-bs-toggle="tab" role="tab"
                                                    aria-controls="tab-retail-products" aria-selected="true">
                                                    <img decoding="async"
                                                        src="../wp-content/uploads/2022/10/retail-icon.png" width="18"
                                                        alt="Retail &amp; Products">
                                                    Retail &amp; Products </a>
                                            </li>
                                            <li>
                                                <a class="" id="nav-tab-software" href="#tab-software"
                                                    data-bs-toggle="tab" role="tab" aria-controls="tab-software"
                                                    aria-selected="true">
                                                    <img decoding="async"
                                                        src="../wp-content/uploads/2022/10/lamp-icon.png" width="18"
                                                        alt="Software">
                                                    Software </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mt-10">
                                        <div class="tab-content" id="myTabContent-2">
                                            <div class="tab-pane fade show active" id="tab-content-writer"
                                                role="tabpanel" aria-labelledby="tab-content-writer">
                                                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 text-start">
                                                    @foreach ($jobAttractive as $item)
                                                        <div class="col">
                                                            <div class="card-grid-2 grid-bd-16 hover-up">
                                                                <div class="card-block-info pt-25">
                                                                    <h6><a
                                                                            href="home/detail/{{ $item->title . '-' . $item->id }}">{{ $item->title }}</a>
                                                                    </h6>
                                                                    <div class="d-flex flex-wrap gap-15 mt-5">
                                                                        <span><i
                                                                                class="fi-rr-briefcase ms-0 me-5"></i>{{ $item->getTime_work->name }}</span>
                                                                        <span><i class="fi-rr-clock ms-0 me-5"></i><time
                                                                                datetime="2022-09-27">{{ $item->end_job_time }}</time></span>
                                                                    </div>

                                                                    <div class="card-2-bottom mt-20">
                                                                        <div class="row">
                                                                            <div class="col-lg-8 col-md-8">
                                                                                <div class="d-flex gap-15">
                                                                                    <img decoding="async"
                                                                                        class="rounded-circle"
                                                                                        src="{{ asset($item->logo) }}"
                                                                                        style="width: 35px; height: 35px"
                                                                                        alt="Ashford">
                                                                                    <div class="info-right-img">
                                                                                        <h6
                                                                                            class="color-brand-1 lh-14 mb-0">
                                                                                            {{ $item->nameCompany }}
                                                                                        </h6>
                                                                                        <span
                                                                                            class="card-location font-xxs pl-15 color-text-paragraph-2">{{ $item->getlocation->name }}</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-4 col-md-4 text-end">
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
                                                    <h2 class="control-heading-title text-52 m-0">Tìm người phù hợp bạn
                                                    </h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-6e6d5458 mt-lg-40 mt-20 pr-50 text-md-lh28 mb-md-0 elementor-widget elementor-widget-title"
                                                data-id="6e6d5458" data-element_type="widget"
                                                data-widget_type="title.default">
                                                <div class="elementor-widget-container">
                                                    <p class="control-heading-title m-0">Tìm kiếm tất cả các vị trí mở trên
                                                        web. Nhận ước tính lương cá nhân của riêng bạn. Đọc đánh giá về hơn
                                                        600.000 công ty trên toàn thế giới. Công việc phù hợp là ngoài kia
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-5d4fe94c elementor-widget elementor-widget-text-editor"
                                                data-id="5d4fe94c" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <div class="mt-40">
                                                        <div class="wow animate__ animate__fadeInUp animated"
                                                            style="visibility: visible; animation-name: fadeInUp;"><a
                                                                class="btn btn-default" href="../jobs/index.html">Tìm
                                                                kiếm</a></div>
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
            {{-- @if (Auth::guard('user')->check())
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
                                        <h2 class="control-heading-title m-0">Việc làm phù hợp với bạn</h2>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-54a362e text-center elementor-widget elementor-widget-template"
                                    data-id="54a362e" data-element_type="widget" data-widget_type="template.default">
                                    <div class="elementor-widget-container">

                                        <div class="list-tabs list-tabs-2 mt-30">
                                            <ul class="nav nav-tabs ps-0" role="tablist">
                                                <li>
                                                    <a class="active" id="nav-tab-content-writer"
                                                        href="#tab-content-writer" data-bs-toggle="tab" role="tab"
                                                        aria-controls="tab-content-writer" aria-selected="true">
                                                        <img decoding="async"
                                                            src="../wp-content/uploads/2022/10/security-icon.png"
                                                            width="18" alt="Content Writer">
                                                        Content Writer </a>
                                                </li>
                                                <li>
                                                    <a class="" id="nav-tab-finance" href="#tab-finance"
                                                        data-bs-toggle="tab" role="tab" aria-controls="tab-finance"
                                                        aria-selected="true">
                                                        <img decoding="async" src="../wp-content/uploads/2022/10/bank.png"
                                                            width="18" alt="Finance">
                                                        Finance </a>
                                                </li>
                                                <li>
                                                    <a class="" id="nav-tab-human-resource"
                                                        href="#tab-human-resource" data-bs-toggle="tab" role="tab"
                                                        aria-controls="tab-human-resource" aria-selected="true">
                                                        <img decoding="async"
                                                            src="../wp-content/uploads/2022/10/human-resource.png"
                                                            width="18" alt="Human Resource">
                                                        Human Resource </a>
                                                </li>
                                                <li>
                                                    <a class="" id="nav-tab-management" href="#tab-management"
                                                        data-bs-toggle="tab" role="tab"
                                                        aria-controls="tab-management" aria-selected="true">
                                                        <img decoding="async"
                                                            src="../wp-content/uploads/2022/10/management-icon.png"
                                                            width="18" alt="Management">
                                                        Management </a>
                                                </li>
                                                <li>
                                                    <a class="" id="nav-tab-market-research"
                                                        href="#tab-market-research" data-bs-toggle="tab" role="tab"
                                                        aria-controls="tab-market-research" aria-selected="true">
                                                        <img decoding="async"
                                                            src="../wp-content/uploads/2022/10/research-icon.png"
                                                            width="18" alt="Market Research">
                                                        Market Research </a>
                                                </li>
                                                <li>
                                                    <a class="" id="nav-tab-marketing-sale"
                                                        href="#tab-marketing-sale" data-bs-toggle="tab" role="tab"
                                                        aria-controls="tab-marketing-sale" aria-selected="true">
                                                        <img decoding="async"
                                                            src="../wp-content/uploads/2022/10/career-icon.png"
                                                            width="18" alt="Marketing &amp; Sale">
                                                        Marketing &amp; Sale </a>
                                                </li>
                                                <li>
                                                    <a class="" id="nav-tab-retail-products"
                                                        href="#tab-retail-products" data-bs-toggle="tab" role="tab"
                                                        aria-controls="tab-retail-products" aria-selected="true">
                                                        <img decoding="async"
                                                            src="../wp-content/uploads/2022/10/retail-icon.png"
                                                            width="18" alt="Retail &amp; Products">
                                                        Retail &amp; Products </a>
                                                </li>
                                                <li>
                                                    <a class="" id="nav-tab-software" href="#tab-software"
                                                        data-bs-toggle="tab" role="tab" aria-controls="tab-software"
                                                        aria-selected="true">
                                                        <img decoding="async"
                                                            src="../wp-content/uploads/2022/10/lamp-icon.png"
                                                            width="18" alt="Software">
                                                        Software </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mt-10">
                                            <div class="tab-content" id="myTabContent-2">
                                                <div class="tab-pane fade show active" id="tab-content-writer"
                                                    role="tabpanel" aria-labelledby="tab-content-writer">
                                                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 text-start">
                                                        @foreach ($jobForUser as $item)
                                                            <div class="col">
                                                                <div class="card-grid-2 grid-bd-16 hover-up">
                                                                    <div class="card-block-info pt-25">
                                                                        <h6><a
                                                                                href="home/detail/{{ $item->title . '-' . $item->id }}">{{ $item->title }}</a>
                                                                        </h6>
                                                                        <div class="d-flex flex-wrap gap-15 mt-5">
                                                                            <span><i
                                                                                    class="fi-rr-briefcase ms-0 me-5"></i>{{ $item->getTime_work->name }}</span>
                                                                            <span><i
                                                                                    class="fi-rr-clock ms-0 me-5"></i><time
                                                                                    datetime="2022-09-27">{{ $item->end_job_time }}</time></span>
                                                                        </div>

                                                                        <div class="card-2-bottom mt-20">
                                                                            <div class="row">
                                                                                <div class="col-lg-8 col-md-8">
                                                                                    <div class="d-flex gap-15">
                                                                                        <img decoding="async"
                                                                                            class="rounded-circle"
                                                                                            src="../wp-content/uploads/2022/09/brand-7.png"
                                                                                            style="width: 35px; height: 35px"
                                                                                            alt="Ashford">
                                                                                        <div class="info-right-img">
                                                                                            <h6
                                                                                                class="color-brand-1 lh-14 mb-0">
                                                                                                {{ $item->nameCompany }}
                                                                                            </h6>
                                                                                            <span
                                                                                                class="card-location font-xxs pl-15 color-text-paragraph-2">{{ $item->getlocation->name }}</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-4 col-md-4 text-end">
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
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            @endif --}}
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
                            <div class="col-xl-4 col-lg-3 col-md-6 col-sm-12">
                                <div
                                    class="card-grid-3 hover-up post-28 post type-post status-publish format-standard has-post-thumbnail hentry category-events tag-beauty tag-nature tag-travel-tips ">
                                    <div class="text-center card-grid-3-image">
                                        <a href="{{ route('detail.blog', $item->id) }}">
                                            <figure><img
                                                    style="width:403px !important; height:257px !important; object-fit: cover; "
                                                    src="{{ $item->new_image }}" class=" img-fluid wp-post-image"
                                                    alt="" decoding="async" loading="lazy"></figure>
                                        </a>
                                    </div>
                                    <div class="card-block-info">

                                        <p class=" px-3   py-1 rounded bg-light-primary d-inline-flex"
                                            style="color : rgb(60,101,245) ; font-weight: 550">
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
                                            <p>{{ $item->describe }}</p>
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
