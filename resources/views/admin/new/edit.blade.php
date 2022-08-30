@extends('layouts.admin')

@section('content')
<new-edit :data="{{ json_encode([
    'urlUpdate' => route('admin.news.update', $new->id),
    'news' => $new,
    'title' => $title,
    'urlBack' => route('admin.news.index')
]) }}"></new-edit>
@endsection