@extends('client.layout.index')
@section('client')
    <main class="main">
        <section class="section-box-2">
            <div class="container">

                <div class="banner-hero banner-image-single">
                    <img width="1326" height="366" src="../../wp-content/uploads/2022/09/jobbox-img-8-scaled-1326x366.jpg"
                        class="img-fluid img-fluid wp-post-image" alt="" decoding="async">
                </div>


                <div class="box-company-profile">

                    <div class="image-compay">
                        <img src="{{ asset($company->logo) }}" style="height: 85px; width: 85px;" alt="Logo">
                    </div>

                    <div class="row mt-10">
                        <div class="col-lg-8 col-md-12">

                            <h5 class="f-18">
                                {{ $company->name }}
                            </h5>
                        </div>

                        <div class="col-lg-4 col-md-12 text-lg-end">
                            <div class="box-nav-tabs">
                                <a class="btn btn-border mr-15 mb-5 aboutus-icon active" href="#tab-about-us"
                                    data-bs-toggle="tab" role="tab" aria-controls="tab-about-us"
                                    aria-selected="true">Theo dõi</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="border-bottom pt-10 pb-10"></div>
            </div>
        </section>

        <section class="section-box mt-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                        <div class="content-single">


                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="tab-about-us" role="tabpanel"
                                    aria-labelledby="tab-about-us">
                                    <h4>Chào mừng đến với {{ $company->name }}</h4>
                                    {!! $company->desceibe !!}

                                </div>

                            </div>
                            <div class="box-related-job content-page">
                                <h5 class="mb-30">Công việc công ty đã đăng</h5>
                                @foreach ($job as $value)
                                    <div class="col-xl-12 col-12 jobbox-list-item ">
                                        <div class="card-grid-2 hover-up">


                                            <div class="card-block-info">
                                                <h4 class="font-lg fw-semibold mb-1">
                                                    <a href="/home/detail/{{ $value->idjob }}">{{ $value->title }}</a>
                                                </h4>

                                                <div class="d-flex align-items-center gap-3 font-xs color-text-mutted">
                                                    <span><i
                                                            class="fi-rr-briefcase ms-0 me-5"></i>{{ $value->getTime_work->name }}</span>
                                                    <span><i class="fi-rr-clock ms-0 me-5"></i>{{ $value->convert_date }}
                                                        ngày</span>
                                                </div>

                                                <div class="card-2-bottom mt-20">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-7 col-7">
                                                            <span
                                                                class="card-text-price">{{ $value->getMajors->name }}</span>
                                                        </div>
                                                        <div class="col-lg-5 col-5 text-end">
                                                            <a class="btn btn-apply-now"
                                                                href="/home/detail/{{ $value->idjob }}">Chi
                                                                tiết</a>
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

                    <div class="col-lg-4 col-md-12 col-sm-12 col-12 pl-40 pl-lg-15 mt-lg-30">

                        <div class="sidebar-border">
                            <div class="sidebar-heading">
                                <div class="avatar-sidebar">
                                    <div class="sidebar-info pl-0">
                                        <span class="sidebar-company">{{ $company->name }} </span>
                                        <span class="card-location">{{ $company->address }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="sidebar-list-job">
                                <div class="box-map">
                                    <iframe
                                        src="https://maps.google.com/maps?q=40.712776,-74.005974&amp;hl=es&amp;z=14&amp;output=embed"
                                        allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                <!--google map-->
                            </div>


                            <div class="sidebar-list-job">
                                <ul class="ul-disc">
                                    <li>{{ $company->address }}</li>
                                    <li>Quy mô: {{ $company->number_tax }}</li>
                                    <li>Email: {{ $company->email }}</li>
                                </ul>

                                <div class="mt-30">
                                    <a class="btn btn-send-message" href="">Gửi mail đến công ty</a>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-border-bg bg-right">
                            <span class="text-grey">WE ARE</span>
                            <span class="text-hiring">HIRING</span>
                            <p class="font-xxs color-text-paragraph mt-5">Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Recusandae architecto</p>
                            <div class="mt-15">
                                <a class="btn btn-paragraph-2" href="#">Know More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-box mt-50 mb-20">
            <div class="container">
                <div class="box-newsletter">
                    <div class="row align-items-center">

                        <div class="col-xl-3 col-12 text-center d-none d-xl-block">
                            <img src="../../wp-content/uploads/2022/12/newsletter-left.png" alt="Newsletter">
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
                            <img src="../../wp-content/uploads/2022/12/newsletter-right.png" alt="Newsletter">
                        </div>

                    </div>
                    <!--row-->
                </div>
            </div>
        </section>
    </main>
@endsection
