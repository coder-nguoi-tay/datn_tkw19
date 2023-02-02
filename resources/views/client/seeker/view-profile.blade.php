@php
    use Carbon\Carbon;
@endphp
@extends('client.layout.seeker')
@section('content')
    <section class="dashboard-area">
        <div class="dashboard-content-wrap">
            <div class="container-fluid  mt-2">
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
                {{-- <view-profile :data="{{ json_encode([
                    'job' => $job,
                ]) }}">
                </view-profile> --}}
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
                                                                                        href="/home/detail/{{ $item->id }}">{{ $item->title }}</a>
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
                                                                                        {{ Carbon::parse($item->created_at)->format('d/m/Y') }}</span>
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
            </div><!-- end container-fluid -->
        </div>
    </section><!-- end dashboard-area -->

    <div id="back-to-top">
        <i class="la la-angle-up" title="Go top"></i>
    </div>

@endsection
