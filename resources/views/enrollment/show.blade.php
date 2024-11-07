@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">enrollments page</div>
        <div class="card-body">
<div class="card-body">
    <h5 class="card-tital">enroll_on:    {{ $data->enroll_on }} </h5>
    <p class="card-text">join_data:  {{ $data->join_data }}  </p>
    <p class="card-text">fee:  {{ $data->fee }} </p>
    <p class="card-text">student_id:  {{ $data->student_id }} </p>
    <p class="card-text">batch_id:  {{ $data->batch_id }} </p>
</div>
        </div>

</div>

@endsection