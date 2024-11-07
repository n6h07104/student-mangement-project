@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Courses page</div>
        <div class="card-body">
<div class="card-body">
    <h5 class="card-tital">Nmae:    {{ $data->name }} </h5>
    <p class="card-text">syllabus:  {{ $data->syllabus }}  </p>
    <p class="card-text">duration:  {{ $data->duration() }} </p>
</div>
        </div>

</div>

@endsection