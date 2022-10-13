@extends('layouts.user')

@section('content')
    <search-page
        :data="{{ json_encode([
            'events' => $events,
            'categories' => $categories,
            'areas' => $areas,
            'prefectures' => $prefectures,
        ]) }}">
    </search-page>
@endsection
