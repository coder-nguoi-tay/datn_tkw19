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
                                    <button class="header-toggler px-md-0 me-md-3" type="button"
                                        onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
                                        <i class="icon icon-lg fa fa-bars" aria-hidden="true"></i>
                                    </button>
                                    <ul class="header-nav ms-3 d-flex">
                                        <form action="{{ route('employer.new.index') }}" class="d-flex" method="get">
                                            <input name="free_word" class="custom-input" placeholder="Tìm Kiếm...."
                                                value="" autocomplete="off" id="free_word">
                                            <button class="nav-link py-0 btn-next-step"
                                                href="{{ route('employer.new.create') }}">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </form>
                                        <a class="nav-link py-0 btn-next-step" href="{{ route('employer.new.create') }}">
                                            Thêm tin
                                        </a>
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
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
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
                                                    <li class="dropdown-divider"></li>
                                                    <li>
                                                        <a class="dropdown-item" href="" class="dropdown-item">
                                                            <i class="fa fa-eye"></i>gia hạn
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
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
    <style>

    </style>
@endsection
