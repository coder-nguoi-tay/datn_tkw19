@extends('layouts.user')
@section('content')
    <event-list :data="{{ json_encode([
        'events' => $events,
        'showName' => $showName,
    ]) }}">
    </event-list>
@endsection
