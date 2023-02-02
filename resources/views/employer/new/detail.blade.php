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
                        </div><!-- end breadcrumb-content -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="billing-form-item">
                            <div class="billing-content pb-0">
                                <div class="manage-job-wrap">
                                    <div class="table-responsive">
                                        <div style="float: right !important">
                                            <search-cv-date :url="{{ json_encode(route('employer.new.showdetai', $id)) }}"
                                                :data-query="{{ json_encode(!empty($request) ? $request->all() : new stdClass()) }}"
                                                :data="{{ json_encode(2) }}">
                                            </search-cv-date>
                                        </div>
                                        <table class="table text-center mt-5">
                                            <thead>
                                                <tr>
                                                    <th>Mã CV</th>
                                                    <th>Hình ảnh</th>
                                                    <th>Ứng tuyển vị trí</th>
                                                    <th>Ngày nộp đơn</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($cv as $item)
                                                    <tr>
                                                        <td>{{ $item->token }}</td>
                                                        <td class="text-center">
                                                            <div class="manage-candidate-wrap">
                                                                <img src="{{ asset($item->images) }}" alt=""
                                                                    width="150" height="150">
                                                                <p class="mt-1 text-center">
                                                                    <span><b>{{ $item->user_name }}</b></span>
                                                                </p>
                                                            </div><!-- end manage-candidate-wrap -->
                                                        </td>
                                                        <td>{{ $item->majors_name }}</td>
                                                        <td>{{ Carbon::parse($item->create_at_sv)->format('d-m-Y') }}</td>
                                                        <td class="text-center">
                                                            <div class="manage-candidate-wrap">
                                                                <div class="bread-action pt-0">
                                                                    <ul class="info-list">
                                                                        <li class="d-inline-block"><a
                                                                                href="{{ asset($item->file_cv) }}"
                                                                                target="_blank"><i class="la la-eye"
                                                                                    data-toggle="tooltip"
                                                                                    data-placement="top" title=""
                                                                                    data-original-title="Xem chi tiết"></i></a>
                                                                        </li>

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!-- end billing-content -->
                        </div><!-- end billing-form-item -->
                    </div><!-- end col-lg-12 -->
                </div>
            </div><!-- end container-fluid -->
        </div>
    </section><!-- end dashboard-area -->

    <div id="back-to-top">
        <i class="la la-angle-up" title="Go top"></i>
    </div>
@endsection
