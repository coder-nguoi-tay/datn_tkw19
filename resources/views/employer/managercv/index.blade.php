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
                                    <div class="searchFrom pull-right">
                                        <form action="" class="form-inline">
                                            <div>
                                                <input name="search_input" class="form-control" value=""
                                                    autocomplete="off" type="control" id="search_input">
                                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i>
                                                    &nbsp; Tìm kiếm</button>
                                            </div>
                                            <a href="{{ route('employer.new.create') }}"
                                                class="btn btn-primary btn-action-create">
                                                <i class="fa fa-plus"></i>Thêm
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="row gy-3">
                                <table class="table table-responsive-sm table-striped text-center">
                                    <thead>
                                        <th scope="col">Hình ảnh</th>
                                        <th scope="col">Họ và Tên</th>
                                        <th scope="col">Ứng tuyển vị trí</th>
                                        <th scope="col">Chuyên ngành</th>
                                        <th scope="col">Kỹ năng</th>
                                        <th scope="col">Ngày nộp đơn</th>
                                        <th scope="col">Link Cv</th>
                                        <th scope="col">trạng thái</th>
                                        <th scope="col">thao tác</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($cv as $item)
                                            <tr>
                                                <td><img src="{{ $item->images }}" alt="" width="150"
                                                        height="150"></td>
                                                <td>{{ $item->user_name }}</td>
                                                <td>{{ $item->profession_name }}</td>
                                                <td> {{ $item->majors_name }} </td>
                                                <td>
                                                    @foreach ($item->getskill as $value)
                                                        {{ $value->name }}
                                                    @endforeach
                                                </td>
                                                <td>{{ Carbon::parse($item->create_at_sv)->format('d-m-Y') }}</td>
                                                <td><a href="{{ asset($item->file_cv) }}" target="_blank"
                                                        rel="noopener noreferrer">Link</a></td>
                                                <td>{{ $item->status == 0 ? 'chưa xem' : 'đã xem' }}</td>
                                                <td>xóa</td>
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
@endsection
