@php
    use Carbon\Carbon;
    use App\Enums\UserRecruit;
@endphp
@extends('client.layout.seeker')
@section('content')
    <div class="dashboard-content-wrap" style="background: #ffff">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 row">
                    <div class="col-10 breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
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
                    <div class="col-2">
                        <a class="btn btn-info btn-create-cv" href="{{ route('user.createFormCV') }}">Tạo cv theo Form</a>
                    </div>
                </div>
                <div class="_dashboard_content_header br-bottom py-3 px-3">
                    <div class=" _dashboard_cv">
                        <user-uploadcv
                            :data="{{ json_encode([
                                'urlStore' => route('quan-ly-cv.store'),
                                'urlBack' => route('quan-ly-cv.index'),
                            ]) }}">
                        </user-uploadcv>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
