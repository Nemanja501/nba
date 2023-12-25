@extends('layout.default')

@section('content')
    <h1>Name: {{ $team->name }}</h1>
    <h3>Email: {{ $team->email }}</h3>
    <h3>Address: {{ $team->address }}</h3>
    <h3>City: {{ $team->city }}</h3>
    <h3>Players:</h3>
    <ul class="list-group list-group-flush">
        @foreach ($team->players as $player)
            <a style="text-decoration: none" href="/players/{{ $player->id }}"><li class="list-group-item">{{ $player->first_name }} {{ $player->last_name }}</li></a>
        @endforeach
    </ul>
    <br>
    <h3>Comments:</h3>
    @include('components.comments')
@endsection