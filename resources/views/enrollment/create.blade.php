@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">enrollments page</div>
    <div
    class="card-body">
    <form action="{{ route("enrollment.store") }}" method="POST">
    @csrf
    {{-- @method("PUT") --}}
    <label>enroll_on</label>
    <input type="text" name="enroll_on" value="enroll_on" id="enroll_on" placeholder="enroll_on"  class="form-control"><br>

    <label>join_date</label>
    <input type="text" name="join_data" id="join_data" placeholder="join_date" class="form-control"><br>

    <label>fee</label>
    <input type="text" name="fee" id="fee" placeholder="fee" class="form-control"><br>

    <label>student_id</label>
    {{-- <input type="text" name="student_id" id="student_id" placeholder="student_id" class="form-control"><br> --}}
    <select name="student_id" id="student_id" class="form-control">
        @foreach ( $stu as $id=>$name)
            
        <option value="{{ $id }}">{{ $name }}</option>
        @endforeach
    </select>

    <label>batch_id</label>
    {{-- <input type="text" name="batch_id" id="batch_id" placeholder="batch_id" class="form-control"><br> --}}
    <select name="batch_id" id="batch_id" class="form-control">
        @foreach ( $bat as $id=>$name)
            
        <option value="{{ $id }}">{{ $name }}</option>
        @endforeach
    </select>

    <input type="submit" value="save" class="btn btn-success"><br>
    </form>
</div>
</div>
@endsection