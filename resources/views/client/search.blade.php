@php
    use Carbon\Carbon;
    use App\Components\SearchQueryComponent;
@endphp
@extends('client.layout.index')
@section('client')
    <div id="main-wrapper">
        <div class="clearfix"></div>
        <div class="bg-title py-5" data-overlay="0">
            <div class="ht-30"></div>
            <div class="container">
                <div class="row">
                    <div class="colxl-12 col-lg-12 col-md-12">
                        <h1 class="ft-medium">Việc làm đã tìm thấy</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('index') }}" class="text-light">Home</a>
                                </li>
                                @if (isset($breadcrumbs))
                                    @foreach ($breadcrumbs as $key => $breadcrumb)
                                        @if ($key != count($breadcrumbs) - 1)
                                            <li class="breadcrumb-item">
                                            <li class="breadcrumb-item"><a href="{{ $breadcrumb['url'] }}"
                                                    class="text-light">{{ $breadcrumb['name'] }}</a></li>
                                            </li>
                                        @else
                                            <li class="breadcrumb-item active theme-cl" aria-current="page">
                                                {{ $breadcrumb }}</li>
                                        @endif
                                    @endforeach
                                @endif
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="ht-30"></div>
        </div>
        <!-- ======================= Top Breadcrubms ======================== -->
        <div class="container-xxl pt-4 pb-4">
            <div class="col-lg-12 ">
                <home-search
                    :data="{{ json_encode([
                        'lever' => $lever,
                        'experience' => $experience,
                        'wage' => $wage,
                        'skill' => $skill,
                        'timework' => $timework,
                        'profession' => $profession,
                        'majors' => $majors,
                        'location' => $location,
                        'workingform' => $workingform,
                        'urlSeach' => route('home.search'),
                        'skillSearch' => $skillSearch,
                        'request' => !empty($request) ? $request->all() : new stdClass(),
                    ]) }}">
                </home-search>
            </div>
        </div>
        <section class="bg-light">
            <div class="container-xxl pt-2">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="row align-items-center bg-info">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                            <div class="row align-items-center justify-content-between mx-0 rounded p-3">
                                <div class="col-xl-3 col-lg-4 col-md-5 col-sm-12">
                                    <h6 class="mb-0 ft-medium fs-sm">{{ count($job) }} Công việc được tìm thấy</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="container p-3">
                            <div class="row g-2 g-lg-3" id="paginated-list">
                                @foreach ($job as $value)
                                    <div class="col-4 render-job-search view overlay rounded">
                                        <div class="hover-div border p-2">
                                            <div class="position-absolute ab-right"><a type="button"
                                                    class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray"><i
                                                        class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></a>
                                            </div>
                                            <div class="row" style="height: 80px;">
                                                <div class="job_grid_thumb mb-3 title-name px-3 col-4"><a
                                                        href="home/detail/{{ $value->title . '-' . $value->id }}"
                                                        class="d-block m-auto" style="width: 68px; height: 68px;"><img
                                                            src="{{ asset($value->logo) }}" class="img-rounded"
                                                            alt="" style=""></a>
                                                </div>
                                                <div class="job_grid_caption title-name px-3 col-8 g-1">
                                                    <h4 class="mb-0 ft-medium medium ml-20"><a
                                                            href="home/detail/{{ $value->title . '-' . $value->id }}"
                                                            class="text-dark fs-md" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Tooltip on top">
                                                            <p
                                                                style="width: 200px !important; overflow: hidden !important; text-overflow: ellipsis !important; white-space: nowrap;">
                                                                {{ $value->title }}</p>
                                                        </a></h4>
                                                    <div class="jbl_location ml-20" style="margin-top: -10px;"><a
                                                            href=""
                                                            class="text-dark fs-md">{{ $value->nameCompany }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="job_grid_footer d-flex align-items-center justify-content-between text-mute-footer">
                                                <div class="df-1 text-muted"><i
                                                        class="lni lni-wallet mr-1"></i>{{ $value->getwage->name }}
                                                </div>
                                                <div class="df-1 text-muted ml-2"><i
                                                        class="lni lni-timer mr-1"></i>{{ $value->end_job_time }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <span class="page-item text-center pagination-container">
                                        <div id="pagination-numbers">
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- All jobs -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> <br><br>
                            <span class="page-item text-center pagination-container d-flex">
                                <div id="pagination-numbers">
                                </div>

                            </span>
                        </div>
                    </div>
                    <!-- paginate -->
                </div>
            </div>
        </section>
        <section class="bg-light">
            <div class="container-xxl pt-2">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="row align-items-center bg-info">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                            <div class="row align-items-center justify-content-between mx-0 rounded p-3">
                                <div class="col-xl-3 col-lg-4 col-md-5 col-sm-12">
                                    <h6 class="mb-0 ft-medium fs-sm">{{ count($datalq) }} Công việc được tìm thấy</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="container p-3">
                            <div class="row g-2 g-lg-3" id="paginated-list1">
                                @foreach ($datalq as $value)
                                    <div class="col-4 render-job-search1 view overlay rounded">
                                        <div class="hover-div border p-2">
                                            <div class="position-absolute ab-right"><a type="button"
                                                    class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray"><i
                                                        class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></a>
                                            </div>
                                            <div class="row" style="height: 80px;">
                                                <div class="job_grid_thumb mb-3 title-name px-3 col-4"><a
                                                        href="home/detail/{{ $value->title . '-' . $value->id }}"
                                                        class="d-block m-auto" style="width: 68px; height: 68px;"><img
                                                            src="{{ asset($value->logo) }}" class="img-rounded"
                                                            alt="" style=""></a>
                                                </div>
                                                <div class="job_grid_caption title-name px-3 col-8 g-1">
                                                    <h4 class="mb-0 ft-medium medium ml-20"><a
                                                            href="home/detail/{{ $value->title . '-' . $value->id }}"
                                                            class="text-dark fs-md" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Tooltip on top">
                                                            <p
                                                                style="width: 200px !important; overflow: hidden !important; text-overflow: ellipsis !important; white-space: nowrap;">
                                                                {{ $value->title }}</p>
                                                        </a></h4>
                                                    <div class="jbl_location ml-20" style="margin-top: -10px;"><a
                                                            href=""
                                                            class="text-dark fs-md">{{ $value->nameCompany }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="job_grid_footer d-flex align-items-center justify-content-between text-mute-footer">
                                                <div class="df-1 text-muted"><i
                                                        class="lni lni-wallet mr-1"></i>{{ $value->getwage->name }}
                                                </div>
                                                <div class="df-1 text-muted ml-2"><i
                                                        class="lni lni-timer mr-1"></i>{{ $value->end_job_time }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <span class="page-item text-center pagination-container">
                                        <div id="pagination-numbers1">
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- All jobs -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> <br><br>
                            <span class="page-item text-center pagination-container d-flex">
                                <div id="pagination-numbers">
                                </div>

                            </span>
                        </div>
                    </div>
                    <!-- paginate -->
                </div>
            </div>
        </section>
        <!-- ============================ Main Section End ================================== -->
        <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
    </div>

@endsection
