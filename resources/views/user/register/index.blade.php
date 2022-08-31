@php
use App\Enums\Gender;
use App\Enums\UserType;
@endphp
@extends('layouts.userGuest')
@section('content')
    <register
        :data="{{ json_encode([
            'VN_MODE' => env('VN_MODE'),
            'urlStore' => route('register.store'),
            'urlSendCode' => route('register.sendCode'),
            'urlVerifyCode' => route('register.verifyCode'),
            'GOOGLE_RECAPTCAR_V2' => env('GOOGLE_RECAPTCAR_V2'),
            'GOOGLE_PUBLIC_KEY_V2' => env('GOOGLE_PUBLIC_KEY_V2'),
            'genderOptions' => Gender::parseArray(),
            'typeOptions' => UserType::parseArray(),
        ]) }}">
    </register>
@endsection
