@extends('client.layout.index')
@section('client')
    <job-manager :data="{{ json_encode([
        'job' => $job,
        'total' => $total,
    ]) }}">
    </job-manager>
@endsection
