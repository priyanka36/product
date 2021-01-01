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
        <h2>STAFF DETAILS</h2>
        <a href="{{ route('staff.create') }}" class="btn btn-sm btn-success">Create New Record</a>

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
                <th>Phone</th>
                <th>Email</th>
                <th>Staff_Photo</th>
                <th>Gender</th>
                <th>Salary</th>
                <th>Designation</th>
                <th>Age</th>
                <th>Action</th>




            </tr>
            @foreach($staffs as $staff)

                <tr><td>{{$index++ }}</td>
                    <td>{{$staff->name}}</td>
                    <td>{{$staff->address}}</td>
                    <td>{{$staff->phone}}</td>
                    <td>{{$staff->email}}</td>

                    <td><img src="{{ asset('uploads/staff-photo/'.$staff->staff_photo) }}" alt="" style="width:100px;"></td>
                   <td> @if($staff->gender==0)
                    Female
                    @else
                        Male
                       @endif
                   </td>
                    <td>{{$staff->salary}}</td>
                    <td>{{$staff->designation}}</td>
                    <td>{{$staff->age}}</td>




                    <td>

                        <a class="btn btn-success" href="{{route('staff.edit',$staff->id)}}">Edit</a>|
                        <a class="btn btn-danger" href="{{route('staff.delete',$staff->id)}}">Delete</a>
                    </td>
                </tr>
            @endforeach
            </thead>
        </table>
        {{ $staffs->links() }}
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