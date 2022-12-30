@php
    use Carbon\Carbon;
@endphp
@extends('layouts.admin')
@section('content')
    <update-profile-employer
        :data="{{ json_encode([
            'employer' => $employer,
            'email' => Auth::guard('user')->user()->email,
            'urlStore' => route('employer.new.store'),
            'paymentHistory' => $paymentHistory,
        ]) }}">
    </update-profile-employer>
@endsection
