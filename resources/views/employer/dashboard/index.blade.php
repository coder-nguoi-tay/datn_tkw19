@extends('layouts.admin')

@section('content')
    <div>
        <div class="content">
            <div class="container-fluid">
                <br>
                {{-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12"> --}}
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{ $job }}</h3>

                                <p>Số Lượng Bài Viết</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer">Xem chi tiết <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ $cv }}</h3>

                                <p>Số lượng Cv Đã Nhận</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{ number_format($totalPayment->surplus) . 'đ' ?? '0đ' }}</h3>

                                <p>Tài Khoản</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{ $tatalecv }}</h3>

                                <p>Số CV Đã Mua</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>

                <widgets
                    :data="{{ json_encode([
                        'countCvMoth1' => $countCvMoth1,
                        'countCvMoth2' => $countCvMoth2,
                        'countCvMoth3' => $countCvMoth3,
                        'countCvMoth4' => $countCvMoth4,
                        'countCvMoth5' => $countCvMoth5,
                        'countCvMoth6' => $countCvMoth6,
                        'countCvMoth7' => $countCvMoth7,
                        'countCvMoth8' => $countCvMoth8,
                        'countCvMoth9' => $countCvMoth9,
                        'countCvMoth10' => $countCvMoth10,
                        'countCvMoth11' => $countCvMoth11,
                        'countCvMoth12' => $countCvMoth12,
                    ]) }}">
                </widgets>
            </div>

        </div>

    </div>
@endsection
