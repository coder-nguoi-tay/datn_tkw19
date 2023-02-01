@extends('client.layout.login')
@section('content')
    <change-pass :data="{{ json_encode([
        'urlStore' => route('changePasswordSuccsess', $token),
    ]) }}">
    </change-pass>
@endsection
