@php
    use Carbon\Carbon;
@endphp
@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="fade-in">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-header">
                        <header class="header header-sticky">
                            <div class="container-fluid">
                                <label class=" px-md-0 me-md-3"></label>
                                <ul class="header-nav ms-3 d-flex">
                                    @if (Auth::guard('user')->user()->id != $cv->status)
                                        <btn-payment-employer
                                            :message-confirm="{{ json_encode('Bạn có chắc muốn mua CV không ?') }}"
                                            :delete-action="{{ json_encode(route('employer.changecAcount', $cv->id)) }}"
                                            :count-getskill="{{ json_encode([
                                                // 'data' => count($cv->getskill),
                                                'accPayment' => $accPayment,
                                            ]) }}">
                                        </btn-payment-employer>
                                    @endif
                                </ul>
                            </div>
                        </header>
                    </div>
                    <show-cv
                        :data="{{ json_encode([
                            'cv' => $cv,
                            'CheckUser' => Auth::guard('user')->user()->id,
                        ]) }}">
                    </show-cv>
                    {{-- </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
