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
<form action="{{ route('teacher.update',$teacher->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <h2>CREATE NEW STAFF</h2>

        <table class="table table-bordered">
            <form data-toggle="validator" role="form">

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name"
                       value="{{$teacher->name}}">
                @error('name')
                <div style="color: red">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email_id">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"
                       value="{{$teacher->email}}">
                @error('email')
                <div style="color: red">{{ $message }}</div>
                @enderror

            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="number" class="form-control" id="phone" placeholder="Enter phonenumber" name="phone"
                       value="{{$teacher->phone}}">
                @error('phone')
                <div style="color: red">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control"  id="address" placeholder="Enter address" name="address" value="{{$teacher->address}}">
                @error('address')
                <div style="color: red">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="age">Date of Birth:</label>
                <input type="date" class="form-control" id="date" class="form-control" placeholder="Enter date of birth" name="dateofbirth"value="{{$teacher->dateofbirth}}">
                @error('dateofbirth')
                <div style="color: red">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="faculty">Faculty:</label>
                <input type="text" class="form-control" class="form-control" id="faculty" placeholder="Enter faculty" name="faculty"value="{{$teacher->faculty}}">
                @error('faculty')
                <div style="color: red">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" class="form-control" id="age" class="form-control" placeholder="Enter age" name="age"value="{{$teacher->age}}">
                @error('age')
                <div style="color: red">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <input type="file" name="teacher_photo" id="fileupload"accept="image/png, image/jpeg">
                <img src="{{ asset('uploads/teacher-photo/'.$teacher->teacher_photo) }}" alt="" style="width:150px;">

                <label for="fileupload"> Select a file to upload</label>
                @error('teacher_photo')
                <div style="color: red">{{ $message }}</div>
                @enderror

            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <label class="radio-inline">
                    <input type="radio" name="gender" value="1" {{ $teacher->gender == "1"?'checked':''}}>Male

                </label>
                <label class="radio-inline">
                    <input type="radio" name="gender" value="0" {{ $teacher->gender == "0"?'checked':''}}>Female

                </label>
            </div>

            <button type="submit" class="btn btn-default btn-primary">Submit</button>

            <button type="submit" class="btn btn-warning "><a href="{{route('teacher.index')}}">Back</a></button>
                </form>
        </table>

    </div>
</form>
</html>



