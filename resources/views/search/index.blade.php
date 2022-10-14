@extends('layouts.user')

@section('content')
    <search-page
        :data="{{ json_encode([
            'events' => $events,
            'categories' => $categories,
            'areas' => $areas,
            'request' => $request,
            'prefectures' => $prefectures,
            'urlSearchTag' => route('search-tag'),
        ]) }}">
    </search-page>
@endsection
