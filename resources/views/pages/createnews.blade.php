@extends('layout.default')

@section('content')
<form method="POST" action="{{ url('/news') }}">
    @csrf
    <div class="mb-3">
      <label class="form-label">Title</label>
      <input type="text" class="form-control" name="title">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Content</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content"></textarea>
    </div>
    @foreach ($teams as $team)
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="teams[]" value="{{ $team->id}}" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
            {{ $team->name }}
            </label>
        </div>
    @endforeach
    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection