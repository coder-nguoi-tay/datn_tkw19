@php
    use Carbon\Carbon;
@endphp
@extends('client.layout.seeker')
@section('content')
    {{-- <div class="dashboard-widg-bar d-block">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="data-responsive">
                    @foreach ($job as $item)
                        <div class="dashed-list-wrap bg-white rounded mb-3">
                            <div class="dashed-list-full bg-white rounded p-3 mb-3">
                                <div class="dashed-list-short d-flex align-items-center">
                                    <div class="dashed-list-short-first">
                                        <div class="dashed-avater">
                                            <img src="" class="img-fluid circle" width="70" alt="" />
                                        </div>
                                    </div>
                                    <div class="dashed-list-short-last">
                                        <div class="cats-box-caption px-2">
                                            <h4 class="fs-lg mb-0 ft-medium theme-cl">{{ $item->title }}</h4>
                                            <div class="d-block mb-2 position-relative">
                                                <span><i
                                                        class="lni lni-map-marker mr-1"></i>{{ $item->getlocation->name }}</span>
                                                <span class="ml-2"><i
                                                        class="lni lni-briefcase mr-1"></i>{{ $item->getMajors->name }}</span>
                                            </div>
                                            <div class="ico-content">
                                                <ul>
                                                    <li>
                                                        <a href="javascript:void(0);"
                                                            class="
                                                                    px-2
                                                                    py-1
                                                                    medium
                                                                    bg-light-success
                                                                    rounded
                                                                    text-success
                                                                    "><i
                                                                class="far fa-money-bill-alt mr-1"></i>{{ $item->getWage->name }}</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#message"
                                                            class="px-2 py-1 medium bg-light-info rounded text-info"><i
                                                                class="lni lni-envelope mr-1"></i>Message</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dashed-list-last">
                                    <div class="text-left">
                                        <form action="{{ route('delete.favourite', $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button data-toggle="modal" data-target="#edit"
                                                class="btn gray ft-medium apply-btn fs-sm rounded mr-1"><i
                                                    class="lni lni-trash-can mr-2"></i>Bỏ lưu</button>
                                        </form>

                                    </div>
                                    <div class="ico-content" style="top: 10px">
                                        <ul>
                                            <li>
                                                <span><i class="lni lni-calendar mr-1"></i>
                                                    {{ Carbon::parse($item->end_job_time)->format('d/m/Y') }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div> --}}
    <section class="dashboard-area">
        <div class="dashboard-content-wrap">
            <div class="container-fluid" style="margin-top: 30px">
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
                        </div>
                    </div>
                </div>
                {{-- @foreach ($job as $item)
                    <div class="dashed-list-wrap bg-white rounded mb-3">
                        <div class="dashed-list-full bg-white rounded p-3 mb-3">
                            <div class="dashed-list-short d-flex align-items-center">
                                <div class="dashed-list-short-first">
                                    <div class="dashed-avater">
                                        <img src="" class="img-fluid circle" width="70" alt="" />
                                    </div>
                                </div>
                                <div class="dashed-list-short-last">
                                    <div class="cats-box-caption px-2">
                                        <h4 class="fs-lg mb-0 ft-medium theme-cl">{{ $item->title }}</h4>
                                        <div class="d-block mb-2 position-relative">
                                            <span><i
                                                    class="lni lni-map-marker mr-1"></i>{{ $item->getlocation->name }}</span>
                                            <span class="ml-2"><i
                                                    class="lni lni-briefcase mr-1"></i>{{ $item->getMajors->name }}</span>
                                        </div>
                                        <div class="ico-content">
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0);"
                                                        class="
                                                                    px-2
                                                                    py-1
                                                                    medium
                                                                    bg-light-success
                                                                    rounded
                                                                    text-success
                                                                    "><i
                                                            class="far fa-money-bill-alt mr-1"></i>{{ $item->getWage->name }}</a>
                                                </li>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#message"
                                                        class="px-2 py-1 medium bg-light-info rounded text-info"><i
                                                            class="lni lni-envelope mr-1"></i>Message</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dashed-list-last">
                                <div class="text-left">
                                    <form action="{{ route('delete.favourite', $item->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button data-toggle="modal" data-target="#edit"
                                            class="btn gray ft-medium apply-btn fs-sm rounded mr-1"><i
                                                class="lni lni-trash-can mr-2"></i>Bỏ lưu</button>
                                    </form>

                                </div>
                                <div class="ico-content" style="top: 10px">
                                    <ul>
                                        <li>
                                            <span><i class="lni lni-calendar mr-1"></i>
                                                {{ Carbon::parse($item->end_job_time)->format('d/m/Y') }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach --}}
                <div class="col-12 recuitment-inner">
                    <div class="card-create-employer">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="billing-form-item">
                                    <!-- billing-title-wrap -->
                                    <div class="billing-content">
                                        <div class="contact-form-action">
                                            <div class="MultiFile-intercepted">
                                                <br />
                                                <div class="box-group">
                                                    <div class="box-group-body">
                                                        <div class="row box-recruiter">
                                                            @foreach ($job as $item)
                                                                <div class="col-sm-12">
                                                                    <div
                                                                        class="
                                job
                                box
                                box-white
                                box-relative
                                box-overflow-hidden
                                box-view-profile
                              ">
                                                                        <div class="row">
                                                                            <div class="col-md-2 col-sm-3 hidden-xs">
                                                                                <div class="company-logo">
                                                                                    <img src="{{ asset($item->logo) }}" />
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="
                                    col-md-7 col-sm-9 col-xs-12
                                    text-right-xs
                                  ">
                                                                                <div class="text-highlight employer-name">
                                                                                    <a
                                                                                        href="/home/detail/{{ $item->title . '-' . $item->job_id }}">{{ $item->title }}</a>
                                                                                </div>
                                                                                <div class="company-name text-gray"
                                                                                    style="
                                      text-transform: uppercase;
                                      font-size: 0.9em;
                                    ">
                                                                                    <a target="_blank"
                                                                                        href="{{ route('detail.company', $item->idCompany) }}"
                                                                                        class="text-gray"
                                                                                        rel="nooppener noreferrer">
                                                                                        {{ $item->nameCompany }}</a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-xs-12 text-right">
                                                                                <p>
                                                                                    <span class="open-time text-gray">
                                                                                        {{ Carbon::parse($item->end_job_time)->format('d/m/Y') }}</span>
                                                                                </p>
                                                                                <p>
                                                                                    <span class="open-time text-gray">
                                                                                        <btn-delete-job-love
                                                                                            :message-confirm="{{ json_encode('Bạn có chắc muốn xóa không ?') }}"
                                                                                            :delete-action="{{ json_encode(route('delete.favourite', $item->id)) }}">
                                                                                        </btn-delete-job-love>
                                                                                    </span>
                                                                                </p>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
