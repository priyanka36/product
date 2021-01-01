<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	{{--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>--}}

</head>
<body>
<div class="container">

	<div class="table-responsive">
		<h2>USER DETAILS</h2>
		<a href="{{ route('user.create') }}" class="btn btn-sm btn-success">Create New Record</a>

	@if($message = Session::get('success'))
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert">X</button>
				<strong>Message!</strong> {{ $message }}
			</div>
		@endif
		<table class="table table-bordered table-striped " id="abc">
			<thead>
			<tr><td>SN</td>
				<th>FirstName</th>
				<th>MiddleName</th>
				<th>LastName</th>
				<th>Mobilenumber</th>
				<th>Email</th>
				<th>DateofBirth</th>
				<th>Gender</th>

			</tr>
			@foreach($users as $user)
				<tr><td>{{$index++ }}</td>
					<td>{{$user->firstname}}</td>
					<td>{{$user->middlename}}</td>
					<td>{{$user->lastname}}</td>
					<td>{{$user->mobilenumber}}</td>
					<td>{{$user->email}}</td>
					<td>{{$user->dateofbirth}}</td>
					<td>{{$user->gender}}</td>

				</tr>
			@endforeach
			</thead>
		</table>
		{{ $users->links() }}
	</div>
</div>
</body>
</html>



