@extends('master')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                        <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute"
                            style="width: 64px; height: 64px;">
                            <i class="material-icons opacity-10">weekend</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">Doanh thu</p>
                            <h4 class="mb-0">{{ isset($total_money) ? number_format($total_money) : '0' }} (VND)</h4>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-3">
                        <p class="mb-0"><span class="text-success text-sm font-weight-bolder"></span></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                        <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute"
                            style="width: 64px; height: 64px;">
                            <i class="material-icons opacity-10">person</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">ứng viên mới</p>
                            <h4 class="mb-0">{{ isset($total_seeker) ? number_format($total_seeker) : '0' }}</h4>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-3">
                        <p class="mb-0"><span class="text-success text-sm font-weight-bolder"></span></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                        <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute"
                            style="width: 64px; height: 64px;">
                            <i class="material-icons opacity-10">person</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">Nhà tuyển dụng mới</p>
                            <h4 class="mb-0">{{ isset($total_employer) ? number_format($total_employer) : '0' }}</h4>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-3">
                        <p class="mb-0"><span class="text-danger text-sm font-weight-bolder"></span></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                        <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute"
                            style="width: 64px; height: 64px;">
                            <i class="material-icons opacity-10">weekend</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">bài viết</p>
                            <h4 class="mb-0">{{ isset($total_job) ? number_format($total_job) : '0' }}</h4>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-3">
                        <p class="mb-0"><span class="text-success text-sm font-weight-bolder"></span></p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <statistical
            :data="{{ json_encode([
                'countPaymentMoth1' => $countPaymentMoth1->price ?? 0,
                'countPaymentMoth2' => $countPaymentMoth2->price ?? 0,
                'countPaymentMoth3' => $countPaymentMoth3->price ?? 0,
                'countPaymentMoth4' => $countPaymentMoth4->price ?? 0,
                'countPaymentMoth5' => $countPaymentMoth5->price ?? 0,
                'countPaymentMoth6' => $countPaymentMoth6->price ?? 0,
                'countPaymentMoth7' => $countPaymentMoth7->price ?? 0,
                'countPaymentMoth8' => $countPaymentMoth8->price ?? 0,
                'countPaymentMoth9' => $countPaymentMoth9->price ?? 0,
                'countPaymentMoth10' => $countPaymentMoth10->price ?? 0,
                'countPaymentMoth11' => $countPaymentMoth11->price ?? 0,
                'countPaymentMoth12' => $countPaymentMoth12->price ?? 0,
                'request' => !empty($request) ? $request->all() : new stdClass(),
                'totalPayment' => isset($total_money) ? number_format($total_money) : 0,
                'totalJob' => $total_job,
            ]) }}"
            :total-new="{{ json_encode([
                'countNewMoth1' => $countNewMoth1,
                'countNewMoth2' => $countNewMoth2,
                'countNewMoth3' => $countNewMoth3,
                'countNewMoth4' => $countNewMoth4,
                'countNewMoth5' => $countNewMoth5,
                'countNewMoth6' => $countNewMoth6,
                'countNewMoth7' => $countNewMoth7,
                'countNewMoth8' => $countNewMoth8,
                'countNewMoth9' => $countNewMoth9,
                'countNewMoth10' => $countNewMoth10,
                'countNewMoth11' => $countNewMoth11,
                'countNewMoth12' => $countNewMoth12,
            ]) }}">
        </statistical>
        <br>
        <footer class="footer py-4  ">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>,
                            made with <i class="fa fa-heart"></i> by
                            <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                            for a better web.
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative
                                    Tim</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted"
                                    target="_blank">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/blog" class="nav-link text-muted"
                                    target="_blank">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted"
                                    target="_blank">License</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection
