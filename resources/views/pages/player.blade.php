@extends('layout.default')

@section('content')
    <h1>First Name: {{ $player->first_name }}</h1>
    <h1>Last Name: {{ $player->last_name }}</h1>
    <h3>Email: {{ $player->email }}</h3>
    <a style="text-decoration: none" href="/teams/{{ $player->team->name }}"><h3>Team: {{ $player->team->name }}</h3></a>
@endsection