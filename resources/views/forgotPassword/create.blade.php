@extends('layouts.guest')

@section('content')
<forgot-password-create
    :data="{{ json_encode([
        'loginUrl' => route('login.index'),
        'storeUrl' => route('forgot_password.store')
    ]) }}"
></forgot-password-create>
@endsection
