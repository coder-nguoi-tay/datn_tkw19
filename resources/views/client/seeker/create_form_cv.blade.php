@extends('client.layout.seeker')
@section('seeker')
    <show-cv-client
        :data="{{ json_encode([
            'urlStore' => route('user.storeFormCV'),
            'user' => $user ?? '',
            'user_name' => $user_name,
        ]) }}">
        ></show-cv-client>
@endsection
