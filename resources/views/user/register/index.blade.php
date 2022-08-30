@extends('layouts.userGuest')
@section('content')
    <register
        :data="{{json_encode([
            'urlStep1' => route('register.step1_1')
        ]) }}">
    </register>
@endsection
