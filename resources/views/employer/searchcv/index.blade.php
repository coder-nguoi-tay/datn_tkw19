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
                            {{-- <search-cv
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
                            <hr> --}}
                            {{-- {{ dd($cv[4]->user->name) }} --}}
                            <div class="row align-items-center">

                                <div class="card-body">
                                    <div data-v-5ca02e54="" class="list-service">
                                        @foreach ($cv as $item)
                                            <div data-v-5ca02e54=""class="service">

                                                <div data-v-5ca02e54="" data-v-6f51bd73=""
                                                    class=" service-item  justify-content-between  service-item__md">
                                                    <div>
                                                        {{-- <div class="col-12"><span
                                                                class="medium theme-cl theme-bg-light px-2 py-1 rounded">{{ $item->majors }}</span>
                                                        </div> --}}

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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
