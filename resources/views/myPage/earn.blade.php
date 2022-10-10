@extends('layouts.user')

@section('content')
    <my-page-earn
        :data="{{ json_encode([
            'urlMyPage' => route('my-page.index'),
        ]) }}">
    </my-page-earn>
@endsection
