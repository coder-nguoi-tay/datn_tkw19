@extends('layouts.guest')

@section('content')
<user-forgot-password-success :login-url="{{json_encode($loginUrl)}}"></user-forgot-password-success>
@endsection