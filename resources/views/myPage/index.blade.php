@extends('layouts.user')

@section('content')
    <my-page
        :data="{{ json_encode([
            'urlEarn' => route('myPage.earn'),
            'urlMyPage' => route('my-page.index'),
        ]) }}">
    </my-page>
@endsection
