@extends('layouts.guest')

@section('content')
<login :data="{{ json_encode([
    'request' => $request,
    'urlForgotPass' => route('forgot_password.create'),
    'message' => $message ?? '',
]) }}"></login>
@endsection
