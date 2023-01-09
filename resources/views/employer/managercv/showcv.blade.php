@php
    use Carbon\Carbon;
    use App\Enums\UserRecruit;
@endphp
@extends('employer.layout.index')
@section('content')
    <div class="dashboard-content-wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="billing-form-item">
                        <show-cv
                            :data="{{ json_encode([
                                'cv' => $cv,
                                'CheckUser' => Auth::guard('user')->user()->id,
                            ]) }}">
                        </show-cv>
                    </div><!-- end billing-form-item -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div>
@endsection
