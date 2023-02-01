@extends('client.layout.login')
@section('content')
    <forgot-pass
        :data="{{ json_encode([
            'urlStore' => route('FogotPassSuccsess'),
            'message' => $message ?? '',
        ]) }}">
    </forgot-pass>
@endsection
