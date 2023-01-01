@extends('client.layout.index')
@section('client')
    <div class="bg-title py-5" data-overlay="0">
        <div class="ht-30"></div>
        <div class="container">
            <div class="row">
                <div class="colxl-12 col-lg-12 col-md-12">
                    <h1 class="ft-medium">Giới thiệu về các công ty nổi bật</h1>

                </div>
            </div>
        </div>
        <div class="ht-30"></div>
    </div>
    <div class="featured-companies p-5">
        <div class="company-header text-center">
            <h2 class="title">DANH SÁCH CÁC CÔNG TY NỔI BẬT</h2>
        </div>
        <div class="container p-3">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="box-company item-hover">
                        <div class="company-banner">
                            <a href="#">
                                <div class="cover-wraper">
                                    <img src="https://static.topcv.vn/company_covers/DdzvuyJVOuBcILv9oMI5.jpg"
                                        alt="Công ty TNHH Concentrix Service Vietnam" class="img-fluid">
                                </div>
                            </a>

                        </div>
                        <div class="company-info p-2">
                            <h3>
                                <a href="#" class="company-name" target="_blank">Công ty TNHH Concentrix Service
                                    Vietnam</a>
                            </h3>
                            <div class="company-description">
                                <p>" Concentrix là một công ty hàng đầu thế giới của Mỹ trong lĩnh vực dịch vụ chăm sóc
                                    khách hàng có mặt ở trên 44 quốc gia với tổng số nhân sự lên tới trên 250.000 nhân
                                    viên.Concentrix Việt Nam luôn đầu tư và nỗ lực nhằm cung cấp môi trường tốt nhất như:Cơ
                                    hội học hỏi &amp; phát triểnKết nối thường xuyên với nhân viên, tạo môi trường tốt..."
                                </p>
                            </div>
                        </div>
                    </div>
                </div>







            </div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                </div>
            </div>
        </div>
    </div>
@endsection
