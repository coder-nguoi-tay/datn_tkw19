@extends('layouts.guest')

@section('content')
<user-forgot-password-create :data="{{ json_encode([
            'loginUrl' => route('login.index'),
            'storeUrl' => route('forgot_password.store'),
        ]) }}">
</user-forgot-password-create>
@endsection