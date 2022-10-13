@extends('layouts.user')

@section('content')
    <search-page
        :data="{{ json_encode([
            'events' => $events,
        ]) }}"
    >
    </search-page>
@endsection
