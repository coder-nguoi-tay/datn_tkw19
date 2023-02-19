@extends('master')
@section('content')
    <div class="container-fluid px-2 px-md-4">
        <div class="row">
            <div class="col-12">
                <div class="content-wrapper ">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Gói cước ưu đãi</h6>
                            </div>
                        </div>
                        <div class="container-fluid px-2 px-md-4" style="margin-top: -30px">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="ps-3">
                                        <a href="{{ route('admin1.jobAttractive.create') }}" class="btn btn-primary">Thêm gói
                                            ưu
                                            đãi</a>
                                    </div>
                                    <div class="col-6"
                                        style="float: right !important; width: 400px;height: 40px; margin-right: 20px; margin-top: -80px">
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
                            </div>

                            <hr>

                            <div class="row gy-5">
                                @foreach ($jobAttractives as $item)
                                    <div class="col-md-4 stretch-card grid-margin">
                                        <div class="card bg-gradient-white card-img-holder text-black boil ">
                                            <div class="card-body">
                                                <h4 class="mb-3 text-color">{{ $item->name }} <i
                                                        class="mdi mdi-chart-line mdi-24px float-right"></i>
                                                </h4>
                                                <h2 class="mb-5 text-color">- Giá:
                                                    {{ number_format($item->price, 0, ',', '.') }}đ
                                                </h2>
                                                <h4 class="">- Cấp Bậc gói : {{ $item->leverPackage->name ?? 'None' }}
                                                </h4>
                                                <h6 class="card-text text-color">- Mô tả: {{ $item->describe }}
                                                </h6>
                                            </div>
                                            <hr>
                                            <div class="col-12 grid-margin stretch-card">
                                                <div class="text-center"
                                                    style="display: flex; max-width: 80%; margin-left: 27% ">
                                                    <div style="margin-right: 30%">
                                                        <btn-delete-confirm
                                                            :message-confirm="{{ json_encode('Bạn có chắc muốn xóa không ?') }}"
                                                            :delete-action="{{ json_encode(route('admin1.jobAttractive.destroy', $item->id)) }}">
                                                        </btn-delete-confirm>

                                                    </div>

                                                    <div style="margin-bottom: 20px; margin-left: 15% !important"
                                                        class="text-center">
                                                        <a href="{{ route('admin1.jobAttractive.edit', $item->id) }}"
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
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
