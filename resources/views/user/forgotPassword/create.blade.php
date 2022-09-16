@extends('layouts.guest')

@section('content')
<user-forgot-password-create :data="{{ json_encode([
            'loginUrl' => route('login.index'),
            'storeUrl' => route('forgot_password.store'),
            'GOOGLE_RECAPTCAR_V2' => env('GOOGLE_RECAPTCAR_V2'),
            'GOOGLE_PUBLIC_KEY_V2' => env('GOOGLE_PUBLIC_KEY_V2'),
        ]) }}">
</user-forgot-password-create>
@endsection