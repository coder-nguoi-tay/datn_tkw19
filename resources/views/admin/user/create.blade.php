@php
use App\Enums\Gender;
use App\Enums\UserType;
use App\Enums\JobType;
@endphp
@extends('layouts.admin')

@section('content')
    <user-create
        :data="{{ json_encode([
            'urlStore' => route('admin.user.store'),
            'urlCheckEmail' => route('admin.user.checkEmail'),
            'urlCheckPhone' => route('admin.user.checkPhone'),
            'urlBack' => session()->get('admin.user.list')[0] ?? route('admin.user.index'),
            'genderOptions' => Gender::parseArray(),
            'typeOptions' => UserType::parseArray(),
            'jobOptions' => JobType::parseArray(),
            'prefectureOptions' => $prefectures,
            'cityOptions' => $cities,
        ]) }}">
    </user-create>
@endsection
