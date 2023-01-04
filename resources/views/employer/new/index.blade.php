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
                                    <label class=" px-md-0 me-md-3">Quản Lý Đăng Tin</label>
                                    <ul class="header-nav ms-3 d-flex">
                                        <search-cv-date :url="{{ json_encode(route('employer.new.index')) }}"
                                            :data-query="{{ json_encode(!empty($request) ? $request->all() : new stdClass()) }}"
                                            :data="{{ json_encode(1) }}">
                                        </search-cv-date>
                                        @if ($checkCompany->id_company && $checkCompanyStatus == 1)
                                            <a class="nav-link py-0 btn-next-step"
                                                href="{{ route('employer.new.create') }}">
                                                Thêm tin
                                            </a>
                                        @else
                                            <button class="nav-link py-0 btn-next-step" data-coreui-toggle="modal"
                                                data-coreui-target="#exampleModal" type="button">
                                                Thêm tin
                                            </button>
                                        @endif

                                    </ul>
                                </div>
                            </header>
                        </div>
                        <div class="card-body">
                            <div>
                                <table class="table table-striped table-hover table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col">Tiêu Đề</th>
                                            <th scope="col">Vị trí làm việc</th>
                                            <th scope="col"> Hình thức làm việc</th>
                                            <th scope="col"> Trạng Thái</th>
                                            <th scope="col">Số lượng hồ sơ đã nhân</th>
                                            <th scope="col"> Thời gian bắt đầu</th>
                                            <th scope="col">Thời gian còn lại</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($job as $item)
                                            <tr>
                                                {{-- <td scope="row"><img src="{{ asset($item->logo) }}" alt=""
                                                        width="150px" height="150px"></td> --}}
                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->getprofession->name }}</td>
                                                <td>{{ $item->getwk_form->name }}</td>
                                                {{-- <td>{{ $item->status == 0 ? 'INACTIVE' : 'ACTIVE' }}</td> --}}
                                                <td>
                                                    <change-status-new :data="{{ json_encode($item->status) }}"
                                                        :route="{{ json_encode(route('employer.new.changeStus', $item->id)) }}">
                                                    </change-status-new>
                                                </td>
                                                <td>{{ count($item->AllCv) }}</td>
                                                <td>{{ $item->job_time }}</td>
                                                <td>
                                                    @if (Carbon::parse($item->end_job_time)->format('m') == $m)
                                                        <h5>
                                                            @if (Carbon::parse($item->end_job_time)->format('d') - Carbon::parse(Carbon::now())->format('d') <= 0)
                                                                <span class="badge bg-secondary">Hết hạn</span>
                                                            @else
                                                                {{ Carbon::parse($item->end_job_time)->format('d') - Carbon::parse(Carbon::now())->format('d') }}
                                                                ngày
                                                            @endif
                                                        @else
                                                            @if ($all_day -
                                                                Carbon::parse($item->job_time)->format('d') +
                                                                ($mon - ($mon - Carbon::parse($item->end_job_time)->format('d'))) <=
                                                                0)
                                                                <h5>
                                                                    <span class="badge bg-secondary">Hết hạn</span>
                                                                @else
                                                                    <h5>
                                                                        {{ $all_day -
                                                                            Carbon::parse(Carbon::now())->format('d') +
                                                                            ($mon + 1 - ($mon - Carbon::parse($item->end_job_time)->format('d'))) }}
                                                                        ngày
                                                            @endif
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-warning btn-radius-auto dropdown-toggle"
                                                            id="action" type="button" data-coreui-toggle="dropdown"
                                                            aria-expanded="false">Chức năng</button>
                                                        <ul class="dropdown-menu" aria-labelledby="action">
                                                            <li>
                                                                <a class="dropdown-item"
                                                                    href="{{ route('employer.new.edit', $item->id) }}"
                                                                    class="dropdown-item">
                                                                    <i class="fa fa-eye"></i>xem chi tiết
                                                                </a>
                                                            </li>
                                                            <li class="dropdown-divider"></li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                    href="{{ route('employer.new.showdetai', $item->id) }}"
                                                                    class="dropdown-item">
                                                                    <i class="fa fa-eye"></i>Tất cả hồ sơ đã nhận
                                                                </a>
                                                            </li>
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
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: red">Thông báo</h5>
                    <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <br>
                    <p style="text-align: center ">Tài khoản của bạn chưa cập nhật thông tin công ty.
                    </p>
                    <p style="text-align: center "> Để sử dụng tính năng này vui lòng cập nhật thông tin của bạn. và xác
                        thực để có thể đăng tin</p>
                </div>
                <a href="{{ route('employer.profile.index') }}" class="btn btn-primary "
                    style="margin-left: 36%; width: 140px; margin-top: 20px">Cập nhật ngay
                </a>
            </div>
        </div>
    </div>
@endsection
