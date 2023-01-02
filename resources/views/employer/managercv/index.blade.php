@php
    use Carbon\Carbon;
    use App\Enums\UserRecruit;
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
                                        <search-cv-date :url="{{ json_encode(route('employer.quan-ly-cv.index')) }}"
                                            :data-query="{{ json_encode(!empty($request) ? $request->all() : new stdClass()) }}">
                                        </search-cv-date>
                                        <button class="nav-link py-0 btn-next-step" data-coreui-toggle="modal"
                                            data-coreui-target="#exampleModalSeacrhSpeed">
                                            Tìm Nhanh Ứng Viên
                                        </button>
                                    </ul>
                                </div>
                            </header>
                        </div>
                        <div class="card-body">
                            <div class="row gy-3">
                                <table class="table table-striped table-hover table-bordered text-center">
                                    <thead>
                                        <th scope="col">Hình ảnh</th>
                                        <th scope="col">Họ và Tên</th>
                                        <th scope="col">Ứng tuyển vị trí</th>
                                        <th scope="col">Ngày nộp đơn</th>
                                        <th scope="col">thao tác</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($cv as $item)
                                            <tr>
                                                <td><img src="{{ asset($item->images) }}" alt="" width="150"
                                                        height="150"></td>
                                                <td>{{ $item->user_name }}</td>
                                                <td>{{ $item->majors_name }}</td>

                                                <td>{{ Carbon::parse($item->create_at_sv)->format('d-m-Y') }}</td>
                                                {{-- <td>{{ $item->status == 0 ? 'chưa xem' : 'đã xem' }}</td> --}}
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-warning btn-radius-auto dropdown-toggle"
                                                            id="action" type="button" data-coreui-toggle="dropdown"
                                                            aria-expanded="false">Chức năng</button>
                                                        <ul class="dropdown-menu" aria-labelledby="action">
                                                            <li>
                                                                <a class="dropdown-item" href="{{ asset($item->file_cv) }}"
                                                                    target="_blank" class="dropdown-item">
                                                                    <i class="fa fa-eye"></i>Xem Chi Tiết
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
        <!-- Modal -->
        <search-seeker :data="{{ json_encode(UserRecruit::parseArray()) }}"
            :query="{{ json_encode([
                'urlStore' => route('employer.register-company.store'),
                'location' => $location,
                'profession' => $profession,
                'skill' => $skill,
                'majors' => $majors,
            ]) }}">
        </search-seeker>
    </div>
@endsection
