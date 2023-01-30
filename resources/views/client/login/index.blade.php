@extends('client.layout.login')
@section('content')
    <form-login
        :data="{{ json_encode([
            'urlStore' => route('owner.store'),
            'message' => $message ?? '',
        ]) }}">
    </form-login>
@endsection
