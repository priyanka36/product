<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js">
    </script>
</head>
<form action="{{ route('user.store') }}" method="post" >
    @csrf
    <div class="container">
        <h2>CREATE NEW ACCOUNT</h2>
        <form data-toggle="validator" role="form">
        <table class="table table-bordered">

            <div class="form-group">
                <label for="fname">First Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter first name" name="fname"
                       value="{{$user->firstname}}">

            </div>
            <div class="form-group">
                <label for="mname">Middle Name:</label>
                <input type="text" class="form-control" id="mname" placeholder="Enter middle name" name="mname"
                       value="{{$user->middlename}}">

            </div>
            <div class="form-group">
                <label for="lname">Last Name:</label>
                <input type="text" class="form-control" id="lname" placeholder="Enter last name" name="lname"
                       value="{{$user->lastname}}">

            </div>
            <div class="form-group">
                <label for="mobileno">Mobile Number:</label>
                <input type="tel" class="form-control" id="mobileno" placeholder="Enter mobilenumber" name="mobilenumber"
                       value="{{$user->mobilenumber}}">

            </div>
            <div class="form-group">
                <label for="email_id">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"
                       value="{{$user->email}}">


            </div>
            <div class="form-group">
                <label for="Password">Password:</label>
                <input type="password" class="form-control" name="password"  value="{{$user->email}}"><br>

            </div>

            <div class="form-group">
                <label for="age">Date of Birth:</label>
                <input type="date" class="form-control" id="date"  placeholder="Enter date of birth" name="dateofbirth"value="{{$user->password}}">
                @error('dateofbirth')
                <div style="color: red">{{ $message }}</div>
                @enderror
            </div>


            <div class="form-group">
                <label for="gender">Gender:</label>
                <label class="radio-inline">
                    <input type="radio" name="gender" value="1" checked>Male

                </label>
                <label class="radio-inline">
                    <input type="radio" name="gender" value="0"  >Female

                </label>
            </div>



            <button type="submit" class="btn btn-default btn-primary btn-lg"><a href="{{route('user.index')}}">Submit</a> </button>


        </table>
    </form>
    </div>
</form>
</html>



