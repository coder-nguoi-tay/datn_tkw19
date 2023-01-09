@php
    use Carbon\Carbon;
@endphp
@extends('employer.layout.index')
@section('content')
    <section class="dashboard-area">
        <div class="dashboard-content-wrap">
            <div class="container-fluid">
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
                <update-profile-employer
                    :data="{{ json_encode([
                        'employer' => $employer,
                        'email' => Auth::guard('user')->user()->email,
                        'urlStore' => route('employer.new.store'),
                        // 'urlStoreEmployer' => route('employer.profile.update', $employer->id),
                        // 'paymentHistory' => $paymentHistory,
                        // 'urlAccuracyCompany' => route('employer.profile.ImageAccuracy'),
                        // 'accuracy' => $accuracy,
                        // 'Company' => $Company,
                        // 'urlStoreCompany' => route('employer.register-company.store'),
                    ]) }}">
                </update-profile-employer>
            </div><!-- end container-fluid -->
        </div>
    </section><!-- end dashboard-area -->

    <div id="back-to-top">
        <i class="la la-angle-up" title="Go top"></i>
    </div>

@endsection
