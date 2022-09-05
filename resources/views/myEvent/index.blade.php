@extends('layouts.user')

@section('content')
    <my-event :data="{{ json_encode([
        'urlDetail' => route('my-event.show', 1),
]) }}"></my-event>
@endsection
