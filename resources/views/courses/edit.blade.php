@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">courses page</div>
    <div
    class="card-body">
    <form action="{{ route("course.update",$data->id) }}" method="post">
    @csrf
    @method('PUT')
    <label>Name</label>
    <input type="text" name="name" value="{{ $data->name }}" id="name"   class="form-control"><br>
    <label>syllabus</label>
    <input type="text" name="syllabus" value="{{ $data->syllabus }}" id="exampleInputName1" placeholder="syllabus" class="form-control"><br>
    <label>duration</label>
    <input type="text" name="duration" value="{{ $data->duration }}" id="duration" placeholder="duration" class="form-control"><br>
    <input type="submit" value="save" class="btn btn-success"><br>
    </form>
</div>
</div>
@endsection
