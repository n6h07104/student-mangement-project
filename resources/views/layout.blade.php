<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>student mangement system</title>
    <style>
         .list-group {

     margin:auto;
     float:left;
     padding-top:20px;
    }
    .lead {

     margin:auto;
     left:0;
     right:0;
     padding-top:10%;
    }

    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col lg-2">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><h2>student mangement project </h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          </nav>
        </div>
    </div>
<div class="row">
    <div class="col md 12">
        <div class="list-group w-25 p-2">

            <a href="#" class="list-group-item active"><i class="fa fa-key"></i> <span>Home</span></a>
            <a href="{{ route('student.index') }}" class="list-group-item"><i class="fa fa-credit-card"></i> <span>students</span></a>
            <a href="{{ route('teacher.index') }}" class="list-group-item"><i class="fa fa-question-circle"></i> <span>teacher</span></a>
            <a href="{{ route('course.index') }}" class="list-group-item"><i class="fa fa-arrow-circle-o-left"></i> <span>Cources </span></a>
            <a href="{{ route("batch.index")}}" class="list-group-item"><i class="fa fa-arrow-circle-o-left"></i> <span>Batches </span></a>
            <a href="{{ route("enrollment.index") }}" class="list-group-item"><i class="fa fa-book"></i> <span> Enrollment</span></a>
            <a href="{{ route("payment.index") }}" class="list-group-item"><i class="fa fa-compass"></i> <span>payment</span></a>
     </div>
    <div class="col md 9">
    </div>
<div class="content">
   @yield("content")
</div>
    </div>
</div>
    </div>
</body>
</html>
