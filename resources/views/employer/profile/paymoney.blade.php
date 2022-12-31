@extends('layouts.admin')
@section('content')
    <pay-money :data="{{ json_encode([
        'urlStore' => route('employer.profile.paymoney.payment'),
    ]) }}">
    </pay-money>
@endsection
