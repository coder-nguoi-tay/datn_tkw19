@extends('layouts.guest')

@section('content')
<password-reset
  :data="{{ json_encode([
    'urlUpdate' => route('password_reset.update', $token),
    'loginUrl' => route('login.index')
  ]) }}"
></password-reset>
@endsection
