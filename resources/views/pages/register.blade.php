@extends('layout.default')

@section('content')
<form method="POST" action="{{ url('/auth') }}">
    @csrf
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="password">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="exampleInputPassword2" name="password_confirmation">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <br>
  @include('components.errors')
  @include('components.status')
@endsection