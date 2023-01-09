@php
    use Carbon\Carbon;
    use App\Enums\UserRecruit;
@endphp
@extends('employer.layout.index')
@section('content')
    {{-- <div class="container">
        <div class="fade-in">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <header class="header header-sticky">
                                <div class="container-fluid">
                                    <label class=" px-md-0 me-md-3">Quản lý CV</label>
                                    <ul class="header-nav ms-3 d-flex">
                                        <search-cv-date :url="{{ json_encode(route('employer.quan-ly-cv.index')) }}"
                                            :data-query="{{ json_encode(!empty($request) ? $request->all() : new stdClass()) }}">
                                        </search-cv-date>
                                    </ul>
                                </div>
                            </header>
                        </div>
                        <div class="card-body">
                            <div class="row gy-3">
                                @if (!$cv->isEmpty())
                                    <table class="table table-striped table-hover table-bordered text-center">
                                        <thead>
                                            <th scope="col">Mã CV</th>
                                            <th scope="col">Hình ảnh</th>
                                            <th scope="col">Họ và Tên</th>
                                            <th scope="col">Ứng tuyển vị trí</th>
                                            <th scope="col">Ngày nộp đơn</th>
                                            <th scope="col">thao tác</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($cv as $item)
                                                <tr>
                                                    <td scope="row">{{ $item->token }}</td>
                                                    <td><img src="{{ asset($item->images) }}" alt="" width="150"
                                                            height="150"></td>
                                                    <td>{{ $item->user_name }}</td>
                                                    <td>{{ $item->majors_name }}</td>

                                                    <td>{{ Carbon::parse($item->create_at_sv)->format('d-m-Y') }}</td>

                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-warning btn-radius-auto dropdown-toggle"
                                                                id="action" type="button" data-coreui-toggle="dropdown"
                                                                aria-expanded="false">Chức năng</button>
                                                            <ul class="dropdown-menu" aria-labelledby="action">
                                                                <li>
                                                                    <a class="dropdown-item"
                                                                        href="{{ asset($item->file_cv) }}" target="_blank"
                                                                        class="dropdown-item">
                                                                        <i class="fa fa-eye"></i>Xem Chi Tiết
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <div class="container">
                                        <div class="alert alert-danger alert-dismissible fade show text-center"
                                            role="alert">
                                            Không tìm thấy dữ liệu mà bạn mong muốn!
                                        </div>
                                    </div>
                                @endif

                            </div>
                            <div class="group-paginate">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="dashboard-content-wrap">
        <div class="container-fluid">
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
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="billing-form-item">
                        <div class="billing-content pb-0">
                            <div class="manage-candidate-wrap d-flex align-items-center justify-content-between pb-4">
                                <div class="bread-details d-flex">
                                    <div class="bread-img flex-shrink-0">
                                        <a href="candidate-details.html" class="d-block">
                                            <img src="images/small-team4.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="manage-candidate-content">
                                        <h2 class="widget-title pb-2"><a href="candidate-details.html"
                                                class="color-text-2">Collin Smith</a></h2>
                                        <p class="font-size-15">
                                            <span class="mr-2">Senior UI / UX Designer</span>
                                            <span class="rating-rating">
                                                <span class="rating-count">4.5</span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star-half-alt"></span>
                                            </span>
                                        </p>
                                        <p class="mt-2 font-size-15">
                                            <span class="mr-2"><i class="la la-map-marker mr-1"></i>Istanbul Turkey</span>
                                            <span class="mr-2">$20 /hr</span>
                                            <span><i class="la la-clock-o mr-1"></i>Part time</span>
                                        </p>
                                    </div><!-- end manage-candidate-content -->
                                </div>
                                <div class="bread-action">
                                    <ul class="info-list">
                                        <li class="d-inline-block mb-0"><a href="#"><i class="la la-eye"
                                                    data-toggle="tooltip" data-placement="top" title=""
                                                    data-original-title="View"></i></a></li>
                                        <li class="d-inline-block mb-0"><a href="#"><i class="la la-envelope-o"
                                                    data-toggle="tooltip" data-placement="top" title=""
                                                    data-original-title="Send Message"></i></a></li>
                                        <li class="d-inline-block mb-0"><a href="#"><i class="la la-trash"
                                                    data-toggle="tooltip" data-placement="top" title=""
                                                    data-original-title="Remove"></i></a></li>
                                    </ul>
                                </div>
                            </div><!-- end manage-candidate-wrap -->
                            <div class="section-block"></div>
                            <div class="manage-candidate-wrap d-flex align-items-center justify-content-between pb-4 pt-4">
                                <div class="bread-details d-flex">
                                    <div class="bread-img flex-shrink-0">
                                        <a href="candidate-details.html" class="d-block">
                                            <img src="images/small-team3.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="manage-candidate-content">
                                        <h2 class="widget-title pb-2"><a href="candidate-details.html"
                                                class="color-text-2">Carlos Dobson</a></h2>
                                        <p class="font-size-15">
                                            <span class="mr-2">Wordpress Developer</span>
                                            <span class="rating-rating">
                                                <span class="rating-count">4.5</span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star-half-alt"></span>
                                            </span>
                                        </p>
                                        <p class="mt-2 font-size-15">
                                            <span class="mr-2"><i class="la la-map-marker mr-1"></i>Brisbane,
                                                Australia</span>
                                            <span class="mr-2">$20 /hr</span>
                                            <span><i class="la la-clock-o mr-1"></i>Full time</span>
                                        </p>
                                    </div><!-- end manage-candidate-content -->
                                </div>
                                <div class="bread-action">
                                    <ul class="info-list">
                                        <li class="d-inline-block mb-0"><a href="#"><i class="la la-eye"
                                                    data-toggle="tooltip" data-placement="top" title=""
                                                    data-original-title="View"></i></a></li>
                                        <li class="d-inline-block mb-0"><a href="#"><i class="la la-envelope-o"
                                                    data-toggle="tooltip" data-placement="top" title=""
                                                    data-original-title="Send Message"></i></a></li>
                                        <li class="d-inline-block mb-0"><a href="#"><i class="la la-trash"
                                                    data-toggle="tooltip" data-placement="top" title=""
                                                    data-original-title="Remove"></i></a></li>
                                    </ul>
                                </div>
                            </div><!-- end manage-candidate-wrap -->
                            <div class="section-block"></div>
                            <div class="manage-candidate-wrap d-flex align-items-center justify-content-between pb-4 pt-4">
                                <div class="bread-details d-flex">
                                    <div class="bread-img flex-shrink-0">
                                        <a href="candidate-details.html" class="d-block">
                                            <img src="images/small-team2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="manage-candidate-content">
                                        <h2 class="widget-title pb-2"><a href="candidate-details.html"
                                                class="color-text-2">Dahlia Divers</a></h2>
                                        <p class="font-size-15">
                                            <span class="mr-2">Web Developer</span>
                                            <span class="rating-rating">
                                                <span class="rating-count">4.5</span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star-half-alt"></span>
                                            </span>
                                        </p>
                                        <p class="mt-2 font-size-15">
                                            <span class="mr-2"><i class="la la-map-marker mr-1"></i>Moscow,
                                                Russia</span>
                                            <span class="mr-2">$20 /hr</span>
                                            <span><i class="la la-clock-o mr-1"></i>Part time</span>
                                        </p>
                                    </div><!-- end manage-candidate-content -->
                                </div>
                                <div class="bread-action">
                                    <ul class="info-list">
                                        <li class="d-inline-block mb-0"><a href="#"><i class="la la-eye"
                                                    data-toggle="tooltip" data-placement="top" title=""
                                                    data-original-title="View"></i></a></li>
                                        <li class="d-inline-block mb-0"><a href="#"><i class="la la-envelope-o"
                                                    data-toggle="tooltip" data-placement="top" title=""
                                                    data-original-title="Send Message"></i></a></li>
                                        <li class="d-inline-block mb-0"><a href="#"><i class="la la-trash"
                                                    data-toggle="tooltip" data-placement="top" title=""
                                                    data-original-title="Remove"></i></a></li>
                                    </ul>
                                </div>
                            </div><!-- end manage-candidate-wrap -->
                            <div class="section-block"></div>
                            <div class="manage-candidate-wrap d-flex align-items-center justify-content-between pb-4 pt-4">
                                <div class="bread-details d-flex">
                                    <div class="bread-img flex-shrink-0">
                                        <a href="candidate-details.html" class="d-block">
                                            <img src="images/small-team1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="manage-candidate-content">
                                        <h2 class="widget-title pb-2"><a href="candidate-details.html"
                                                class="color-text-2">Luke Martin</a></h2>
                                        <p class="font-size-15">
                                            <span class="mr-2">Front-End Developer</span>
                                            <span class="rating-rating">
                                                <span class="rating-count">4.5</span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star-half-alt"></span>
                                            </span>
                                        </p>
                                        <p class="mt-2 font-size-15">
                                            <span class="mr-2"><i class="la la-map-marker mr-1"></i>London, United
                                                Kingdom</span>
                                            <span class="mr-2">$20 /hr</span>
                                            <span><i class="la la-clock-o mr-1"></i>Full time</span>
                                        </p>
                                    </div><!-- end manage-candidate-content -->
                                </div>
                                <div class="bread-action">
                                    <ul class="info-list">
                                        <li class="d-inline-block mb-0"><a href="#"><i class="la la-eye"
                                                    data-toggle="tooltip" data-placement="top" title=""
                                                    data-original-title="View"></i></a></li>
                                        <li class="d-inline-block mb-0"><a href="#"><i class="la la-envelope-o"
                                                    data-toggle="tooltip" data-placement="top" title=""
                                                    data-original-title="Send Message"></i></a></li>
                                        <li class="d-inline-block mb-0"><a href="#"><i class="la la-trash"
                                                    data-toggle="tooltip" data-placement="top" title=""
                                                    data-original-title="Remove"></i></a></li>
                                    </ul>
                                </div>
                            </div><!-- end manage-candidate-wrap -->
                        </div><!-- end billing-content -->
                    </div><!-- end billing-form-item -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-navigation-wrap mt-4">
                        <div class="page-navigation mx-auto">
                            <a href="#" class="page-go page-prev">
                                <i class="la la-arrow-left"></i>
                            </a>
                            <ul class="page-navigation-nav">
                                <li><a href="#" class="page-go-link">1</a></li>
                                <li class="active"><a href="#" class="page-go-link">2</a></li>
                                <li><a href="#" class="page-go-link">3</a></li>
                                <li><a href="#" class="page-go-link">4</a></li>
                                <li><a href="#" class="page-go-link">5</a></li>
                            </ul>
                            <a href="#" class="page-go page-next">
                                <i class="la la-arrow-right"></i>
                            </a>
                        </div>
                    </div><!-- end page-navigation-wrap -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="copy-right margin-top-50px padding-top-20px padding-bottom-20px">
                        <p class="copy__desc">
                            Copyright ©2020 Zobstar Inc. Made with
                            <span class="la la-heart-o"></span> by <a
                                href="https://themeforest.net/user/techydevs/portfolio">TechyDevs</a>
                        </p>
                        <ul class="list-items">
                            <li><a href="#">Terms of Use,</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div><!-- end copy-right -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div>
@endsection
