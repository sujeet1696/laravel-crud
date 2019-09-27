@extends('layout/master')

@section('body')

@php
  $route_path = 'patientUpdate';
  if($data->id == 'id'){
    $route_path = 'patientInsert';
  }
@endphp

<div class="card align-items-center">
  <form action="{{ route($route_path) }}" method="post">
    @csrf
      <input type="hidden" class="form-control" id="id" name="id" required="true" placeholder="Title" value="{{ $data->id }}" >
    <div class="form-group">
      <label for="title">Name : </label>
      <input type="text" class="form-control" id="first_name" name="name" required="true"  value="{{ $data->name }}">
    </div>
    <div class="form-group">
      <label for="title">Age : </label>
      <input type="number" class="form-control" id="age" name="age" required="true"  value="{{ $data->age }}">
    </div>
    <div class="form-group">
      <label for="text">Address : </label>
      <textarea class="form-control" rows="5" id="address" name="address" required="true" placeholder="content">{{ $data->address }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection('body')
