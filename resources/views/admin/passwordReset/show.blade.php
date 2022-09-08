@extends('layouts.guest')

@section('content')
    <password-reset
        :data="{{ json_encode([
            'urlUpdate' => route('admin.password_reset.update', $token),
            'loginUrl' => route('admin.login.index'),
        ]) }}">
    </password-reset>
@endsection
