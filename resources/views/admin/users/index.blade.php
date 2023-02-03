@php
    use App\Enums\Onoff;
@endphp
@extends('master')
@section('content')
    <div class="container-fluid px-2 px-md-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Quản lý Khách hàng</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="col-md-12">
                            <div style="float: right !important; width: 400px;height: 40px; margin-right: 20px">
                                <form class="d-flex" method="get" style="height: 40px;">
                                    <input name="free_word" class="custom-input form-control mr-1"
                                        placeholder="Tìm Kiếm...." autocomplete="off" id="free_word" />
                                    <button class="btn btn-info font-weight-medium color-text-2 mr-1 text-white"
                                        style="height: 40px;" href="">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <br>
                        <br>
                        <hr>
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Email</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Status</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Create_at</th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Users as $item)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="{{ asset('dist/assets/img/team-2.jpg') }}"
                                                            class="avatar avatar-sm me-3 border-radius-lg" alt="user2">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{ $item->name }}</h6>
                                                        <p class="text-xs text-secondary mb-0">{{ $item->email }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span
                                                    class="badge badge-sm bg-gradient-success">{{ Onoff::getDescription($item->role) }}</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $item->created_at->format('Y-m-d') }}</span>
                                            </td>
                                            <td class="align-middle">
                                                <btn-delete-confirm
                                                    :message-confirm="{{ json_encode('Bạn có chắc muốn xóa không ?') }}"
                                                    :delete-action="{{ json_encode(route('admin.Users.destroy', $item->id)) }}">
                                                </btn-delete-confirm>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
