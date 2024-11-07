@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">courses page</div>
    <div
    class="card-body">
    <form action="{{ route("course.store")}}" method="post">
    @csrf
    <label>Name</label>
    <input type="text" name="name" value="name" id="name" placeholder="Name"  class="form-control"><br>

    <label>syllabus</label>
    <input type="text" name="syllabus" id="syllabus" placeholder="syllabus" class="form-control"><br>

    <label>duration</label>
    <input type="text" name="duration" id="duration" placeholder="duration" class="form-control"><br>

    <input type="submit" value="save" class="btn btn-success"><br>
    </form>
</div>
</div>
@endsection