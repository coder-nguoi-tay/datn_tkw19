@extends('layouts.guest')

@section('content')
<user-password-reset :data="{{ json_encode([
            'urlUpdate' => route('password_reset.update', $token),
            'loginUrl' => route('login.index'),
        ]) }}">
</user-password-reset>
@endsection