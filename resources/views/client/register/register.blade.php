@extends('client.layout.login')
@section('content')
    <form-register
        :data="{{ json_encode([
            'urlRegister' => route('owner.update.register'),
            'message' => $message ?? '',
        ]) }}">

    </form-register>
@endsection
