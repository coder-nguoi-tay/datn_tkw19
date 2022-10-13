@extends('layouts.user')

@section('content')
    <my-page
        :data="{{ json_encode([
            'userInfo' => $userInfo,
            'urlEarn' => route('myPage.earn'),
            'urlMyPage' => route('my-page.index'),
        ]) }}">
    </my-page>
@endsection
