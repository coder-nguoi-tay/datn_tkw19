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
                            <h6 class="text-white text-capitalize ps-3">Quản lý Tin Tức</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="ps-3">
                            <a href="{{ route('admin.new.create') }}" class="btn btn-primary">Thêm tin tức mới</a>
                        </div>
                        <div class="table table-responsive p-0">
                            <table class="table align-items-center mb-0 table  table-striped ">
                                <thead class="table-danger ">
                                    <tr class="">
                                        <th class="text-dark text-center text-secondary  text-dark font-weight-bolder opacity-7">
                                            ID
                                        </th>
                                        <th
                                            class=" text-dark text-secondary  font-weight-bolder opacity-7">
                                            Tiêu Dề
                                        </th>
                                        <th
                                            class=" text-dark text-secondary  font-weight-bolder opacity-7 w-25">
                                            Hình ảnh
                                        </th>
                                        <th class=" text-dark text-secondary  font-weight-bolder opacity-7">
                                            Chuyên ngành
                                        </th>
                                        <th
                                            class=" text-dark text-secondary  font-weight-bolder opacity-7">
                                            Ngày Tạo
                                        </th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($News as $item)
                                        <tr class="">
                                            <td class="text-dark text-secondary  font-weight-bolder opacity-7 text-center">
                                                <div class="font-weight-bold ">
                                                    <p class=" text-secondary mb-0">{{ $item->id }}</p>
                                                </div>

                                            </td>
                                            <td class="  ">
                                                <div class="font-weight-bold " style="margin-left: 20px">
                                                    <p class=" text-secondary mb-0" style="
                                                    max-height: 21px;
                                                    max-width: 150px;
                                                    overflow: hidden;
                                                    text-overflow: ellipsis !important;
                                                     ">{{ $item->title }}</p>
                                                </div>
                                            </td>
                                            <td class=" " style=" width: 250px;">
                                                <div class="" >

                                                    <label for="upload" >
                                                        <img
                                                            src="{{ asset($item->new_image) }}"
                                                            class="img-thumbnail border-radius-lgc w-50"
                                                            alt="..."
                                                        />                                               
                                                    </label>

                                                    <br>
                                                </div>
                                            </td>
                                            <td class="align-middle ">
                                                <span
                                                    class="text-secondary  font-weight-bold">{{ $item->majors }}</span>
                                            </td>
                                            <td class="align-middle ">
                                                <span
                                                    class="text-secondary  font-weight-bold">{{ $item->created_at }}</span>
                                            </td>
                                            <td class="align-middle">
                                                <div class=""
                                                    style="display: flex; max-width: 80%; margin-left: 7% ">
                                                    <div style="margin-right: 10%">
                                                        <btn-delete-confirm
                                                            :message-confirm="{{ json_encode('Bạn có chắc muốn xóa không ?') }}"
                                                            :delete-action="{{ json_encode(route('admin.new.destroy', $item->id)) }}">
                                                        </btn-delete-confirm>
                                                    </div>
                                                    <div style="margin-bottom: 20px; margin-left: 20%"
                                                        class="">
                                                        <a href="{{ route('admin.new.edit', $item->id) }}"
                                                            class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg"
                                                                width="25" height="25" fill="currentColor"
                                                                class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                                <path fill-rule="evenodd"
                                                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                            </svg></a>
                                                    </div>

                                                </div>
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
