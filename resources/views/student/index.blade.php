@extends('layout')
@section('content')
<div class="container ">
    <div class="row ">
     <div class="col-lg-12 md-6 sm-3" >
         <div class="card" >
         <div class="card-header">
            <h2>student application</h2>
        </div>
        <div class="caed-body">
            <a href="{{ route("student.create") }}" class="btn btn-success btn sm " title="Add new">
            <i class="fa fa-plus" aria-hidden="true"></i>Add new
        </a>
        <br>
        <br>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>address</th>
                        <th>mobil</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
>
@forelse ($show as $key=>$val )
    
<tr>
    <td>{{ ++$key }}</td>
    <td>{{ $val->name }}</td>
    <td>{{ $val->address }}</td>
    <td>{{ $val->mobile }}</td>

    <td>
        <a href="{{ route("student.show",$key) }}"  class="btn btn-success" >view</a>
        <a href="{{ route('student.edit',$key) }}" class="btn btn-primary">edit</a>
        <form action="{{ route('student.destroy',$key) }}" method="post" style="display: inline">
            @csrf
            @method("delete")
          <button type="submit" class="btn btn-danger btn-ms" title="Delete student">Delete</button>
        </form>
    </td>
</tr>
@empty
    
@endforelse



                </tbody>

            </table>
        </div>
        </div>
    </div>
</div>

@endsection