@extends('layouts.user')
@section('content')
    <event-form
        :data="{{ json_encode([
            'urlStore' => route('event.store'),
            'urlEventList' => route('event.index'),
            'urlUploadFile' => route('upload'),
            'urlSearchTag' => route('search-tag'),
            'categories' => $categories,
            'areas' => $areas,
            'prefectures' => $prefectures,
            'suggestTags' => $suggestTags,
        ]) }}">
    </event-form>
@endsection
