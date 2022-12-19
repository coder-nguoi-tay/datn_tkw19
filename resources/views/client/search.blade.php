@php
    use Carbon\Carbon;
    use App\Components\SearchQueryComponent;
@endphp
@extends('client.layout.index')
@section('client')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
                                <li class="breadcrumb-item"><a href="{{ route('home.index') }}" class="text-light">Home</a>
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

        <div class="container">
            <form action="{{ route('home.search') }}" method="GET">
                <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3 p-3">
                    <div class="col test">
                        <div class="p-1">
                            <input type="text" class="form-control" name="key" id=""
                                placeholder="Tìm kiếm...." value="{{ $request['key'] }}">
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-1"><select class="form-select" name="lever" aria-label="Default select example">
                                <option selected disabled>Trình độ</option>
                                @foreach ($lever as $item)
                                    <option value="{{ $item->id }}"
                                        {{ isset($request['lever']) ? ($request['lever'] == $item->id ? 'selected' : '') : '' }}>
                                        {{ $item->label }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-1"><select class="form-select" name="experience"
                                aria-label="Default select example">
                                <option selected disabled>Kinh nghiệm</option>
                                @foreach ($experience as $item)
                                    <option value="{{ $item->id }}"
                                        {{ !isset($request['experience']) ? '' : ($request['experience'] == $item->id ? 'selected' : '') }}>
                                        {{ $item->label }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-1"><select class="form-select" name="majors" aria-label="Default select example">
                                <option selected disabled>Mức lương</option>
                                @foreach ($majors as $item)
                                    <option value="{{ $item->id }}"
                                        {{ isset($request['majors']) ? ($request['majors'] == $item->id ? 'selected' : '') : '' }}>
                                        {{ $item->label }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-1"><select class="form-select" name="timework" aria-label="Default select example">
                                <option selected disabled>Thời gian làm việc</option>
                                @foreach ($timework as $item)
                                    <option value="{{ $item->id }}"
                                        {{ isset($request['timework']) ? ($request['timework'] == $item->id ? 'selected' : '') : '' }}>
                                        {{ $item->label }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-1"><select class="form-select" name="profession"
                                aria-label="Default select example">
                                <option selected disabled>Vị trí ứng tuyển</option>
                                @foreach ($profession as $item)
                                    <option value="{{ $item->id }}"
                                        {{ isset($request['profession']) ? ($request['profession'] == $item->id ? 'selected' : '') : '' }}>
                                        {{ $item->label }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-1"><select class="form-select select2" name="skill[]"
                                aria-label="Default select example" multiple>
                                @foreach ($skill as $item)
                                    @if (isset($request['skill']))
                                        <option value="{{ $item->id }}"
                                            {{ in_array($item->id, $request['skill']) ? 'selected' : '' }}>
                                            {{ $item->label }}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-1"><select class="form-select select2-location" name="location"
                                aria-label="Default select example">
                                <option selected disabled>Địa chỉ</option>
                                @foreach ($location as $item)
                                    <option value="{{ $item->id }}"
                                        {{ isset($request['location']) ? ($request['location'] == $item->id ? 'selected' : '') : '' }}>
                                        {{ $item->label }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-1"><select class="form-select" name="workingform"
                                aria-label="Default select example">
                                <option selected disabled>Hình thức làm việc</option>
                                @foreach ($workingform as $item)
                                    <option value="{{ $item->id }}"
                                        {{ isset($request['workingform']) ? ($request['workingform'] == $item->id ? 'selected' : '') : '' }}>
                                        {{ $item->label }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-1"><button type="submit" class="btn theme-bg text-light">Lọc</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <section class="bg-light">
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                            <div class="row align-items-center justify-content-between mx-0 bg-white rounded py-2 mb-4">
                                <div class="col-xl-3 col-lg-4 col-md-5 col-sm-12">
                                    <h6 class="mb-0 ft-medium fs-sm">{{ count($job) }} Công việc được tìm thấy</h6>
                                </div>

                                <div class="col-xl-9 col-lg-8 col-md-7 col-sm-12">
                                    <div class="filter_wraps elspo_wrap d-flex align-items-center justify-content-end">
                                        <div class="single_fitres mr-2 br-right">
                                            <select class="custom-select simple">
                                                <option value="1" selected="">Default Sorting</option>
                                                <option value="2">Recent jobs</option>
                                                <option value="3">Featured jobs</option>
                                                <option value="4">Trending Jobs</option>
                                                <option value="5">Premium jobs</option>
                                            </select>
                                        </div>
                                        <div class="single_fitres">
                                            <button href="" class="btn simple-button mr-1">Lọc</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- All jobs -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" id="paginated-list">

                            <!-- Single job -->
                            @foreach ($job as $item)
                                <div class="render-job-search">
                                    <div class="job_grid d-block border rounded px-3 pt-3 pb-2">
                                        <div class="jb-list01">
                                            <div class="jb-list-01-title">
                                                <h5 class="ft-medium mb-1"><a
                                                        href="job-detail.html">{{ $item->title }}</a>
                                                </h5>
                                            </div>
                                            <div class="jb-list-01-info d-block mb-3">
                                                <span class="text-muted mr-2"><i
                                                        class="lni lni-map-marker mr-1"></i>{{ $item->getlocation->name }}</span>
                                                <span class="text-muted mr-2"><i
                                                        class="lni lni-briefcase mr-1"></i>{{ $item->getTime_work->name }}</span>
                                                <span class="text-muted mr-2"><i
                                                        class="lni lni-star-filled mr-1"></i>{{ $item->getMajors->name }}</span>
                                                <span class="text-muted mr-2"><i
                                                        class="lni lni-money-protection mr-1"></i>{{ $item->getWage->name }}</span>
                                            </div>
                                            <div class="jb-list-01-title">
                                                @foreach ($item->getskill as $value)
                                                    <span
                                                        class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded theme-cl theme-bg-light">{{ $value->name }}</span>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <!-- Single job -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12"> <br><br>
                            <span class="page-item text-center pagination-container">
                                <button class="pagination-button" id="prev-button" aria-label="Previous page"
                                    title="Previous page">
                                    &lt;
                                </button>
                                <div id="pagination-numbers">
                                </div>
                                <button class="pagination-button" id="next-button" aria-label="Next page"
                                    title="Next page">
                                    &gt;
                                </button>
                            </span>
                        </div>
                    </div>

                </div>


            </div>
        </section>
        <!-- ============================ Main Section End ================================== -->

        <!-- ======================= Newsletter Start ============================ -->
        <section class="space bg-cover" style="background:#03343b url(assets/img/landing-bg.png) no-repeat;">
            <div class="container py-5">

                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="sec_title position-relative text-center mb-5">
                            <h6 class="text-light mb-0">Subscribr Now</h6>
                            <h2 class="ft-bold text-light">Get All New Job Notification</h2>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-7 col-lg-10 col-md-12 col-sm-12 col-12">
                        <form class="bg-white rounded p-1">
                            <div class="row no-gutters">
                                <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8">
                                    <div class="form-group mb-0 position-relative">
                                        <input type="text" class="form-control lg left-ico"
                                            placeholder="Enter Your Email Address">
                                        <i class="bnc-ico lni lni-envelope"></i>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                                    <div class="form-group mb-0 position-relative">
                                        <button class="btn full-width custom-height-lg theme-bg text-light fs-md"
                                            type="button">Subscribe</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Modal -->

        <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
    </div>

@endsection
