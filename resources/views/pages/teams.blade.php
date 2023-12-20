@extends('layout.default')

@section('content')
<h1>All teams</h1>
<div class="list-group">
    @foreach ($teams as $team)
        <a href="/teams/{{ $team->name }}" class="list-group-item list-group-item-action">{{ $team->name }}</a>
    @endforeach
  </div>
@endsection