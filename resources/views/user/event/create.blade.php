@extends('layouts.user')
@section('content')
    <event-create
        :data="{{ json_encode([
            'urlStore' => route('event.store'),
            'urlUploadFile' => route('upload'),
            'categories' => $categories,
            'areas' => $areas,
            'prefectures' => $prefectures,
        ]) }}">
    </event-create>
@endsection
