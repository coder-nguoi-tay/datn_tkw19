@extends('client.layout.index')
@section('client')
    <div class="bg-title py-5" data-overlay="0">
        <div class="ht-30"></div>
        <div class="container">
            <div class="row">
                <div class="colxl-12 col-lg-12 col-md-12">
                    <h1 class="ft-medium">Giới thiệu chi tiết các công ty nổi bật</h1>

                </div>
            </div>
        </div>
        <div class="ht-30"></div>
    </div>
    <div class="p-5">

        <div class="detail">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="bg-white rounded px-3 py-4 mb-4">
                            <div class="jbd-01 d-flex align-items-center justify-content-between">
                                <div class="jbd-flex d-flex align-items-center justify-content-start">
                                    <div class="jbd-01-thumb" style="overflow: hidden; width: 150px; height: 150px;">
                                        <img src="{{ $company->logo }}" class="img-fluid"
                                            style="width: 150px; height: 150px;" alt="" />
                                    </div>
                                    <div class="jbd-01-caption pl-3">
                                        <div class="tbd-title">
                                            <h4 class="mb-0 ft-medium fs-md">{{ $company->name }}</h4>
                                        </div>
                                        <div class="jbl_location mb-3"><span><i
                                                    class="lni lni-map-marker mr-1"></i></span>{{ $company->address }}<span
                                                class="medium ft-medium text-warning ml-3">
                                            </span></div>
                                        <div class="jbl_info01">
                                            <span
                                                class="px-2 py-1 ft-medium medium rounded theme-cl theme-bg-light mr-2">Quy
                                                mô: {{ $company->number_tax }}</span>

                                        </div>

                                    </div>
                                </div>
                                {{-- <div class="jbd-01-right text-right hide-1023">


                                    <div class="jbl_button"><a href="javascript:void(0);"
                                            class="btn rounded bg-white border fs-sm ft-medium">Xem công ty</a></div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="company-info box-white bg-white rounded px-3 py-4 mb-4">
                            <h4 class="title">Giới thiệu công ty</h4>
                            <div class="box-body">
                                <p>{!! $company->desceibe !!}</p>
                            </div>
                        </div>
                        <div class="company-info box-white bg-white rounded px-3 py-4 mb-4">
                            <h4 class="title">Tuyển dụng</h4>
                            <div class="box-body">
                                <div class="job-item  bg-highlight  job-ta result-job-hover" data-job-id="692983"
                                    data-job-position="1" data-box="BoxRecruitmentInCompany">
                                    <div class="avatar">
                                        <a target="_blank" href="#" class="company-logo">
                                            <img src="#" class="w-100" alt="Công ty TNHH Concentrix Service Vietnam"
                                                title="Nhân Viên Nhắc Phí (Thu Hồi Phí) - Collection - Thu Nhập 15 Triệu">
                                        </a>
                                    </div>
                                    <div class="body">
                                        <div class="content">
                                            <div class="ml-auto">
                                                <h5 class="title">
                                                    <a target="_blank" class="underline-box-job" href="#s">
                                                        <span class="" data-toggle="tooltip" title=""
                                                            data-placement="top" data-container="body"
                                                            data-original-title="Nhân Viên Nhắc Phí (Thu Hồi Phí) - Collection - Thu Nhập 15 Triệu">Nhân
                                                            Viên Nhắc Phí (Thu Hồi Phí) - Collection - Thu Nhập 15
                                                            Triệu</span>

                                                    </a>
                                                </h5>
                                                <p class="company underline-box-job">
                                                    <a href="#" data-toggle="tooltip" title=""
                                                        data-placement="top" data-container="body" target="_blank"
                                                        data-original-title="Công ty TNHH Concentrix Service Vietnam">Công
                                                        ty
                                                        TNHH Concentrix Service Vietnam</a>
                                                </p>
                                            </div>
                                            <div class="mr-auto text-right">
                                                <p class="deadline">
                                                    Còn <strong>22</strong> ngày để ứng tuyển
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="text-center">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="company-info box-white bg-white rounded px-3 py-4 mb-4 ">
                            <h4 class="title">Địa chỉ công ty</h4>
                            <div class="box-body">
                                <p class="text-dark-gray">
                                    <i class="icons8-map-pin text-highlight"></i>
                                    {{ $company->address }}
                                </p>
                                <div class="company-map">
                                    <p class="map">Bản đồ trụ sở chính :</p>
                                    <iframe width="100%" height="270" frameborder="0" style="border:0"
                                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCVgO8KzHQ8iKcfqXgrMnUIGlD-piWiPpo&amp;q=Toa+nha+QTSC+9,Cong+vien+phan+mem+Quang+Trung,So+02+Duong+To+Ky,Phuong+Tan+Hung+Thuan,Quan+12,TP.+HCM&amp;zoom=15&amp;language=vi"
                                        allowfullscreen="">
                                    </iframe>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
