@extends('layouts.userGuest')

@section('content')
    <user-login
        :data="{{ json_encode([
            'request' => $request,
            // 'urlForgotPass' => route('forgot_password.create'),
            'message' => $message ?? '',
            'GOOGLE_RECAPTCAR_V2' => env('GOOGLE_RECAPTCAR_V2'),
            'GOOGLE_PUBLIC_KEY_V2' => env('GOOGLE_PUBLIC_KEY_V2'),
        ]) }}">
    </user-login>
@endsection
