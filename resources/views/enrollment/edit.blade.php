@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">enrollments page</div>
    <div
    class="card-body">
    <form action="{{ route("enrollment.update",$data->id) }}" method="POST">
    @csrf
    @method("PUT")
    <label>enroll_on</label>
    <input type="text" name="enroll_on" value="{{ $data->enroll_on }}" id="enroll_on"   class="form-control"><br>

    <label>join_date</label>
    <input type="text" name="join_data" id="join_data" value="{{ $data->join_data }}"  class="form-control"><br>

    <label>fee</label>
    <input type="text" name="fee" id="fee" value="{{ $data->fee }}"  class="form-control"><br>

    <label>student_id</label>
    <input type="text" name="student_id" id="student_id" value="{{ $data->student_id }}"  class="form-control"><br>

    <label>batch_id</label>
    <input type="text" name="batch_id" id="batch_id" value="{{ $data->batch_id }}"  class="form-control"><br>


    <input type="submit" value="save" class="btn btn-success"><br>
    </form>
</div>
</div>
@endsection