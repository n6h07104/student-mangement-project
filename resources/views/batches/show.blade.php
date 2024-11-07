@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">batches page</div>
        <div class="card-body">
<div class="card-body">
    <h5 class="card-tital">Nmae:    {{ $data->name }} </h5>
    <p class="card-text">course_id:  {{ $data->courses->name }}  </p>
    <p class="card-text">start_date:  {{ $data->start_data }} </p>
</div>
        </div>

</div>

@endsection
