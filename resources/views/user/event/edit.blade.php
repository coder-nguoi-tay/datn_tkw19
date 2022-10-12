@extends('layouts.user')
@section('content')
    <event-form
        :data="{{ json_encode([
            'editMode' => true,
            'urlDelete' => route('event.destroy', $event->id),
            'urlStore' => route('event.update', $event->id),
            'urlEventList' => route('event.index'),
            'urlUploadFile' => route('upload'),
            'urlSearchTag' => route('search-tag'),
            'event' => $event,
            'categories' => $categories,
            'areas' => $areas,
            'prefectures' => $prefectures,
            'suggestTags' => $suggestTags,
            'userCredit' => $userCredit,
            'STRIPE_PUBLISH_KEY' => env('STRIPE_PUBLISH_KEY'),
        ]) }}">
    </event-form>
@endsection
