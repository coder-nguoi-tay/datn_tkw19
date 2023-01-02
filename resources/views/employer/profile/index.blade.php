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
            'urlStoreEmployer' => route('employer.profile.update', $employer->id),
            'paymentHistory' => $paymentHistory,
            'urlAccuracyCompany' => route('employer.profile.ImageAccuracy'),
            'accuracy' => $accuracy,
            'Company' => $Company,
            'urlStoreCompany' => route('employer.register-company.store'),
        ]) }}">
    </update-profile-employer>
@endsection
