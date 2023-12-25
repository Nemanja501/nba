@extends('layout.default')

@section('content')
    <h1>{{ $news->title }}</h1>
    <h3>by: {{ $news->user->name }}</h3>
    <p>{{ $news->content }}</p>
@endsection