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
                                            <input name="search_input" class="form-control" value="" autocomplete="off" type="control" id="search_input">
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i>
                                                &nbsp; Tìm kiếm</button>
                                        </div>
                                        <a href="{{ route('employer.new.create') }}" class="btn btn-primary btn-action-create">
                                            <i class="fa fa-plus"></i>Thêm
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-5 col-sm-5 col-xs-12 group-select-page d-flex">
                                {{-- <limit-page-option :limit-page-option="{{ json_encode([20, 50, 100]) }}"
                                :new-size-limit="{{ $newSizeLimit }}"></limit-page-option> --}}
                            </div>
                            <div class="col-md-7 col-sm-7 col-xs-12 group-paginate">
                                {{-- {{ $news->appends(SearchQueryComponent::alterQuery($request))->links('pagination.admin')
                                }} --}}
                            </div>
                        </div>
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
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                    </tr>

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

@endsection