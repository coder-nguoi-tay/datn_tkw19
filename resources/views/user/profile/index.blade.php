@extends('layouts.user')
@section('content')
    <profile
        :data="{{ json_encode([
            'urlUpdate' => route('profile.update', $user->id),
            'urlBack' => route('my-page.index'),
            'prefectureOptions' => $prefectures,
            'cityOptions' => $cities,
            'user' => $user,
        ]) }}">
    </profile>
@endsection
