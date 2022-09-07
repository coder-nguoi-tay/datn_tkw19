@php
use App\Enums\Gender;
use App\Enums\UserType;
use App\Enums\JobType;
@endphp
@extends('layouts.admin')

@section('content')
    <user-edit
        :data="{{ json_encode([
            'urlUpdate' => route('admin.user.update', $user->id),
            'urlCheckEmail' => route('admin.user.checkEmail'),
            'urlCheckPhone' => route('admin.user.checkPhone'),
            'user' => $user,
            'genderOptions' => Gender::parseArray(),
            'typeOptions' => UserType::parseArray(),
            'jobOptions' => JobType::parseArray(),
            'prefectureOptions' => $prefectures,
            'cityOptions' => $cities,
            'urlBack' => session()->get('admin.user.list')[0] ?? route('admin.user.index'),
        ]) }}">
    </user-edit>
@endsection
