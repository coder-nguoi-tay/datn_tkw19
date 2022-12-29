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
                                <!-- Single -->
                                @foreach ($seeder as $item)
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                        <div class="job_grid border rounded">
                                            <div class="position-absolute ab-right br-red"><span
                                                    class="medium theme-cl theme-bg-light px-2 py-1 rounded">{{ $item->getTime_work->name }}</span>
                                            </div>
                                            <div class="job_grid_thumb mb-3 pt-5 px-3">
                                                <a href="" class="d-block text-center m-auto"><img
                                                        src="{{ asset($item->images) }}" class="img-fluid border"
                                                        width="200" height="150" alt=""></a>
                                            </div>
                                            <div class="job_grid_caption text-center px-3">
                                                <h4 class="mb-0 ft-medium medium"><a href=""
                                                        class="text-dark fs-md">{{ $item->user->name }}</a></h4>
                                                <div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>địa
                                                        chỉ</span>
                                                </div>
                                                <div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>Lập
                                                        Trình Website</span>
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
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
