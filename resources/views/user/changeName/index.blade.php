@extends('layouts.user')
@section('content')
<change-name :data="{{ json_encode([
    'urlUpdate' => route('change-user-name.update', $user->id),
    // 'urlBack' => route('home.index'),
    'user' => $user
]) }}"></change-name>
@endsection