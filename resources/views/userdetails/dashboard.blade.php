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
    <button type="submit" class="btn btn-info"><a href="{{route('user.logout')}}"> Logout</a></button>

    <div class="table-responsive">
        @if($message = Session::get('success'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">X</button>
                <strong>Message!</strong> {{ $message }}
            </div>
        @endif

        <h2>USER DASHBOARD</h2>


    </div>
</div>
</body>
</html>



