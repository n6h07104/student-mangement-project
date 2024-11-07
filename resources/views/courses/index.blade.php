@extends('layout')
@section('content')
<div class="container ">
    <div class="row ">
     <div class="col-lg-12 md-6 sm-3" >
         <div class="card" >
         <div class="card-header">
            <h2>courses application</h2>
        </div>
        <div class="caed-body">
            <a href="{{ route("course.create") }}" class="btn btn-success btn sm " title="Add new">
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
                        <th>syllabus</th>
                        <th>duration</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>

@forelse ($show as $key=>$val )
    
<tr>
    <td>{{ ++$key }}</td>
    <td>{{ $val->name }}</td>
    <td>{{ $val->syllabus }}</td>
    <td>{{ $val->duration() }}</td>
    

    <td>
        <a href="{{ route("course.show",$key) }}"  class="btn btn-success" >view</a>
       <a href="{{ route("course.edit",$key) }}" class="btn btn-primary">edit</a>
        <form action="{{ route("course.destroy",$key) }}" method="post" style="display: inline">
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