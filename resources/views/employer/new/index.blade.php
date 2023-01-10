@php
    use Carbon\Carbon;
@endphp
@extends('employer.layout.index')
@section('content')

    <section class="dashboard-area">
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
                                <div class="manage-job-wrap">
                                    <div class="manage-job-header mt-3 mb-2">
                                        <div class="manage-job-count">
                                            <span class="font-weight-medium color-text-2 mr-1">{{ count($job) }}</span>
                                            <span class="font-weight-medium">công việc được đăng</span>
                                        </div>
                                        <div class="manage-job-count">
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
                                    <search-cv-date :url="{{ json_encode(route('employer.new.index')) }}"
                                        :data-query="{{ json_encode(!empty($request) ? $request->all() : new stdClass()) }}"
                                        :data="{{ json_encode(1) }}">
                                    </search-cv-date>
                                    <div class="table-responsive mt-4">
                                        <table class="table">
                                            <thead>
                                                <tr>
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
                                                        <td>
                                                            <div class="manage-candidate-wrap">
                                                                <h2 class="widget-title pb-1"><a href="job-details.html"
                                                                        class="color-text-2">{{ $item->title }}</a></h2>
                                                                <p>
                                                                    <span><i class="la la-clock-o font-size-16"></i>Còn lại:
                                                                        10
                                                                        ngày</span>
                                                                </p>
                                                            </div><!-- end manage-candidate-wrap -->
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
                                                                                    class="la la-eye" data-toggle="tooltip"
                                                                                    data-placement="top" title=""
                                                                                    data-original-title="Xem tất cả ứng viên đã nộp vào bài job"></i></a>
                                                                        </li>
                                                                        <li class="d-inline-block"><a
                                                                                href="{{ route('employer.new.edit', $item->id) }}"><i
                                                                                    class="la la-edit" data-toggle="tooltip"
                                                                                    data-placement="top" title=""
                                                                                    data-original-title="Sửa bài viết"></i></a>
                                                                        </li>
                                                                        <li class="d-inline-block"><a href="#"><i
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
                                </div>
                            </div><!-- end billing-content -->
                        </div><!-- end billing-form-item -->
                    </div><!-- end col-lg-12 -->
                                </div>
                            </div>
                            {{-- {{ dd($job) }} --}}
                            <div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Logo</th>
                                            <th scope="col">Tiêu Đề</th>
                                            <th scope="col">Vị trí làm việc</th>
                                            <th scope="col"> Hình thức làm việc</th>
                                            <th scope="col"> Trạng Thái</th>
                                            <th scope="col">Số lượng hồ sơ đã nhân</th>
                                            <th scope="col"> Thời gian bắt đầu</th>
                                            <th scope="col">Kết thúc</th>
                                            <th scope="col">Thời gian còn lại</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($job as $item)
                                            <tr>
                                                <td scope="row"><img src="{{ asset($item->logo) }}" alt=""
                                                        width="150px" height="150px"></td>
                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->getprofession->name }}</td>
                                                <td>{{ $item->getwk_form->name }}</td>
                                                <td>{{ $item->status == 0 ? 'Bản nháp' : 'Đang hoạt động' }}</td>
                                                <td>{{ count($item->AllCv) }}</td>
                                                <td>{{ $item->job_time }}</td>
                                                <td>{{ Carbon::parse($item->end_job_time)->format('Y-m-d') }}</td>
                                                <td>

                                                    @if (Carbon::parse($item->end_job_time)->format('m') == $m)
                                                        <h5>
                                                            @if (Carbon::parse($item->end_job_time)->format('d') - Carbon::parse(Carbon::now())->format('d') <= 0)
                                                                {{ route('employer.changestatus', $item->id) }}
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
                                                                    {{ route('employer.changestatus', $item->id) }}
                                                                @else
                                                                    <h5>
                                                                        {{ $all_day -
                                                                            Carbon::parse(Carbon::now())->format('d') +
                                                                            ($mon + 1 - ($mon - Carbon::parse($item->end_job_time)->format('d'))) }}
                                                                        ngày
                                                            @endif
                                                    @endif
                                                </td>
                                                <td><button type="button" class="btn btn-primary btn-action-create">
                                                        <i class="fa fa-plus"></i>xóa
                                                    </button></td>
                                                <td><a href="{{ route('employer.new.edit', $item->id) }}" type="button"
                                                        class="btn btn-primary btn-action-create">
                                                        <i class="fa fa-plus"></i>sửa
                                                    </a></td>
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
                <a href="/employer/profile-employer" class="btn btn-primary "
                    style="margin-left: 36%; width: 140px; margin-top: 20px">Cập nhật ngay
                </a>
            </div>
        </div>
    </div>
@endsection
