@extends('layout')
@section('content')
<div class="card">
    <div class="card-header"> Edit payment page</div>
        <div class="card-body">
<div class="card-body">
    <h5 class="card-tital">Enrollment no: {{ $data->enrollment_id }} </h5>
    <p class="card-text">Paid date:{{ $data->paid_date }}  </p>
    <p class="card-text">Amount: {{ $data->amount }} </p>
</div>
        </div>

</div>

@endsection