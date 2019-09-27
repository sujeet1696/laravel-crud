@extends('layout/master')

@section('body')

@php
  $route_path = 'posts.update';
  if($data->id == 'id'){
    $route_path = 'posts.insert';
  }
@endphp

<div class="card align-items-center">
  <form action="{{ route($route_path) }}" method="post">
    @csrf
      <input type="hidden" class="form-control" id="id" name="id" required="true" placeholder="Title" value="{{ $data->id }}" >
    <div class="form-group">
      <label for="title">Title : </label>
      <input type="text" class="form-control" id="title" name="title" required="true"  value="{{ $data->title }}">
    </div>
    <div class="form-group">
      <label for="text">Content : </label>
      <textarea class="form-control" rows="5" id="content" name="content" required="true" placeholder="content">{{ $data->content }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection('body')
