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
                        <div class="billing-form-item">
                            <div class="billing-content pb-0">
                                <div class="manage-job-wrap">
                                    <div class="manage-job-header mt-3 mb-2">
                                        <div class="manage-job-count">
                                            <span class="font-weight-medium color-text-2 mr-1">{{ count($job) }}</span>
                                            <span class="font-weight-medium">công việc được đăng</span>
                                        </div>
                                        <div class="manage-job-count">
                                            <a href="{{ route('employer.new.topNew') }}"
                                                class="btn btn-info font-weight-medium color-text-2 mr-1  text-white">Công
                                                việc đăng Top</a>
                                            @if ($checkCompany->id_company && $checkCompanyStatus == 1)
                                                <a href="{{ route('employer.new.create') }}"
                                                    class="btn btn-info font-weight-medium color-text-2 mr-1  text-white">Thêm
                                                    tin</a>
                                            @else
                                                <button
                                                    class="btn btn-info font-weight-medium color-text-2 mr-1  text-white"
                                                    data-coreui-toggle="modal" data-coreui-target="#exampleModal"
                                                    type="button">
                                                    Thêm tin
                                                </button>
                                            @endif
                                        </div>
                                    </div>
                                    <div style="float: right !important">
                                        <search-cv-date :url="{{ json_encode(route('employer.new.index')) }}"
                                            :data-query="{{ json_encode(!empty($request) ? $request->all() : new stdClass()) }}"
                                            :data="{{ json_encode(1) }}">
                                        </search-cv-date>
                                    </div>
                                    <br>
                                    <form action="{{ route('employer.new.deleteAllJob') }}" method="post">
                                        @csrf
                                        <button class="btn btn-danger font-weight-medium color-text-2 mr-1 text-white"
                                            id="btn-delete-job" onclick="return confirm('bạn có chắc muốn xóa')">xóa tất
                                            cả</button>
                                        <div class="table-responsive mt-4">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th><input type="checkbox" class="js-check-all"></th>
                                                        <th>Tiêu đề</th>
                                                        <th>Ứng tuyển</th>
                                                        <th>Ngày đăng</th>
                                                        <th>Ngày hết hạn</th>
                                                        <th>Trạng thái</th>
                                                        <th class="text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($job as $item)
                                                        <tr>
                                                            <td><input type="checkbox" name="id[]"
                                                                    value="{{ $item->id }}" class="js-check-one"></td>
                                                            <td>
                                                                <div class="manage-candidate-wrap">
                                                                    <h2 class="widget-title pb-1"><a
                                                                            href="{{ route('employer.new.edit', $item->id) }}"
                                                                            class="color-text-2">{{ $item->title }}</a>
                                                                    </h2>
                                                                    <p>
                                                                        @if (Carbon::parse($item->end_job_time)->format('m') == $m)
                                                                            @if (Carbon::parse($item->end_job_time)->format('d') - Carbon::parse(Carbon::now())->format('d') <= 0)
                                                                                <span class="badge badge-secondary"><i
                                                                                        class="la la-clock-o font-size-16"></i>Hết
                                                                                    hạn</span>
                                                                            @else
                                                                                <i class="la la-clock-o font-size-16"></i>
                                                                                {{ Carbon::parse($item->end_job_time)->format('d') - Carbon::parse(Carbon::now())->format('d') }}
                                                                                ngày
                                                                            @endif
                                                                        @else
                                                                            @if (
                                                                                $all_day -
                                                                                    Carbon::parse($item->job_time)->format('d') +
                                                                                    ($mon - ($mon - Carbon::parse($item->end_job_time)->format('d'))) <=
                                                                                    0)
                                                                                <span class="badge badge-secondary"><i
                                                                                        class="la la-clock-o font-size-16"></i>Hết
                                                                                    hạn</span>
                                                                            @else
                                                                                <i class="la la-clock-o font-size-16"></i>
                                                                                {{ $all_day -
                                                                                    Carbon::parse(Carbon::now())->format('d') +
                                                                                    ($mon + 1 - ($mon - Carbon::parse($item->end_job_time)->format('d'))) }}
                                                                                ngày
                                                                            @endif
                                                                        @endif
                                                                    </p>
                                                                </div>
                                                            </td>
                                                            <td>{{ count($item->AllCv) }}</td>
                                                            <td>{{ $item->job_time }}</td>
                                                            <td>{{ $item->end_job_time }}</td>
                                                            <td><span
                                                                    class="badge p-1 {{ $item->status == 1 ? 'bg-success text-white' : 'bg-secondary text-white' }}">{{ $item->status == 0 ? 'Bản nháp' : 'Đang hoạt động' }}</span>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="manage-candidate-wrap">
                                                                    <div class="bread-action pt-0">
                                                                        <ul class="info-list">
                                                                            <li class="d-inline-block"><a
                                                                                    href="{{ route('employer.new.showdetai', $item->id) }}"><i
                                                                                        class="la la-eye"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-original-title="Xem tất cả ứng viên đã nộp vào bài job"></i></a>
                                                                            </li>
                                                                            <li class="d-inline-block"><a
                                                                                    href="{{ route('employer.new.edit', $item->id) }}"><i
                                                                                        class="la la-edit"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-original-title="Sửa bài viết"></i></a>
                                                                            </li>
                                                                            <li class="d-inline-block"><a
                                                                                    href="{{ route('employer.new.destroy', $item->id) }}"
                                                                                    onclick="return confirm('bạn có chắc muốn xóa')"><i
                                                                                        class="la la-trash"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="top" title=""
                                                                                        data-original-title="xóa bài viết"></i></a>
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
                                    </form>
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
                <a href="/employer/company" class="btn btn-primary"
                    style="margin-left: 36%; width: 140px; margin-top: 20px">Cập nhật ngay
                </a>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.js-check-all').click(function(e) {
                $('input:checkbox').prop('checked', this.checked);
            });
        })
    </script>
@endsection
