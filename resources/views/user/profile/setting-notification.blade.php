@extends('layouts.user')
@section('content')
    <setting-notification
        :data="{{ json_encode([
            'user' => $user,
            'urlStore' => route('user.profile.notification', $user->id),
            
        ]) }}">
        ></setting-notification>
@endsection
