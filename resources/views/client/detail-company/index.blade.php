@php
    use Carbon\Carbon;
@endphp
@extends('client.layout.index')
@section('client')

    <body>
        <div class="container-fluid">
            <div class="row">
                <div id="header">

                    <div class="bg-white">
                        <div class="container">
                            <div id="cover-body">
                                <div id="company-logo">
                                    <img src="{{ asset($company->logo) }}" alt="" title=""
                                        class="company-image-logo">
                                </div>
                                <div id="company-name" class="grow-1">
                                    <h1>{{ $company->name }}</h1>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div id="nav">
                        <div class="container">
                            <div class="row jobfair-header">
                                <ul class="col-md-8  premium-company-header-list " id="nav-list-item">
                                    <li><a href="#" class=" active ">Trang chủ</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-5 ">
                        <br>
                        <div class="bg-white br-8">
                            <div class="section ">
                                <div class="intro-section">
                                    <div class="section-header">
                                        <h2 class="section-title">Giới thiệu</h2>
                                    </div>
                                    <div class="section-body">
                                        <div class="intro-content">
                                            {!! $company->desceibe !!}
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="information-section">
                                    <div class="box-items">
                                        <div class="icon-block bg-premium-hover">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                class="color-premium" style="width: 30px; height: 30px; ">
                                                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                <path
                                                    d="M96 32V64H48C21.5 64 0 85.5 0 112v48H448V112c0-26.5-21.5-48-48-48H352V32c0-17.7-14.3-32-32-32s-32 14.3-32 32V64H160V32c0-17.7-14.3-32-32-32S96 14.3 96 32zM448 192H0V464c0 26.5 21.5 48 48 48H400c26.5 0 48-21.5 48-48V192z" />
                                            </svg>

                                        </div>
                                        <div class="">
                                            <div class="value-block">
                                                {{ Carbon::parse($company->created_at)->format('d-m-Y') }}
                                            </div>
                                            <div class="title-block">
                                                Năm thành lập công ty trên ITWORK
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-items">
                                        <div class="icon-block bg-premium-hover">

                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 640 512"class="color-premium"
                                                style="width: 30px; height: 30px; ">
                                                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                <path
                                                    d="M184 88c0 30.9-25.1 56-56 56s-56-25.1-56-56s25.1-56 56-56s56 25.1 56 56zM64 245.7C54 256.9 48 271.8 48 288s6 31.1 16 42.3V245.7zm144.4-49.3C178.7 222.7 160 261.2 160 304c0 34.3 12 65.8 32 90.5V416c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V389.2C26.2 371.2 0 332.7 0 288c0-61.9 50.1-112 112-112h32c24 0 46.2 7.5 64.4 20.3zM448 416V394.5c20-24.7 32-56.2 32-90.5c0-42.8-18.7-81.3-48.4-107.7C449.8 183.5 472 176 496 176h32c61.9 0 112 50.1 112 112c0 44.7-26.2 83.2-64 101.2V416c0 17.7-14.3 32-32 32H480c-17.7 0-32-14.3-32-32zM568 88c0 30.9-25.1 56-56 56s-56-25.1-56-56s25.1-56 56-56s56 25.1 56 56zm8 157.7v84.7c10-11.3 16-26.1 16-42.3s-6-31.1-16-42.3zM320 160c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64zM240 304c0 16.2 6 31 16 42.3V261.7c-10 11.3-16 26.1-16 42.3zm144-42.3v84.7c10-11.3 16-26.1 16-42.3s-6-31.1-16-42.3zM448 304c0 44.7-26.2 83.2-64 101.2V448c0 17.7-14.3 32-32 32H288c-17.7 0-32-14.3-32-32V405.2c-37.8-18-64-56.5-64-101.2c0-61.9 50.1-112 112-112h32c61.9 0 112 50.1 112 112z" />
                                            </svg>

                                        </div>
                                        <div class="">
                                            <div class="value-block">
                                                {{ $company->number_member }}
                                            </div>
                                            <div class="title-block">
                                                Quy mô công ty
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                        <div class="bg-white br-8 mt-20">
                            <div class="section ">
                                <div class="contact-section">
                                    <div class="section-header">
                                        <h2 class="section-title">Liên hệ</h2>
                                    </div>
                                    <div class="section-body">
                                        <div class="info">
                                            <div class="company-logo">
                                                <img src="https://cdn.topcv.vn/37/company_logos/e59d30ad5ed7ef920e6f717eb4eaaead-627881f81b05c.jpg"
                                                    alt="" title="" class="company-image-logo">
                                            </div>
                                            <div class="company-name">
                                                <h4>{{ $company->name }}<i
                                                        class="fa-solid fa-circle-check color-premium"></i></h4>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="content-contact">
                                            <div class="info-line">

                                                <i class="fas fa-phone color-premium"></i>
                                                &nbsp;
                                                <a href="tel:02866821265">{{ $company->email }}</a>
                                            </div>
                                            <div class="info-line">
                                                <i class="fab fa-chrome color-premium mr-3"></i>
                                                <span>{{ $company->address }}</span>
                                                &nbsp;
                                            </div>
                                            <div class="company-map">
                                                <p>Địa chỉ trụ sở chính</p>
                                                <iframe width="100%" height="275px" frameborder="0"
                                                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCVgO8KzHQ8iKcfqXgrMnUIGlD-piWiPpo&amp;q=Ho+Chi+Minh:+17-19+Ton+That+Tung,Phuong+Pham+Ngu+Lao,Quan+1+/+Ha+Noi:+So+85+Nguyen+Ngoc+Vu,Trung+Hoa,Cau+Giay&amp;zoom=15&amp;language=vi"
                                                    allowfullscreen="">
                                                </iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-7 ">
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
                                                        <button class="btn btn-topcv btn-search-job bg-premium"
                                                            type="submit"><i class="fa-solid fa-magnifying-glass"></i>
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
                                                            data-job-id="880173" data-job-position="6"
                                                            data-box="BoxSearchResult">

                                                            <div class="body">
                                                                <div class="content">
                                                                    <div class="ml-auto">
                                                                        <h3 class="title">
                                                                            <a target="_blank" class="underline-box-job"
                                                                                href="">
                                                                                <span class="bold transform-job-title"
                                                                                    data-toggle="tooltip" title=""
                                                                                    data-placement="top"
                                                                                    data-container="body"
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
                                                                        <label
                                                                            class="salary">{{ $item->getWage->name }}</label>
                                                                        <label class="address" data-toggle="tooltip"
                                                                            data-html="true" title=""
                                                                            data-placement="top" data-container="body"
                                                                            data-original-title="{{ $item->getlocation->name }}">{{ $item->getlocation->name }}</label>
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
                                                    <span class="page-item text-center pagination-container">
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
                {{-- </div> --}}
            </div>
        </div>


        </div>
        <br>
    </body>
@endsection
