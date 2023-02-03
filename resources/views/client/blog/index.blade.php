@php
    use Carbon\Carbon;
@endphp
@extends('client.layout.index')
@section('client')
    <main class="main">
        <div class="section-box">
            <div class="text-center"><img width="1280" height="514"
                    src="../wp-content/uploads/2022/09/jobbox-post-7-1280x514.jpg" class="img-fluid img-fluid wp-post-image"
                    alt="" decoding="async"></div>
        </div>
        <section class="section-box">
            <div class="archive-header pt-50 text-center">
                <div class="container">
                    <div class="box-white position-relative">
                        <div class="max-width-single">
                            <div class="tags mb-15"><a href="#" rel="tag" class="btn btn-tag">News</a></div>
                            <h2 class="mb-10 mt-20 text-center  text-break">{{ $blog->title }}</h2>
                            <div class="post-meta text-muted d-flex align-items-center mx-auto justify-content-center">
                                <div class="author d-flex align-items-center mr-20">
                                    <img alt="" src="../wp-content/uploads/2022/09/user10-150x150.png"
                                        srcset="https://jthemes.com/themes/wp/jobbox/wp-content/uploads/2022/09/user10-150x150.png 2x"
                                        class="avatar avatar-64 photo img-fluid" height="30" width="30"
                                        loading="lazy" decoding="async"> <span class="color-text-paragraph-2">admin</span>
                                </div>
                                <div class="date">
                                    <span class="font-xs color-text-paragraph-2 mr-20 d-inline-block">
                                        <img class="img-middle mr-5" width="13"
                                            src="../wp-content/themes/jobbox/assets/imgs/page/blog/calendar.svg"
                                            alt="Calendar">
                                        {{ $blog->created_at->format('D-M-Y') }} </span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div
                class="post-loop-grid post-30 post type-post status-publish format-standard has-post-thumbnail hentry category-news tag-beauty tag-nature tag-travel-tips">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">

                            <div class="entry-content">
                                <figure class="wp-block-image alignwide size-large"><img decoding="async" loading="lazy"
                                        width="1024" height="456"
                                        src="../wp-content/uploads/2022/09/img-content-1024x456.png" alt=""
                                        class="wp-image-21"
                                        srcset="https://jthemes.com/themes/wp/jobbox/wp-content/uploads/2022/09/img-content-1024x456.png 1024w, https://jthemes.com/themes/wp/jobbox/wp-content/uploads/2022/09/img-content-300x133.png 300w, https://jthemes.com/themes/wp/jobbox/wp-content/uploads/2022/09/img-content-768x342.png 768w, https://jthemes.com/themes/wp/jobbox/wp-content/uploads/2022/09/img-content-600x267.png 600w, https://jthemes.com/themes/wp/jobbox/wp-content/uploads/2022/09/img-content.png 1160w"
                                        sizes="(max-width: 1024px) 100vw, 1024px"></figure>
                                <p>{{ $blog->describe }}</p>
                                <h4>{{ $blog->title }}</h4>
                            </div>
                            <div class="max-width-single">
                                <div class="single-apply-jobs pb-0">
                                    <div class="row">
                                        <div class="col-lg-12">

                                            <a class="btn btn-border-3 mr-10 hover-up"
                                                href="">{{ $blog->majors }}</a>
                                        </div>
                                    </div>
                                </div>
                                <img style="width:403px !important; height:257px !important; object-fit: cover; "
                                    src="{{ $blog->new_image }}" class=" img-fluid wp-post-image" alt=""
                                    decoding="async" loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-7 ">
                <br>
                <div class="bg-white br-8">
                    <div class="section ">
                        <div class="job-home-page-section">
                            <div class="section-header">
                                <h2 class="section-title">Tin tuyển dụng</h2>
                            </div>
                            <div class="section-body">
                                <div class="box-search-job-home-page box">
                                    <form id="frm-search-job" method="GET" action="">
                                        <div class="box-search">
                                            <div class="col-input">
                                                <input class="form-control input-search ui-autocomplete-input"
                                                    name="tim-kiem" value=""
                                                    placeholder="Tên công việc, vị trí bạn muốn ứng tuyển ..."
                                                    id="keyword" autocomplete="off">
                                            </div>
                                            <div class="col-button">
                                                <button class="btn btn-topcv btn-search-job bg-premium" type="submit"><i
                                                        class="fa-solid fa-magnifying-glass"></i>
                                                    <span>Tìm kiếm</span></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="job-section-home-page">
                                    <div class="section-header">
                                        <h2 class="section-title">Hiện tại đang tuyển dụng <span
                                                class="color-premium">{{ count($job) }}</span> vị trí</h2>
                                    </div>
                                    <div class="section-body" id="paginated-list">
                                        @foreach ($job as $item)
                                            <div class="lists-job">
                                                <div class="job-item render-job-search job-ta result-job-hover"
                                                    data-job-id="880173" data-job-position="6" data-box="BoxSearchResult">

                                                    <div class="body">
                                                        <div class="content">
                                                            <div class="ml-auto">
                                                                <h3 class="title">
                                                                    <a target="_blank" class="underline-box-job"
                                                                        href="">
                                                                        <span class="bold transform-job-title"
                                                                            data-toggle="tooltip" title=""
                                                                            data-placement="top" data-container="body"
                                                                            data-original-title="{{ $item->title }}">Nhân
                                                                            {{ $item->title }}</span>
                                                                    </a>
                                                                </h3>
                                                            </div>
                                                            <div class="mr-auto text-right">
                                                                <p class="deadline">
                                                                    Còn <strong>5</strong> ngày để ứng tuyển
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="label-content ml-auto">
                                                                <label class="salary">{{ $item->getWage->name }}</label>
                                                                <label class="address" data-toggle="tooltip"
                                                                    data-html="true" title="" data-placement="top"
                                                                    data-container="body"
                                                                    data-original-title="{{ $item->getlocation->name }}">{{ $item->getlocation->name }}</label>
                                                            </div>

                                                        </div>
                                                        <div id="mc-response" class="mt-15"></div>
                                                    </div>

                                                    <div class="col-xl-3 col-12 text-center d-none d-xl-block">
                                                        <img src="../wp-content/uploads/2022/12/newsletter-right.png"
                                                            alt="Newsletter">
                                                    </div>

                                                </div>
                                                <!--row-->
                                            </div>
                                        @endforeach
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            </div>
    </main>
@endsection
