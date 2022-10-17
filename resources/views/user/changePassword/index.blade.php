@extends('layouts.user')
@section('content')
    <change-password
        :data="{{ json_encode([
            'urlUpdate' => route('change-password.update', $user->id),
            'urlBack' => route('my-page.index'),
        ]) }}">
    </change-password>
@endsection
