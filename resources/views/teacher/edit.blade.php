@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">teacher page</div>
    <div
    class="card-body">
    <form action="{{ route("teacher.update",$data->id) }}" method="post">
    @csrf
    @method('PUT')
    <label>Name</label>
    <input type="text" name="name" value="{{ $data->name }}" id="name"   class="form-control"><br>
    <label>Address</label>
    <input type="Address" name="address" value="{{ $data->address }}" id="exampleInputName1" placeholder="Address" class="form-control"><br>
    <label>Mobile</label>
    <input type="text" name="mobile" value="{{ $data->mobile }}" id="mobil" placeh
    older="Mobile" class="form-control"><br>
    <input type="submit" value="save" class="btn btn-success"><br>
    </form>
</div>
</div>
@endsection
