<html>
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="//cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js">
    </script>
</head>
<body>
<form action="{{ route('student.update',$student->id) }}" method="post">
    @csrf
    <div class="container">
        <h2>EDIT RECORD</h2>
        <form data-toggle="validator" role="form">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{$student->name}}">
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address" placeholder="Enter address" name="address" value="{{$student->address}}">
            </div>
            <div class="form-group">
                <label for="Rollno">Roll:</label>
                <input type="number" class="form-control" id="rollno" placeholder="Enter description" name="rollno" value="{{$student->rollno}}">
            </div>
            <div class="form-group">
                <label for="faculty">Faculty:</label>
                <input type="text" class="form-control" id="faculty" placeholder="Enter faculty" name="faculty" value="{{$student->faculty}}">
            </div>
            <div class="form-group">
                <label for="school">School:</label>
                <input type="text" class="form-control" id="school" placeholder="Enter school" name="school" value="{{$student->school}}">
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" class="form-control" id="age" placeholder="Enter age" name="age" value="{{$student->age}}">
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <label class="radio-inline">
                    <input type="radio" name="gender"  value="male"{{ $student->gender == "male"?'checked':'' }}>MALE
                </label>
                <label class="radio-inline">
                    <input type="radio" name="gender" value="female"{{ $student->gender == "female"?'checked':'' }}>FEMALE
                </label>
            </div>
            <div class="form-group">
                <label for="Father's Name">Father's Name:</label>
                <input type="text" class="form-control" placeholder="Father's name" name="fathername" value="{{$student->fathername}}" ><br>
            </div>
            <div class="form-group">
                <label for="Mother's Name">Mother's Name:</label>
                <input type="text" class="form-control" placeholder="Mother's name" name="mothername"value="{{$student->mothername}}" ><br>
            </div>
            <div class="form-group">
                <label for="Hobbies"> Hobbies:</label>
                 <textarea name="hobbies"  class="form-control" rows="3" cols="90" id="hobbies"  name="hobbies">{{$student->hobbies}}
                     </textarea>
            </div>
            <div class="form-group">
                <input type="file" name="profile_photo" value="{{$student->profile_photo}}" id="fileupload">
                <label for="fileupload"> Select a file to upload</label>
                <input type="submit" value="submit">
            </div>

            <button type="submit" class="btn btn-default btn-primary">Submit</button>
            <a href="{{route('student.index')}}">Back</a>
</form>
    </div>
</form>
<script>
    CKEDITOR.replace( 'hobbies' );
</script>
</body>
</html>



