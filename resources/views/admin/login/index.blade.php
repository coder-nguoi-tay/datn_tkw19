@extends('layouts.guest')

@section('content')
    <login
        :data="{{ json_encode([
            'request' => $request,
            'urlForgotPass' => route('admin.forgot_password.create'),
            'message' => $message ?? '',
        ]) }}">
    </login>
@endsection
