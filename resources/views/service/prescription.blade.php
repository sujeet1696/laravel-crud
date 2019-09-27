@extends('layout/master')

@section('body')

<div class="card align-item-center">
  <div class="card-header text-center text-uppercase">
      Add Patient Description
  </div>
  <div class="card-body text-uppercase">
    <form action="{{ route('prescriptionAdd') }}" method="post">
      @csrf
      <input type="hidden" class="form-control"  name="patient_id" value="{{ $id }}" >
      <div class="form-group">
        <label for="title">illness Description : </label>
        <textarea class="form-control" rows="5" id="illness_description" name="illness_description" required="true" placeholder="illness_description"></textarea>
      </div>
      <div class="form-group">
        <label for="text">Prescription : </label>
        <textarea class="form-control" rows="5" id="prescription" name="prescription" required="true" placeholder="Prescription"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>

@endsection('body')
