@extends('layout/master')
<?php $n = ''; ?>
@section('body')
<div class="container">
 <div class="card text-center" style="background-color: #E9EBBD;">
       <div class="card-header text-uppercase">
          @if(!empty($data->toArray()))
            {{ $data[0]->name }}

          @endif
       </div>
       <div class="card-body text-uppercase">

            <table class="table table-striped table-bordered">
              <thead class="thead-dark">
                <tr>
                  <th>Description</th>
                  <th>prescription</th>
                  <th>Date</th>
                </tr>
              </thead>
              <tbody>
                  @forelse($data as $patient)
                    <tr>
                      <td>{{ $patient->illness_description }}</td>
                      <td>{{ $patient->prescription }}</td>
                      <td>{{ $patient->created_at }}</td>
                    </tr>
                  @empty
                    <tr>
                      <td colspan="3" class="text-center">No records found</td>
                    </tr>
                  @endforelse
              </tbody>
          </table>
       </div>
       <div class="card-footer">
           <button type="button" class="btn btn-success" ><a class="btn btn-success" href="{{ route('patients') }}">Back</a></button>
       </div>
   </div>
 </div>
@endsection('body')
