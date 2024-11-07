@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">batches page</div>
    <div
    class="card-body">
    <form action="{{ route("batch.update",$data->id) }}" method="post">
    @csrf
    @method('PUT')
    <label>Name</label>
    <input type="text" name="name" value="{{ $data->name }}" id="name" placeholder="Name"  class="form-control"><br>
    <label>course name</label>
    <input type="text" name="course_id" value="{{ $data->course_id }}" id="course_id" placeholder="course_id" class="form-control"><br>
    <label>start date</label>
    <input type="text" name="start_data" value="{{ $data->start_data }}" id="start_data" placeholder="date('Y-m-d H:i:s')" class="form-control"><br>
    <input type="submit" value="save" class="btn btn-success"><br>
    </form>
</div>
</div>
@endsection
