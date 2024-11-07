@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Students page</div>
        <div class="card-body">
<div class="card-body">
    <h5 class="card-tital">Nmae: {{ $data->name }} </h5>
    <p class="card-text">Address:{{ $data->address }}  </p>
    <p class="card-text">Mobile: {{ $data->mobile }} </p>
</div>
        </div>

</div>

@endsection