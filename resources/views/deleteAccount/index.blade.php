@extends('layouts.user')

@section('content')
    <delete-account :data="{{ json_encode([
            'urlBack' => route('my-page.index'),
        ]) }}"
    >
    </delete-account>
@endsection
