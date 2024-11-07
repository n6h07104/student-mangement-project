@extends('layout')
@section('content')
<div class="container ">
    <div class="row ">
     <div class="col-lg-12 md-6 sm-3" >
         <div class="card" >
         <div class="card-header">
            <h2>payments application</h2>
        </div>
        <div class="caed-body">
            <a href="{{ route("payment.create") }}" class="btn btn-success btn sm " title="Add new">
            <i class="fa fa-plus" aria-hidden="true"></i>Add new
        </a>
        <br>
        <br>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>enrollment_id</th>
                        <th>paid_date</th>
                        <th>Amount</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>

@forelse ($show as $key=>$val )
    
<tr>
    <td>{{ ++$key }}</td>
    <td>{{ $val->enrollment_id }}</td>
    <td>{{ $val->paid_date }}</td>
    <td>{{ $val->amount }}</td>
    

    <td>
        <a href="{{ route("payment.show",$key) }}"  class="btn btn-success" >view</a>
       <a href="{{ route("payment.edit",$key) }}" class="btn btn-primary">edit</a>
        <form action="{{ route("payment.destroy",$key) }}" method="post" style="display: inline">
            @csrf
            @method("delete")
          <button type="submit" class="btn btn-danger btn-ms" title="Delete student">Delete</button>
        </form> 
        <a href="{{ route("report",$key) }}" title="edit payment"><button class="btn btn-success"><i class="fa fa-print" aria-hidden="true"></i>print</button></a>
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