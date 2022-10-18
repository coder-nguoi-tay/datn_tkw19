@extends('layouts.user')
@section('content')
    <change-email
        :data="{{ json_encode([
            'urlUpdate' => route('change-email.update', $user->id),
            'urlBack' => route('my-page.index'),
            'urlCheckEmail' => route('check-email'),
            'user' => $user,
        ]) }}">
    </change-email>
@endsection
