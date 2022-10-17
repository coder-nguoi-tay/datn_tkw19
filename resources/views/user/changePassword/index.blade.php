@extends('layouts.user')
@section('content')
    <change-password
        :data="{{ json_encode([
            'urlUpdate' => route('change-password.update'),
            'urlBack' => route('my-page.index'),
            'user' => $user,
        ]) }}">
    </change-password>
@endsection
