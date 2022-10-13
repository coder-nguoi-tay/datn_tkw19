@extends('layouts.user')
@section('content')
    <notification-setting
        :data="{{ json_encode([
            'urlBack' => route('my-page.index'),
            'userNotification' => $user->userNotificationSetting,
            'urlUpdate' => route('notification-setting.update', $user->id),
        ]) }}">
    </notification-setting>
@endsection
