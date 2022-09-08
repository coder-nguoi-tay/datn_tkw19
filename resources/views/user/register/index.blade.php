@php
use App\Enums\Gender;
use App\Enums\UserType;
use App\Enums\JobType;
@endphp
@extends('layouts.userGuest')
@section('content')
    <register
        :data="{{ json_encode([
            'VN_MODE' => env('VN_MODE'),
            'urlCheckPhone' => route('register.checkPhone'),
            'urlStore' => route('register.store'),
            'urlSendCode' => route('register.sendCode'),
            'urlVerifyCode' => route('register.verifyCode'),
            'GOOGLE_RECAPTCAR_V2' => env('GOOGLE_RECAPTCAR_V2'),
            'GOOGLE_PUBLIC_KEY_V2' => env('GOOGLE_PUBLIC_KEY_V2'),
            'genderOptions' => Gender::parseArray(),
            'typeOptions' => UserType::parseArray(),
            'jobOptions' => JobType::parseArray(),
            'prefectureOptions' => $prefectures,
            'cityOptions' => $cities,
        ]) }}">
    </register>
@endsection
