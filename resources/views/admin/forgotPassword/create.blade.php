@extends('layouts.guest')

@section('content')
    <forgot-password-create
        :data="{{ json_encode([
            'loginUrl' => route('admin.login.index'),
            'storeUrl' => route('admin.forgot_password.store'),
        ]) }}">
    </forgot-password-create>
@endsection
