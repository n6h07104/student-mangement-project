@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">payments page</div>
    <div
    class="card-body">
    <form action="{{ route("payment.store") }}" method="POST">
    @csrf
    {{-- @method("PUT") --}}
    <label>enrollment_id</label>
    {{-- <input type="text" name="enrollment_id" value="enrollment_id" id="enrollment_id" placeholder="enrollment_id"  class="form-control"><br> --}}
    <select name="enrollment_id" id="enrollment_id" class="form-control">
        @foreach ( $en as $id=>$enroll_on)

        <option value="{{ $id }}">{{ $enroll_on }}</option>
        @endforeach
    </select>

    <label>paid_date</label>
    <input type="text" name="paid_date" id="paid_date" placeholder="paid_date" class="form-control"><br>

    <label>amount</label>
    <input type="text" name="amount" id="amount" placeholder="amount" class="form-control"><br>


    <input type="submit" value="save" class="btn btn-success"><br>
    </form>
</div>
</div>
@endsection
