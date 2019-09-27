@extends('layout/master')


@section('body')

<div class="card align-items-center">
  <form action="{{ route('posts.insert') }}" method="post">
    @csrf
    <div class="form-group">
      <input type="hidden" name="id" value="{{data->id}}">
      <label for="title">First Name : </label>
      <input type="text" class="form-control" id="first_name" name="first_name" required="true" placeholder="Title" >
    </div>
    <div class="form-group">
      <label for="title">last Name : </label>
      <input type="text" class="form-control" id="title" name="title" required="true" placeholder="Title" >
    </div>
    <div class="form-group">
      <label for="title">Age : </label>
      <input type="text" class="form-control" id="title" name="title" required="true" placeholder="Title" >
    </div>
    <div class="form-group">
      <label for="title">Address : </label>
      <input type="text" class="form-control" id="title" name="title" required="true" placeholder="Title" >
    </div>
    <button type="submit" class="btn btn-primary">Insert</button>
  </form>
</div>

@endsection('body')
