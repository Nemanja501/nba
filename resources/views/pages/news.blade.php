@extends('layout.default')

@section('content')
<form method="POST" action="{{ url('/search') }}">
  @csrf
  <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Search</span>
    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="search">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@include('components.status')
@include('components.sidebar')
@foreach ($news as $singleNews)
<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{ $singleNews->title }}</h5>
      <h6 class="card-subtitle mb-2 text-body-secondary">by: {{ $singleNews->user->name }}</h6>
      <p class="card-text">{{ $singleNews->content }}</p>
      <a href="/news/{{ $singleNews->id }}" class="card-link">Read more</a>
    </div>
  </div>
@endforeach
{{ $news }}
@endsection