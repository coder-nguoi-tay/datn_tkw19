@php
    use Carbon\Carbon;
@endphp
@extends('employer.layout.index')
@section('content')
    <section class="dashboard-area">
        <div class="dashboard-content-wrap">
            <div class="container-fluid mt-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
                            <ul class="list-items d-flex align-items-center">
                                @if (isset($breadcrumbs))
                                    @foreach ($breadcrumbs as $key => $breadcrumb)
                                        @if ($key != count($breadcrumbs) - 1)
                                            <li class="active__list-item">
                                                <a href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['name'] }}</a>
                                            </li>
                                        @else
                                            <li class="active__list-item active">{{ $breadcrumb }}</li>
                                        @endif
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="billing-form-item pl-10 pr-10">
                            <section class="section-box mt-50">
                                <div class="row">
                                    <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                                        <div class="job-overview">
                                            <h5 class="border-bottom pb-15 mb-30"
                                                style="font-size: 28px; font-weight: 500px">Thông tin gói cước:
                                                {{ $package->name }}
                                            </h5>
                                            <div class="row">

                                                <div class="col-md-12  d-flex">
                                                    <div class="sidebar-icon-item">
                                                        <img src="../../wp-content/themes/jobbox/assets/imgs/page/job-single/salary.svg"
                                                            alt="Salary">
                                                    </div>
                                                    <div class="sidebar-text-info " style="width: 100%;">
                                                        <span class=" mb-10"
                                                            style="font-size: 24px; width:  100% !important;">Giá:
                                                            {{ number_format($package->price) }}đ</span>

                                                    </div>
                                                </div>

                                                <div class="col-md-12 d-flex ">
                                                    <div class="sidebar-icon-item">
                                                        <img src="../../wp-content/themes/jobbox/assets/imgs/page/job-single/job-type.svg"
                                                            alt="Job type">
                                                    </div>
                                                    <div class="sidebar-text-info " style="width: 100%;">
                                                        <span class=" mb-10" style="font-size: 24px; width: 100%;">Thời
                                                            gian:@if ($package->lever_package)
                                                                @if ($package->lever_package == 1)
                                                                    1 ngày
                                                                @elseif ($package->lever_package == 2)
                                                                    7 ngày
                                                                @else
                                                                    30 ngày
                                                                @endif
                                                            @endif
                                                        </span>


                                                    </div>
                                                </div>
                                                <div class="col-md-12  d-flex">
                                                    <div class="sidebar-icon-item">
                                                        <img src="../../wp-content/themes/jobbox/assets/imgs/page/job-single/updated.svg"
                                                            alt="Updated">
                                                    </div>
                                                    <div class="sidebar-text-info ml-10" style="width: 100%;">
                                                        <span class="mb-10" style="font-size: 24px; width: 100%;">Ngày
                                                            đăng: {{ $package->created_at }}</span>

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row mt-25">

                                            </div>
                                            <br>
                                            <div class="content-single">
                                                <h4>Mô tả gói cước</h4>
                                                <ul>
                                                    <li style="font-style: 20px">{{ $package->describe }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="back-to-top">
        <i class="la la-angle-up" title="Go top"></i>
    </div>
@endsection
