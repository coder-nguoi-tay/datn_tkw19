@php
    use Carbon\Carbon;
@endphp
@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="fade-in">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <header class="header header-sticky">
                                <div class="container-fluid">
                                    <label class=" px-md-0 me-md-3">Quản lý Các Gói Cước Đã Mua </label>
                                    <ul class="header-nav ms-3 d-flex">
                                        <form action="{{ route('employer.package.index') }}" class="d-flex" method="get">
                                            <input name="free_word" class="custom-input" placeholder="Tìm Kiếm...."
                                                value="" autocomplete="off" id="free_word">
                                            <button class="nav-link py-0 btn-next-step"
                                                href="{{ route('employer.package.create') }}">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </form>
                                        <button class="nav-link py-0 btn-next-step" data-coreui-toggle="modal"
                                            data-coreui-target="#exampleModalbuyPackage">
                                            mua gói cước
                                        </button>
                                    </ul>
                                </div>
                            </header>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-hover table-bordered text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">Tên gói cước</th>
                                        <th scope="col">Giá</th>
                                        <th scope="col">Cấp bậc</th>
                                        <th scope="col">Thời gian mua</th>
                                        <th scope="col">Thời gian hết hạn</th>
                                        <th scope="col">Trạng Thái</th>
                                        <th scope="col">Action</th>
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
                                                    class="badge {{ $item->status == 1 ? 'bg-success' : 'bg-secondary' }}">{{ $item->status_package }}</span>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-warning btn-radius-auto dropdown-toggle"
                                                        id="action" type="button" data-coreui-toggle="dropdown"
                                                        aria-expanded="false">Chức năng</button>
                                                    <ul class="dropdown-menu" aria-labelledby="action">
                                                        <li>
                                                            <a class="dropdown-item" href="" class="dropdown-item">
                                                                <i class="fa fa-eye"></i>xem chi tiết
                                                            </a>
                                                        </li>
                                                        @if ($item->status == 2)
                                                            <li class="dropdown-divider"></li>
                                                            <li>
                                                                <btn-payment-extend-employer
                                                                    :message-confirm="{{ json_encode('Bạn có chắc muốn gia hạn với mức giá ' . number_format($item->price) . 'đ' . ' không ?') }}"
                                                                    :delete-action="{{ json_encode(route('employer.package.updateTimePayment', $item->id)) }}"
                                                                    :price="{{ json_encode($item->price) }}">
                                                                </btn-payment-extend-employer>
                                                            </li>
                                                        @endif
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <div class="group-paginate">
                            {{-- {{ $news->appends(SearchQueryComponent::alterQuery($request))->links('pagination.admin') }} --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal by payment -->
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
@endsection
