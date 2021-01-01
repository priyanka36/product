<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    {{--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>--}}

</head>
<body>
<div class="container">
<button type="submit" class="btn btn-info"><a href="{{route('product.index')}}"> Product</a></button>
<button type="submit" class="btn btn-info"><a href="{{route('student.index')}}"> Student</a></button>
<button type="submit" class="btn btn-info"><a href="{{route('user.login')}}"> User</a></button>
<button type="submit" class="btn btn-info"><a href="{{route('teacher.index')}}"> Teacher</a></button>
    <button type="submit" class="btn btn-info"><a href="{{route('staff.index')}}"> Staff</a></button>

    <div class="table-responsive">
        <h2>STUDENT DETAILS</h2>
        <a href="{{ route('student.create') }}" class="btn btn-sm btn-success">Create New Student</a>

    @if($message = Session::get('success'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">X</button>
                <strong> Message!</strong> {{ $message }}
            </div>
        @endif
        <table class="table table-bordered table-striped " id="abc">
            <thead>
            <tr><th>SN</th>
                <th>Name</th>
                <th>Address</th>
                <th>Roll No</th>
                <th>Faculty</th>
                <th>School</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Father's Name</th>
                <th>Mother's Name</th>
                <th>Hobbies</th>

                <th>Image</th>
                <th>Action</th>




            </tr>
            @foreach($students as $student)
                <tr><td>{{$index++ }}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->address}}</td>
                    <td>{{$student->rollno}}</td>
                    <td>{{$student->faculty}}</td>
                    <td>{{$student->school}}</td>
                    <td>{{$student->age}}</td>
                    <td>{{$student->gender}}</td>
                    <td>{{$student->fathername}}</td>
                    <td>{{$student->mothername}}</td>
                    <td>{!! $student->hobbies !!}</td>

                    <td><img src="{{ asset('uploads/student-profile/'.$student->profile_photo) }}" alt="" style="width:100px;"></td>

                 <td>

                  <a class="btn btn-success" href="{{route('student.edit',$student->id)}}">Edit</a>|
                   <a class="btn btn-danger" href="{{route('student.delete',$student->id)}}">Delete</a>
                    </td>
                </tr>
            @endforeach
            </thead>
        </table>
        {{ $students->links() }}
    </div>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

{{--<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>

<script>
    $('#abc').DataTable({});
</script>--}}
</body>
</html>