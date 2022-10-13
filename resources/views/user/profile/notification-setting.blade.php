@extends('layouts.user')
@section('content')
    <notification-setting
        :data="{{ json_encode([
            'user' => $user,
            'urlMyevent' => route('my-event.index'),
            'urlStore' => route('user.profile.notification', $user->id),
        ]) }}">
    </notification-setting>
@endsection
