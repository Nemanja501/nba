@extends('layout.default')

@section('content')
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