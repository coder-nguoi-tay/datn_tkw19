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
                            <h6 class="text-white text-capitalize ps-3">
                                @if (isset($title))
                                    <span>{{ $title }}</span>
                                @endif
                            </h6>
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
                                            Logo</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Name</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Email</th>
                                        {{-- <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Địa chỉ</th> --}}
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Giấy chứng nhận</th>

                                        <th class="text-secondary opacity-7" colspan="2">


                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($company as $item)
                                        <tr>
                                            <td>
                                                <img src="{{ asset($item->logo) }}" alt="" width="150"
                                                    height="150">
                                            </td>
                                            <td>
                                                {{ $item->name }}
                                            </td>
                                            <td>
                                                {{ $item->email }}
                                            </td>
                                            {{-- <td
                                               >
                                                {{ $item->address }}
                                            </td> --}}

                                            <td class="text-center">
                                                <img src="{{asset($item->imagesAccuracy)}}" alt="" style="width: 150px; margin-right: 20px; max-hight: 200px;">
                                                @if ($item->status == 0)
                                                    <btn-status-company
                                                        style="border: 1px solid #b1b7c1;font-size: 12px;padding: 5px 10px;"
                                                        :data="{{ json_encode([
                                                            'idCompany' => $item->idAccuracy,
                                                            'urlGetData' => route('admin.company.dataxt', $item->idAccuracy),
                                                        ]) }}">
                                                    </btn-status-company>
                                                @else
                                                    <button class="badge bg-success text-center" style="border: 1px solid #b1b7c1;font-size: 12px;padding: 5px 10px;">Đã Xác Thức</button>
                                                @endif


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
        <!-- Modal -->

    </div>
@endsection
