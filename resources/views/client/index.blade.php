@extends('client.layout.index')
@section('client')

    <body>
        {{ dd($job) }}
        <home-client :data="{{ json_encode([
            'job' => $job,
        ]) }}">
            <home-client>
    </body>

    </html>
@endsection
