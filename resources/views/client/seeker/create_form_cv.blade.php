@extends('client.layout.seeker')
@section('seeker')
    <show-cv-client
        :data="{{ json_encode([
            'urlStore' => route('user.storeFormCV'),
           
        ]) }}">
        ></show-cv-client>
@endsection
