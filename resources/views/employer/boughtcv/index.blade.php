@php
    use Carbon\Carbon;
@endphp
@extends('layouts.admin')
@section('content')
    {{-- <bought-cv></bought-cv> --}}
    <div class="container">
        <div class="fade-in">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <header class="header header-sticky">
                                <div class="container-fluid">
                                    <label class=" px-md-0 me-md-3">CV Đã Mua</label>
                                    <ul class="header-nav ms-3 d-flex">
                                        <button class="nav-link py-0 btn-next-step" data-coreui-toggle="modal"
                                            data-coreui-target="#exampleModalSeacrhSpeed">
                                            Tìm Nhanh Ứng Viên
                                        </button>
                                    </ul>
                                </div>
                            </header>
                        </div>
                        <div class="card-body">

                            <div class="row align-items-center">

                                <div class="card-body">
                                    <div data-v-5ca02e54="" class="list-service">
                                        @foreach ($tatalecv as $item)
                                            <div data-v-5ca02e54=""class="service">

                                                <div data-v-5ca02e54="" data-v-6f51bd73=""
                                                    class=" service-item  justify-content-between  service-item__md">
                                                    <div>
                                                        <div class="col-12"><span
                                                                class="medium theme-cl theme-bg-light px-2 py-1 rounded">{{ $item->majors }}</span>
                                                        </div>

                                                        <div class="col-12 box-anh">
                                                            <img src="{{ asset($item->images) }}" alt=""
                                                                class="anh-cv" />
                                                        </div>

                                                        <div class="col-12">
                                                            <h4 class="title-cv">
                                                                {{ $item->user->name }}
                                                            </h4>
                                                            <p class="name-cv">{{ $item->address }}</p>
                                                            <p class="name-cv" style="margin-top: 5px">{{ $item->majors }}
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="  align-items-center justify-content-between ">

                                                        <a href="{{ route('employer.quan-ly-cv.show', $item->id) }}"
                                                            class="button-text  btn min-width   border"><i
                                                                class="mr-1 fa-solid fa-eye"> </i>

                                                            Xem chi tiết</a>


                                                    </div>
                                                </div>


                                            </div>
                                        @endforeach
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
