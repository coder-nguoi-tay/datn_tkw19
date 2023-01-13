@extends('employer.layout.index')
@section('content')
    <section class="dashboard-area">
        <div class="dashboard-content-wrap">
            <div class="container-fluid ">

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
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{ number_format($totalPayment) . 'đ' }}</h3>

                                <p>Tài Khoản</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
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
                        'totalMonnyMouth1' => $totalMonnyMouth1,
                        'totalMonnyMouth2' => $totalMonnyMouth2,
                        'totalMonnyMouth3' => $totalMonnyMouth3,
                        'totalMonnyMouth4' => $totalMonnyMouth4,
                        'totalMonnyMouth5' => $totalMonnyMouth5,
                        'totalMonnyMouth6' => $totalMonnyMouth6,
                        'totalMonnyMouth7' => $totalMonnyMouth7,
                        'totalMonnyMouth8' => $totalMonnyMouth8,
                        'totalMonnyMouth9' => $totalMonnyMouth9,
                        'totalMonnyMouth10' => $totalMonnyMouth10,
                        'totalMonnyMouth11' => $totalMonnyMouth11,
                        'totalMonnyMouth12' => $totalMonnyMouth12,
                        'totalMonny' => $totalMonny,
                        'request' => !empty($request) ? $request->all() : new stdClass(),
                    ]) }}">
                </widgets>
            </div>
        </div>
    </section>

    <div id="back-to-top">
        <i class="la la-angle-up" title="Go top"></i>
    </div>
@endsection
