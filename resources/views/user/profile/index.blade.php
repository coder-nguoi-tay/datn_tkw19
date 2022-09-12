@php
    use App\Enums\Gender;
    use App\Enums\JobType;
@endphp
@extends('layouts.user')
@section('content')
    <profile
        :data="{{ json_encode([
            'urlUpdate' => route('profile.update',$user->id),
            'urlBack'=>route('my-event.index'),
            'genderOptions' => Gender::parseArray(),
            'jobOptions' => JobType::parseArray(),
            'prefectureOptions' => $prefectures,
            'cityOptions' => $cities,
            'user' =>$user
        ]) }}">
    </profile>

@endsection
