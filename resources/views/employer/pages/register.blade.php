@extends('layout.index-employ')
@section('content')
    <register-employer
        :data="{{ json_encode([
            'urlStore' => route('register.employer.create'),
            'urlBack' => route('index'),
            'location' => $location,
            'request' => $request ?? '',
        ]) }}">
    </register-employer>
@endsection
