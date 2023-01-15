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

                                        <a class="btn btn-border-3 mr-10 hover-up" href="">{{ $blog->majors }}</a>


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




        <section class="section-box mt-50 mb-20">
            <div class="container">
                <div class="box-newsletter">
                    <div class="row align-items-center">

                        <div class="col-xl-3 col-12 text-center d-none d-xl-block">
                            <img src="../wp-content/uploads/2022/12/newsletter-left.png" alt="Newsletter">
                        </div>

                        <div class="col-lg-12 col-xl-6 col-12">
                            <h2 class="text-md-newsletter text-center">New Things Will Always Update Regularly</h2>
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
@endsection
