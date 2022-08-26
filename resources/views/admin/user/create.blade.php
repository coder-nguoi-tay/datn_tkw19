@extends('layouts.admin')

@section('content')
<user-create :data="{{ json_encode([
    'urlStore' => route('admin.user.store'),
    'urlCheckEmail' => route('admin.user.checkEmail'),
    'urlBack' => session()->get('admin.user.list')[0] ?? route('admin.user.index')
]) }}"></user-create>
@endsection
