@extends('client.layout.seeker')
@section('content')
    {{-- <div class="dashboard-widg-bar d-block">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="_dashboard_content bg-white rounded mb-4">
                    <div class="_dashboard_content_header br-bottom py-3 px-3">
                        <div class="_dashboard__header_flex">
                            <h4 class="mb-0 ft-medium fs-md"><i class="fa fa-user mr-1 theme-cl fs-sm"></i>Đổi mật khẩu
                            </h4>
                            <change-password
                                :data="{{ json_encode([
                                    'urlStore' => route('user.changePasswordSucsses'),
                                ]) }}">
                            </change-password>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
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
                        </div>
                    </div>
                </div>
                <change-password
                    :data="{{ json_encode([
                        'urlStore' => route('user.changePasswordSucsses'),
                    ]) }}">
                </change-password>
            </div>
        </div>
    </section>

    <div id="back-to-top">
        <i class="la la-angle-up" title="Go top"></i>
    </div>
@endsection
