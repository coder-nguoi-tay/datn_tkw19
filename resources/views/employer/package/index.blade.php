@php
    use Carbon\Carbon;
@endphp
@extends('layouts.admin')
@section('content')
    <div class="container-fluid px-2 px-md-4">
        <div class="row">
            <div class="col-12">
                <div class="content-wrapper ">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Tất cả các gói cước</h6>
                            </div>
                        </div>
                        <div class="container-fluid px-2 px-md-4" style="margin-top: -30px">
                            <div class="row gy-5">

                                @foreach ($data as $item)
                                    <div class="col-md-4 stretch-card grid-margin">
                                        <div class="card bg-gradient-white card-img-holder text-black boil ">
                                            <div class="card-body">
                                                <h4 class="mb-3 text-color">{{ $item->name }} <i
                                                        class="mdi mdi-chart-line mdi-24px float-right"></i>
                                                </h4>
                                                <h2 class="mb-5 text-color">- Giá:
                                                    {{ number_format($item->price, 0, ',', '.') }}đ
                                                </h2>
                                                <h6 class="card-text text-color">- Thời
                                                    gian: {{ $item->timeofer->name }}
                                                </h6>
                                            </div>
                                            <hr>
                                            <div class="col-12 grid-margin stretch-card">
                                                <div class="text-center"
                                                     style="display: flex; max-width: 80%; margin-left: 27% ">
                                                    <div style="margin-right: 30%">
                                                        <form action="{{ route('employer.package.payment') }}"
                                                              method="post">
                                                            @csrf
                                                            <input type="hidden" name="name"
                                                                   value="{{ $item->name }}">
                                                            <input type="hidden" name="price"
                                                                   value="{{ $item->price }}">
                                                            <input type="hidden" name="id"
                                                                   value="{{ $item->id }}">
                                                            <button name="redirect" type="submit"
                                                                    class="btn btn-primary">vnpay
                                                            </button>
                                                        </form>
                                                    </div>
                                                    <div style="margin-right: 30%">
                                                        <form action="{{ route('employer.package.payment.momo') }}"
                                                              method="post">
                                                            @csrf
                                                            <button type="submit" name="payUrl" id="payUrl"
                                                                    class="btn btn-primary">momo
                                                            </button>
                                                        </form>
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
