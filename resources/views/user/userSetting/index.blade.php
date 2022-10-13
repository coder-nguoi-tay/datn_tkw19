@php
use App\Enums\Gender;
@endphp
@extends('layouts.user')
@section('content')
    <user-setting
        :data="{{ json_encode([
            'urlUpdate' => route('user-setting.update', $user->id),
            'urlBack' => route('my-page.index'),
            'prefectureOptions' => $prefectures,
            'cityOptions' => $cities,
            'user' => $user,
            'genderOptions' => Gender::parseArray(),
            'jobOptions' => $jobs,
            'industries' => $industries,
        ]) }}">
    </user-setting>
@endsection
