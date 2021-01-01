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
        <h2>TEACHER DETAILS</h2>
        <a href="{{ route('teacher.create') }}" class="btn btn-sm btn-success">Create New Record</a>

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
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Date of Birth</th>
                <th>Faculty</th>
                <th>Photo</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Action</th>




            </tr>
            @foreach($teachers as $teacher)
                <tr><td>{{$index++ }}</td>
                    <td>{{$teacher->name}}</td>
                    <td>{{$teacher->email}}</td>
                    <td>{{$teacher->phone}}</td>
                    <td>{{$teacher->address}}</td>
                    <td>{{$teacher->dateofbirth}}</td>
                    <td>{{$teacher->faculty}}</td>
                    <td><img src="{{ asset('uploads/teacher-photo/'.$teacher->teacher_photo) }}" alt="" style="width:100px;"></td>
                    <td> @if($teacher->gender==0)
                            Female
                        @else
                            Male
                        @endif
                    </td>
                    <td>{{$teacher->age}}</td>




                    <td>

                        <a class="btn btn-success" href="{{route('teacher.edit',$teacher->id)}}">Edit</a>|
                        <a class="btn btn-danger" href="{{route('teacher.delete',$teacher->id)}}">Delete</a>
                    </td>
                </tr>
            @endforeach
            </thead>
        </table>
        {{ $teachers->links() }}
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