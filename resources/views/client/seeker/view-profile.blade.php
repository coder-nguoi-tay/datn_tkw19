@extends('client.layout.seeker')
@section('content')
    <style scoped>
        .box-view-profile {
            width: 100%;
            border: 1px solid rgba(0, 0, 0, 0.125);
            border-radius: 10px;
            height: auto;
        }

        .company-logo {
            width: 100%;
            height: 55px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .company-logo img {
            width: 100%;
            max-width: 150px;
        }

        img {
            vertical-align: middle;
        }

        img {
            border: 0;
        }

        .employer-name {
            font-size: 16px;
            margin: 7px 0;
            margin-top: 0;
        }

        .text-highlight {
            color: #00b14f;
        }

        .text-highlight {
            color: #00b14f;
        }

        .text-gray {
            color: #999;
        }

        .open-time {
            font-size: 13px;
            line-height: 20px;
        }

        .box-white {
            background-color: #fff;
        }

        .box-overflow-hidden {
            overflow: hidden;
        }

        .box-relative {
            position: relative;
        }

        .box {
            margin-bottom: 20px;
            padding: 20px;
        }

        .box-group {
            margin-top: -20px;
        }

        a {
            color: #337ab7;
            text-decoration: none;
        }

        a {
            background-color: transparent;
        }

        .box-recruiter {
            margin-right: -15px;
            margin-left: -15px;
        }
    </style>
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
                <view-profile :data="{{ json_encode([
                    'job' => $job,
                ]) }}">
                </view-profile>
            </div><!-- end container-fluid -->
        </div>
    </section><!-- end dashboard-area -->

    <div id="back-to-top">
        <i class="la la-angle-up" title="Go top"></i>
    </div>

@endsection
