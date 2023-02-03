@php
    use Carbon\Carbon;
    use App\Enums\UserRecruit;
@endphp
@extends('employer.layout.index')
@section('content')
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
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="billing-form-item p-5">
                        <div style="float: right !important">
                            <search-cv-date :url="{{ json_encode(route('employer.cv-da-mua.index')) }}"
                                :data-query="{{ json_encode(!empty($request) ? $request->all() : new stdClass()) }}"
                                :data="{{ json_encode(2) }}">
                            </search-cv-date>
                        </div>
                        <br>
                        @foreach ($tatalecv as $item)
                            <div class="billing-content pb-0 mt-5">
                                <div class="manage-candidate-wrap d-flex align-items-center justify-content-between pb-4">
                                    <div class="bread-details d-flex">
                                        <div class="bread-img flex-shrink-0">
                                            <a href="{{ route('employer.quan-ly-cv.show', $item->id) }}" class="d-block">
                                                <img src="{{ asset($item->images) }}" alt="">
                                            </a>
                                        </div>
                                        <div class="manage-candidate-content">
                                            <h2 class="widget-title pb-2"><a
                                                    href="{{ route('employer.quan-ly-cv.show', $item->id) }}"
                                                    class="color-text-2">{{ $item->user->name }}</a></h2>
                                            <p class="font-size-15">
                                                <span class="mr-2">{{ $item->majors }}</span>
                                            </p>
                                            <p class="mt-2 font-size-15">
                                                <span class="mr-2"><i
                                                        class="la la-map-marker mr-1"></i>{{ $item->address }}</span>
                                            </p>
                                        </div>
                                        <div class="manage-candidate-content">
                                            <h2 class="widget-title pb-2 mx-5"><a href="#" class="color-text-2">Ngày
                                                    mua hồ sơ</a></h2>
                                            <p class="font-size-15 mx-5">
                                                <span
                                                    class="mr-2">{{ Carbon::parse($item->updated_at)->format('d-m-Y') }}</span>
                                            </p>
                                        </div>

                                    </div>
                                    <div class="bread-action">
                                        <ul class="info-list">
                                            <li class="d-inline-block mb-0"><a
                                                    href="{{ route('employer.quan-ly-cv.show', $item->id) }}"><i
                                                        class="la la-eye" data-toggle="tooltip" data-placement="top"
                                                        title="" data-original-title="View"></i></a></li>
                                        </ul>
                                    </div>
                                </div><!-- end manage-candidate-wrap -->
                                <div class="section-block"></div>
                            </div><!-- end billing-content -->
                        @endforeach

                    </div><!-- end billing-form-item -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-navigation-wrap mt-4">
                        <div class="page-navigation mx-auto">
                            <a href="" class="page-go page-prev">
                                <i class="la la-arrow-left"></i>
                            </a>
                            <ul class="page-navigation-nav">
                                <li class="active"><a href="#" class="page-go-link">1</a></li>
                                <li><a href="" class="page-go-link">2</a></li>
                                <li><a href="" class="page-go-link">3</a></li>
                                <li><a href="" class="page-go-link">4</a></li>
                                <li><a href="" class="page-go-link">5</a></li>
                            </ul>
                            <a href="" class="page-go page-next">
                                <i class="la la-arrow-right"></i>
                            </a>
                        </div>
                    </div><!-- end page-navigation-wrap -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div>
@endsection
