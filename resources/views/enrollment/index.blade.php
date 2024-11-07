@extends('layout')
@section('content')
<div class="container ">
    <div class="row ">
     <div class="col-lg-12 md-6 sm-3" >
         <div class="card" >
         <div class="card-header">
            <h2>enrollments application</h2>
        </div>
        <div class="caed-body">
            <a href="{{ route("enrollment.create") }}" class="btn btn-success btn sm " title="Add new">
            <i class="fa fa-plus" aria-hidden="true"></i>Add new
        </a>
        <br>
        <br>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>enroll_on</th>
                        <th>join_date</th>
                        <th>fee</th>
                        <th>student_id</th>
                        <th>batch_id</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>

    @forelse ($show as $key=>$val)

    <tr>
        <td>{{ ++$key }}</td>
        <td>{{ $val->enroll_on }}</td>
        <td>{{ $val->join_data }}</td>
        <td>{{ $val->fee }}</td>
        <td>{{ $val->student->name }}</td>
        <td>{{ $val->batch->name }}</td>



        <td>
            <a href="{{ route("enrollment.show",$key) }}"  class="btn btn-success" >view</a>
           <a href="{{ route("enrollment.edit",$key) }}" class="btn btn-primary">edit</a>
            <form action="{{ route("enrollment.destroy",$key) }}" method="post" style="display: inline">
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
