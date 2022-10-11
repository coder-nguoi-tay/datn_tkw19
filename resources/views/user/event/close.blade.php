@extends('layouts.user')
@section('content')
    <event-close
        :data="{{ json_encode([
            'events' => $events,
            'urlList' => route('event.index'),
            'urlCreate' => route('event.create'),
            'urlClose' => route('event.close'),
        ]) }}">
    </event-close>
@endsection
