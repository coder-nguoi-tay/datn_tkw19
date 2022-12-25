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
                                    <label class=" px-md-0 me-md-3">Quản lý CV</label>
                                    <ul class="header-nav ms-3 d-flex">
                                        <form action="{{ route('employer.quan-ly-cv.index') }}" class="d-flex"
                                            method="get">
                                            <input name="free_word" class="custom-input" placeholder="Tìm Kiếm...."
                                                value="" autocomplete="off" id="free_word">
                                            <button class="nav-link py-0 btn-next-step"
                                                href="{{ route('employer.quan-ly-cv.create') }}">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </form>
                                        <a class="nav-link py-0 btn-next-step"
                                            href="{{ route('employer.quan-ly-cv.create') }}">
                                            Thêm tin
                                        </a>
                                    </ul>
                                </div>
                            </header>
                        </div>
                        <div class="card-body">
                            <div>
                                <table class="table table-striped table-hover table-bordered text-center">
                                    <thead>
                                        <tr>
                                            {{-- <th scope="col">Logo</th> --}}
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
                                                {{-- <td scope="row"><img src="{{ asset($item->logo) }}" alt=""
                                                        width="150px" height="150px"></td> --}}
                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->getprofession->name }}</td>
                                                <td>{{ $item->getwk_form->name }}</td>
                                                <td>{{ $item->status == 0 ? 'INACTIVE' : 'ACTIVE' }}</td>
                                                <td>{{ count($item->AllCv) }}</td>
                                                <td>{{ $item->job_time }}</td>
                                                <td>{{ Carbon::parse($item->end_job_time)->format('Y-m-d') }}</td>
                                                <td>

                                                    @if (Carbon::parse($item->end_job_time)->format('m') == $m)
                                                        <h5>
                                                            @if (Carbon::parse($item->end_job_time)->format('d') - Carbon::parse(Carbon::now())->format('d') <= 0)
                                                                {{-- {{ route('employer.changestatus', $item->id) }} --}}
                                                                Hết hạn
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
                                                                <a class="dropdown-item" href=""
                                                                    class="dropdown-item">
                                                                    <i class="fa fa-eye"></i>gia hạn
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

    <!-- Modal check company -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <create-company
                        :data="{{ json_encode([
                            'urlStore' => route('employer.register-company.store'),
                        ]) }}">
                    </create-company>
                </div>

            </div>
        </div>
    </div>

    <style>

    </style>
@endsection
