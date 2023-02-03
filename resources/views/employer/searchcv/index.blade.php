@php
    use Carbon\Carbon;
    use App\Enums\UserRecruit;
@endphp
@extends('employer.layout.index')
@section('content')
    <div class="dashboard-content-wrap">
        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
                        <ul class="list-items d-flex align-items-center">
                            @if (isset($breadcrumbs))
                                @foreach ($breadcrumbs as $key => $breadcrumb)
                                    @if ($key != count($breadcrumbs) - 1)
                                        <li class="active__list-item">
                                            <a href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['name'] }}</a>
                                        </li>
                                    @else
                                        <li class="active__list-item active">{{ $breadcrumb }}</li>
                                    @endif
                                @endforeach
                            @endif
                        </ul>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="billing-form-item p-3">
                        <div class="billing-content">
                            <div class="contact-form-action">
                                <form method="get" action="{{ route('employer.tim-kiem-cv.index') }}"
                                    class="MultiFile-intercepted">
                                    <div class="row">
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Từ khóa</label>
                                                <div class="form-group">
                                                    <span class="la la-briefcase form-icon"></span>
                                                    <input class="form-control" type="text" name="name"
                                                        placeholder="Tìm kiếm"
                                                        value="{{ !empty($request) ? $request->name : '' }}">
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Chọn nơi làm việc</label>
                                                <div class="form-group user-chosen-select-container">
                                                    <select class="user-chosen-select" style="display: none;"
                                                        name="location">
                                                        <option value="">Chọn nơi làm việc</option>
                                                        @foreach ($location as $item)
                                                            <option value="{{ $item->id }}"
                                                                {{ $request->location == $item->id ? 'selected' : '' }}>
                                                                {{ $item->label }}</option>
                                                        @endforeach
                                                    </select>

                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Chọn Ngành Nghề</label>
                                                <div class="form-group user-chosen-select-container">
                                                    <select class="user-chosen-select" style="display: none;"
                                                        name="majors">
                                                        <option value="">Chọn Ngành Nghề</option>
                                                        @foreach ($majors as $item)
                                                            <option value="{{ $item->id }}"
                                                                {{ $request->majors == $item->id ? 'selected' : '' }}>
                                                                {{ $item->name }}</option>
                                                        @endforeach
                                                    </select>

                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Chọn Chuyên Ngành</label>
                                                <div class="form-group user-chosen-select-container">
                                                    <select class="user-chosen-select" style="display: none;"
                                                        name="profession">
                                                        <option value="">Chọn Chuyên Ngành</option>
                                                        @foreach ($profession as $item)
                                                            <option value="{{ $item->id }}"
                                                                {{ $request->profession == $item->id ? 'selected' : '' }}>
                                                                {{ $item->label }}
                                                            </option>
                                                        @endforeach
                                                    </select>

                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Chọn Trình Độ</label>
                                                <div class="form-group user-chosen-select-container">
                                                    <select class="user-chosen-select" style="display: none;"
                                                        name="lever">
                                                        <option value="">Chọn Trình Độ</option>
                                                        @foreach ($lever as $item)
                                                            <option value="{{ $item->id }}"
                                                                {{ $request->lever == $item->id ? 'selected' : '' }}>
                                                                {{ $item->label }}
                                                            </option>
                                                        @endforeach
                                                    </select>

                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Chọn Kinh Nghiệm</label>
                                                <div class="form-group user-chosen-select-container">
                                                    <select class="user-chosen-select" style="display: none;"
                                                        name="experience">
                                                        <option value="">Chọn Kinh Nghiệm</option>
                                                        @foreach ($experience as $item)
                                                            <option value="{{ $item->id }}"
                                                                {{ $request->experience == $item->id ? 'selected' : '' }}>
                                                                {{ $item->label }}
                                                            </option>
                                                        @endforeach
                                                    </select>

                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Kỹ Năng</label>
                                                <div class="form-group user-chosen-select-container">
                                                    <select class="user-chosen-select" multiple="" style="display: none;"
                                                        name="skill[]">
                                                        @foreach ($skill as $item)
                                                            <option value="{{ $item->id }}"
                                                                {{ !empty($request->skill) ? (in_array($item->id, $request->skill) ? 'selected' : '') : '' }}>
                                                                {{ $item->label }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Thời Gian Làm Việc</label>
                                                <div class="form-group user-chosen-select-container">
                                                    <select class="user-chosen-select" style="display: none;"
                                                        name="timework">
                                                        <option value="">Chọn Thời Gian Làm Việc</option>
                                                        @foreach ($timework as $item)
                                                            <option value="{{ $item->id }}"
                                                                {{ $request->timework == $item->id ? 'selected' : '' }}>
                                                                {{ $item->label }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Hình Thức Làm Việc</label>
                                                <div class="form-group user-chosen-select-container">
                                                    <select class="user-chosen-select" style="display: none;"
                                                        name="workingform">
                                                        <option value="">Chọn Hình Thức Làm Việc</option>
                                                        @foreach ($workingform as $item)
                                                            <option value="{{ $item->id }}"
                                                                {{ $request->workingform == $item->id ? 'selected' : '' }}>
                                                                {{ $item->label }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <button class="btn btn-info col-12 text-white">Tìm kiếm</button>
                                    </div><!-- end row -->
                                </form>
                            </div><!-- end contact-form-action -->
                        </div>
                        <br>
                        @foreach ($cv as $item)
                            <div class="billing-content pb-0 mt-4">
                                <div class="manage-candidate-wrap d-flex align-items-center justify-content-between pb-4">
                                    <div class="bread-details d-flex">
                                        <div class="bread-img flex-shrink-0">
                                            <a href="{{ route('employer.quan-ly-cv.show', $item->id) }}" class="d-block">
                                                <img src="{{ asset($item->images) }}" alt="">
                                            </a>
                                        </div>
                                        <div class="manage-candidate-content">
                                            <h2 class="widget-title pb-2"><a
                                                    href="{{ route('employer.quan-ly-cv.show', $item->id) }}"
                                                    class="color-text-2">{{ $item->user->name }}</a></h2>
                                            <p class="font-size-15">
                                                <span class="mr-2">{{ $item->majors }}</span>
                                            </p>
                                            <p class="mt-2 font-size-15">
                                                <span class="mr-2"><i
                                                        class="la la-map-marker mr-1"></i>{{ $item->address }}</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="bread-action">
                                        <ul class="info-list">
                                            <li class="d-inline-block mb-0"><a
                                                    href="{{ route('employer.quan-ly-cv.show', $item->id) }}"><i
                                                        class="la la-eye" data-toggle="tooltip" data-placement="top"
                                                        title="" data-original-title="View"></i></a></li>
                                        </ul>
                                    </div>
                                </div><!-- end manage-candidate-wrap -->
                                <div class="section-block"></div>
                            </div><!-- end billing-content -->
                        @endforeach

                    </div><!-- end billing-form-item -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-navigation-wrap mt-4">
                        <div class="page-navigation mx-auto">
                            <a href="" class="page-go page-prev">
                                <i class="la la-arrow-left"></i>
                            </a>
                            <ul class="page-navigation-nav">
                                <li class="active"><a href="" class="page-go-link">1</a></li>
                                <li><a href="" class="page-go-link">2</a></li>
                                <li><a href="" class="page-go-link">3</a></li>
                                <li><a href="" class="page-go-link">4</a></li>
                                <li><a href="" class="page-go-link">5</a></li>
                            </ul>
                            <a href="" class="page-go page-next">
                                <i class="la la-arrow-right"></i>
                            </a>
                        </div>
                    </div><!-- end page-navigation-wrap -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div>
@endsection
