@extends('layouts.admin')

@section('content')
<new-create :data="{{ json_encode([
    'urlStore' => route('admin.news.store'),
    'urlBack' => route('admin.news.index'),
    'title' => $title,
]) }}"></new-create>
@endsection