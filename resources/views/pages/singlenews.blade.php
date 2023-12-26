@extends('layout.default')

@section('content')
    <h1>{{ $news->title }}</h1>
    <h3>by: {{ $news->user->name }}</h3>
    @foreach ($news->teams as $team)
        <a href="/teams/{{ $team->name }}">{{ $team->name }}</a>
    @endforeach
    <p>{{ $news->content }}</p>
@endsection