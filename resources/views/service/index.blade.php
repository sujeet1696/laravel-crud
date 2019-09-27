@extends('layout.master')

@section('body')
<div class="container">
    <div class="row">
        <div class="col-12">
          <form class="" action="{{ route('patientSearch') }}" method="post">
            @csrf
            <div class="input-group">
              <input class="form-control border-secondary py-2" type="search" placeholder="search" name="name">
              <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit">
                  <i class="fa fa-search">Search</i>
                </button>
              </div>
            </div>
          </form>
        </div>
    </div><br><br>
    <div class="d-flex flex-row justify-content-end ">
      <button type="button" class="btn btn-success text-white" data-toggle="modal" data-target="#myModal">
        <a href="{{ route('patientAdd')}}">Add new record</a>
      </button>
    </div>
    <h2 style="color: #062f4f; font-family: 'Cormorant Unicase', serif;" class="font-weight-bold mb-4"> Records of patient </h2>
    <table class="table table-striped table-bordered">
      <thead class="thead-dark">
        <tr>
          <th>No.</th>
          <th>Name</th>
          <th>Age</th>
          <th>Address</th>
          <th>Action</th>
          <th>Action</th>
          <th>Action</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
          @forelse($data as $patient)
            <tr>
              <td>{{ $patient->id }}</td>
              <td>{{ $patient->name }}</td>
              <td>{{ $patient->age }}</td>
              <td>{{ $patient->address }}</td>
              <td>
                  <button type="button" class="btn btn-warning text-white"><a href="{{ route('patientEdit', $patient->id )}}">Edit</a></button>
              </td>
              <td>
                  <button type="button" class="btn btn-warning text-white"><a href="{{ route('patientDetail', $patient->id )}}">Details</a></button>
              </td>
              <td>
                  <button type="button" class="btn btn-success text-white"><a href="{{ route('patientprescription', $patient->id )}}">Add_Prescription</a></button>
              </td>
              <td>
                  <button type="button" class="btn btn-danger text-white"><a href="{{ route('patientDelete', $patient->id )}}">Delete</a></button>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="7" class="text-center">No records found</td>
            </tr>
          @endforelse
    </tbody>
  </table>
  {{ $data->links() }}
</div>

@endsection('body')
