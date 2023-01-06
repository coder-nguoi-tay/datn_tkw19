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
                                    <label class=" px-md-0 me-md-3">Tất Cả CV</label>
                                    <ul class="header-nav ms-3 d-flex">
                                        <search-find-cv :url="{{ json_encode(route('employer.tim-kiem-cv.index')) }}"
                                            :data-query="{{ json_encode(!empty($request) ? $request->all() : new stdClass()) }}">
                                        </search-find-cv>
                                    </ul>
                                </div>
                            </header>
                        </div>
                        <div class="card-body">
                            @if (!$cv->isEmpty())
                                <div class="row align-items-center">
                                    <div class="card-body">
                                        <div data-v-5ca02e54="" class="list-service">
                                            @foreach ($cv as $item)
                                                <div data-v-5ca02e54=""class="service">

                                                    <div data-v-5ca02e54="" data-v-6f51bd73=""
                                                        class=" service-item  justify-content-between  service-item__md">
                                                        <div>
                                                            <div class="col-12 box-anh">
                                                                <img src="{{ asset($item->images) }}" alt=""
                                                                    class="anh-cv" />
                                                            </div>

                                                            <div class="col-12">
                                                                <h4 class="title-cv">
                                                                    {{ $item->user->name }}
                                                                </h4>
                                                                <p class="name-cv">{{ $item->address }}</p>
                                                                <p class="name-cv" style="margin-top: 5px">
                                                                    {{ $item->majors }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <a href="{{ route('employer.quan-ly-cv.show', $item->id) }}"
                                                            class="button-text  btn min-width   border"><i
                                                                class="mr-1 fa-solid fa-eye"> </i>
                                                            Xem chi tiết</a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="container">
                                        <div class="alert alert-danger alert-dismissible fade show text-center"
                                            role="alert">
                                            Không tìm thấy dữ liệu mà bạn mong muốn!
                                        </div>
                                    </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
