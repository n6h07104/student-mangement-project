@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">batches page</div>
    <div
    class="card-body">
    <form action="{{ route("batch.store") }}" method="post">
    @csrf
    <label>Name</label>
    <input type="text" name="name" id="name" placeholder="Name"  class="form-control"><br>

    <label>course name</label>
    {{-- <input type="text" name="course_id" id="course_id" placeholder="course_id" class="form-control"><br> --}}
        <select name="course_id" id="course_id" class="form-control">
            @foreach ( $course as $id=>$name)

            <option value="{{ $id }}">{{ $name }}</option>
            @endforeach
        </select>

    <label>start date</label>
    <input type="text" name="start_data" id="start_data" placeholder="date('Y-m-d H:i:s')" class="form-control"><br>
    <input type="submit" value="save" class="btn btn-success"><br>
    </form>
</div>
</div>
@endsection
