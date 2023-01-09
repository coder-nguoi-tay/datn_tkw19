@extends('employer.layout.index')
@section('content')
    <change-password-employer
        :data="{{ json_encode([
            'urlStore' => route('employer.employer.changePasswordSucsses'),
        ]) }}">
    </change-password-employer>
@endsection
