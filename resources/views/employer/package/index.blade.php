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
                    <div class="col-lg-12">
                        <div class="billing-form-item pl-10 pr-10">
                            <div class="manage-job-header mt-3">
                                <div class="manage-job-count">
                                </div>
                                <div class="manage-job-count">
                                    <button class="btn btn-info col-12 text-white" data-coreui-toggle="modal"
                                        data-coreui-target="#exampleModalbuyPackage">
                                        mua gói cước
                                    </button>
                                </div>
                            </div>
                            <div class="billing-content">
                                <div class="manage-job-wrap">
                                    <div class="table-responsive">

                                        <div style="float: right !important">
                                            <search-cv-date :url="{{ json_encode(route('employer.package.index')) }}"
                                                :data-query="{{ json_encode(!empty($request) ? $request->all() : new stdClass()) }}"
                                                :data="{{ json_encode(2) }}">
                                            </search-cv-date>
                                        </div>
                                        <br>
                                        <br>    
                                        <table class="table text-center mt-3">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Tên gói cước</th>
                                                    <th scope="col">Giá</th>
                                                    <th scope="col">Cấp bậc</th>
                                                    <th scope="col">Thời gian mua</th>
                                                    <th scope="col">Thời gian hết hạn</th>
                                                    <th scope="col">Trạng Thái</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($pachageForEmployer as $item)
                                                    <tr>

                                                        <td>{{ $item->name_package }}</td>
                                                        <td>{{ number_format($item->price) }}đ</td>
                                                        <td>{{ $item->lever_package }}</td>
                                                        <td>{{ $item->start_time }}</td>
                                                        <td>{{ $item->end_time }}</td>
                                                        <td>
                                                            <span
                                                                class="badge  p-1 {{ $item->status == 1 ? 'bg-success text-white' : 'bg-secondary text-white' }}">{{ $item->status_package }}</span>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="manage-candidate-wrap">
                                                                <div class="bread-action pt-0">
                                                                    <ul class="info-list">
                                                                        <li class="d-inline-block"><a
                                                                                href="{{ route('employer.package.show', $item->id) }}"><i
                                                                                    class="la la-eye" data-toggle="tooltip"
                                                                                    data-placement="top" title=""
                                                                                    data-original-title="Xem chi tiết gói cước"></i></a>
                                                                        </li>
                                                                        @if ($item->status == 2)
                                                                            <li class="d-inline-block">
                                                                                <btn-payment-extend-employer
                                                                                    :message-confirm="{{ json_encode('Bạn có chắc muốn gia hạn với mức giá ' . number_format($item->price) . 'đ' . ' không ?') }}"
                                                                                    :delete-action="{{ json_encode(route('employer.package.updateTimePayment', $item->id)) }}"
                                                                                    :price="{{ json_encode($item->price) }}"
                                                                                    :acc-payment="{{ json_encode($accPayment) }}">
                                                                                </btn-payment-extend-employer>
                                                                            </li>
                                                                        @endif
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
    <account-payment
        :data="{{ json_encode([
            'urlStore' => route('employer.package.payment'),
            'data' => $data,
            'total' => $total,
            'accPayment' => $accPayment,
            'packageAttractive' => $packageAttractive,
            'checkPackage' => $checkPackage,
        ]) }}">
    </account-payment>
    <div id="back-to-top">
        <i class="la la-angle-up" title="Go top"></i>
    </div>
@endsection
