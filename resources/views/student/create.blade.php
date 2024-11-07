@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">student page</div>
    <div
    class="card-body">
    <form action="{{ route("student.store") }}" method="post">
    @csrf
    <label>Name</label>
    <input type="text" name="name" id="name" placeholder="Name"  class="form-control"><br>
    <label>Address</label>
    <input type="Address" name="address" id="exampleInputName1" placeholder="Address" class="form-control"><br>
    <label>Mobile</label>
    <input type="text" name="mobile" id="mobil" placeh
    older="Mobile" class="form-control"><br>
    <input type="submit" value="save" class="btn btn-success"><br>
    </form>
</div>
</div>
@endsection