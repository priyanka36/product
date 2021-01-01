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
<form action="{{ route('user.store') }}" method="post">
    @csrf
    <div class="container">
        <h2>CREATE NEW ACCOUNT</h2>

        <table class="table table-bordered">
            <form data-toggle="validator" role="form">
            <div class="form-group">
                <label for="fname">First Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter first name" name="firstname"
                       value="{!! old('firstname') !!}">
                @error('firstname')
                <div style="color: red">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="mname">Middle Name:</label>
                <input type="text" class="form-control" id="mname" placeholder="Enter middle name" name="middlename"
                       value="{!! old('middlename') !!}">
                @error('middlename')
                <div style="color: red">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="lname">Last Name:</label>
                <input type="text" class="form-control" id="lname" placeholder="Enter last name" name="lastname"
                       value="{!! old('lastname') !!}">
                @error('lastname')
                <div style="color: red">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="mobileno">Mobile Number:</label>
                <input type="tel" class="form-control" id="mobileno" placeholder="Enter mobilenumber"
                       name="mobilenumber"
                       value="{!! old('mobilenumber') !!}">
                @error('mobilenumber')
                <div style="color: red">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email_id">Email:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter email" name="email"
                       value="{!! old('email') !!}">
                @error('email')
                <div style="color: red">{{ $message }}</div>
                @enderror

            </div>
            <div class="form-group">
                <label for="Password">Password:</label>
                <input type="password" class="form-control" name="password" value=""><br>
                @error('password')
                <div style="color: red">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="age">Date of Birth:</label>
                <input type="date" class="form-control" id="date" placeholder="Enter date of birth" name="dateofbirth"
                       value="{!! old('dateofbirth') !!}">
                @error('dateofbirth')
                <div style="color: red">{{ $message }}</div>
                @enderror
            </div>


            <div class="form-group">
                <label for="gender">Gender:</label>
                <label class="radio-inline">
                    <input type="radio" name="gender" value="male" {{old('gender')=='male'?'checked':'' }} checked>Male

                </label>
                <label class="radio-inline">
                    <input type="radio" name="gender" value="female"{{old('gender')=='female'?'checked':'' }}>Female

                </label>
            </div>


            <button type="submit" class="btn  btn-warning btn-lg">Sign Up</button>
            <button type="submit" class="btn  btn-info btn-lg"><a href="{{route('user.login')}}">Back</button>

            </form>
        </table>

    </div>
</form>
</html>



