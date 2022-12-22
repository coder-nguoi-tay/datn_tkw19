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
                            <label>Tin tuyển dụng</label>
                        </div>
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="">
                                        <h3> Các bài mà bạn đã đăng</h3>
                                    </div>
                                    <div class="searchFrom pull-right">
                                        <form action="" class="form-inline">
                                            <div>
                                                <input name="search_input" class="form-control" value=""
                                                    autocomplete="off" type="control" id="search_input">
                                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i>
                                                    &nbsp; Tìm kiếm</button>
                                            </div>
                                            @if ($checkCompany->getCompany)
                                                <a href="{{ route('employer.new.create') }}"
                                                    class="btn btn-primary btn-action-create">
                                                    <i class="fa fa-plus"></i>Thêm
                                                </a>
                                            @else
                                                <button href="" type="button" data-coreui-toggle="modal"
                                                    data-coreui-target="#exampleModal"
                                                    class="btn btn-primary btn-action-create">
                                                    <i class="fa fa-plus"></i>Thêm
                                                </button>
                                            @endif
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Logo</th>
                                            <th>Tiêu Đề</th>
                                            <th>Vị trí làm việc</th>
                                            <th> Hình thức làm việc</th>
                                            <th> Trạng Thái</th>
                                            <th>Số lượng hồ sơ đã nhân</th>
                                            <th> Thời gian bắt đầu</th>
                                            <th>Kết thúc</th>
                                            <th>Thời gian còn lại</th>
                                            <th colspan="2">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($job as $item)
                                            <tr>
                                                <th scope="row"><img src="{{ asset($item->logo) }}" alt=""
                                                        width="150px" height="150px"></th>
                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->getprofession->name }}</td>
                                                <td>{{ $item->getwk_form->name }}</td>
                                                <td>{{ $item->status }}</td>
                                                <td>10</td>
                                                <td>{{ $item->job_time }}</td>
                                                <td>{{ Carbon::parse($item->end_job_time)->format('Y-m-d') }}</td>
                                                <td>10</td>
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
@endsection
