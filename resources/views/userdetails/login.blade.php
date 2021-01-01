<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<form action="{{ route('user.checkUser') }}" method="post">

    @csrf
    <div class="container">


        <h2>LOGIN INTO YOUR ACCOUNT</h2>


        @if($message = Session::get('success'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">X</button>
                <strong>Message!</strong> {{ $message }}
            </div>
        @endif



        <table class="table table-bordered">
            <div class="form-group">
                <label for="email_id">Email:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
                @error('email')
                <div style="color: red">{{ $message }}</div>
                @enderror

            </div>
            <div class="form-group">
                <label for="Password">Password:</label>
                <input type="password" class="form-control" name="password" ><br>
                @error('password')
                <div style="color: red">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
            <button type="submit" class="btn btn-default btn-primary btn-block"> Login </button>
            </div>
            <a href="{{route('user.create')}}">Create a new Account? </a>
            <a href="{{route('user.create')}}">Forgot Password ? </a>



        </table>

    </div>
</form>
</html>
