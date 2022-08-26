@extends('layouts.admin')

@section('content')
<user-edit :data="{{ json_encode([
    'urlUpdate' => route('admin.user.update', $user->id),
    'urlCheckEmail' => route('admin.user.checkEmail'),
    'user' => $user,
    'urlBack' => session()->get('admin.user.list')[0] ?? route('admin.user.index')
]) }}"></user-edit>
@endsection
