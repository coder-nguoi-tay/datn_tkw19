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
                                        <button class="nav-link py-0 btn-next-step" data-coreui-toggle="modal"
                                            data-coreui-target="#exampleModalSeacrhSpeed">
                                            Tìm Nhanh Ứng Viên
                                        </button>
                                    </ul>
                                </div>
                            </header>
                        </div>
                        <div class="card-body">
                            <search-cv
                                :data="{{ json_encode([
                                    'skill' => $skill,
                                    'urlGet' => route('employer.tim-kiem-cv.store'),
                                    'experience' => $experience,
                                    'wage' => $wage,
                                    'lever' => $lever,
                                    'skill' => $skill,
                                    'timework' => $timework,
                                    'profession' => $profession,
                                    'majors' => $majors,
                                    'workingform' => $workingform,
                                    'location' => $location,
                                ]) }}">
                            </search-cv>
                            <br>
                            <hr>
                            <div class="row align-items-center">

                                <div class="card-body">
                                    <div data-v-5ca02e54="" class="list-service">
                                        @foreach ($cv as $item)
                                            <div data-v-5ca02e54=""class="service">

                                                <div data-v-5ca02e54="" data-v-6f51bd73=""
                                                    class=" service-item d-flex flex-column justify-content-between  service-item__md">
                                                    <div>
                                                        <div class="col-12"><span
                                                                class="medium theme-cl theme-bg-light px-2 py-1 rounded">{{ $item->majors }}</span>
                                                        </div>

                                                        <div class="col-12">
                                                            <img src="{{ asset($item->images) }}" alt=""
                                                                class="anh-cv" />
                                                        </div>

                                                        <div class="col-12">
                                                            <h4 class="title-cv">
                                                                {{ $item->user->name }}
                                                            </h4>
                                                            <p class="name-cv">{{ $item->address }}</p>
                                                            <p class="name-cv">{{ $item->majors }}</p>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class=" d-flex  flex-row align-items-center justify-content-between ">
                                                        <button data-v-6f51bd73="" type="button" style="margin-left: 12%"
                                                            class="  btn min-width btn btn-secondary btn-service  font-weight-bold btn-buy-service btn-add-service btn-see-detail">
                                                            <a href="{{ route('employer.quan-ly-cv.show', $item->id) }}"
                                                                 class="button-text"><i
                                                                    class="mr-1 fa-solid fa-eye"> </i>

                                                                Xem chi tiết</a>
                                                        </button>
                                                        {{-- <a href="{{ route('employer.quan-ly-cv.show', $item->id) }}"
                                                            class="btn min-width btn btn-secondary btn-service  font-weight-bold btn-buy-service btn-add-service "
                                                            style="margin-left: 12%">
                                                            <i class="mr-1 fa-solid fa-eye"> </i>

                                                            Xem chi tiết</a> --}}
                                                    </div>
                                                </div>


                                            </div>
                                        @endforeach
                                    </div>
                                </div>


                                <!-- Single -->
                                {{-- @foreach ($cv as $item)
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                        <div class="job_grid border rounded">
                                            <div class="position-absolute ab-right br-red"><span
                                                    class="medium theme-cl theme-bg-light px-2 py-1 rounded">{{ $item->majors }}</span>
                                            </div>
                                            <div class="job_grid_thumb mb-3 pt-5 px-3">
                                                <a href="" class="d-block text-center m-auto"><img
                                                        src="{{ asset($item->images) }}" class="img-fluid border"
                                                        width="200" height="150" alt=""></a>
                                            </div>
                                            <div class="job_grid_caption text-center px-3">
                                                <h4 class="mb-0 ft-medium medium"><a href=""
                                                        class="text-dark fs-md">{{ $item->user->name }}</a></h4>
                                                <div class="jbl_location"><i
                                                        class="lni lni-map-marker mr-1"></i><span>{{ $item->address }}</span>
                                                </div>
                                                <div class="jbl_location"><i
                                                        class="lni lni-map-marker mr-1"></i><span>{{ $item->majors }}</span>
                                                </div>
                                                <div class="container">
                                                    <a href="{{ route('employer.quan-ly-cv.show', $item->id) }}"
                                                        class="nav-link py-0 btn-next-step"
                                                        style="margin-right: 15px !important">Xem
                                                        Chi Tiết</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
