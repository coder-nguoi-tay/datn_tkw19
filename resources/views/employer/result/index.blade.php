@php
    use Carbon\Carbon;
@endphp
@extends('layouts.admin')
@section('content')
    <div class="container-fluid px-2 px-md-4">
        <div class="row">
            <div class="col-12">
                <div class="content-wrapper ">
                    <div class="card my-4">
                        <div class="p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-capitalize ps-3">Tất cả các gói cước</h6>
                            </div>
                        </div>
                        <table class="table-responsive-sm table-striped text-center">
                            <thead>
                                <th>Stt</th>
                                <th>Mã đơn hàng</th>
                                <th>số điện thoại</th>
                                <th>số tiền thanh toán</th>
                                <th>ngày hiệu lực</th>
                                <th>ngày hết hạn</th>
                                <th>thời gian khởi tạo</th>
                                <th>trạng thái</th>
                                <th>thao tác</th>

                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>{{ $_GET['vnp_TmnCode'] }}</td>
                                    <td>{{ Auth::guard('user')->user()->getProfile->phone }}</td>
                                    <td>{{ $_GET['vnp_Amount'] }}</td>
                                    <td>{{ Carbon::Now() }}</td>
                                    <td>1 tháng</td>
                                    <td>{{ Carbon::Now() }}</td>
                                    <td>
                                        @if ($_GET['vnp_TransactionStatus'] == '00' && $_GET['vnp_ResponseCode'] == '00')
                                            Thành Công
                                        @else
                                            Thất bại
                                        @endif
                                    </td>
                                    <td>xóa</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
