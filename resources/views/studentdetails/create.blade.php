<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet"
          href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js">
    </script>


</head>
<body>


<form action="{{ route('student.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <h2>CREATE NEW RECORD</h2>

        <form data-toggle="validator" role="form">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control"id="name" placeholder="Enter name" name="name"value="{!! old('name') !!}">
                @error('name')
                <div style="color: red">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control"  id="address" placeholder="Enter address" name="address" value="{!! old('address') !!}">
                @error('address')
                <div style="color: red">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="rollno">Roll:</label>
                <input type="number" class="form-control" class="@error('rollno') is-invalid @enderror" id="rollno" placeholder="Enter description" name="rollno" value="{!! old('rollno') !!}">
                @error('rollno')
                <div style="color: red">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="faculty">Faculty:</label>
                <input type="text" class="form-control" class="@error('faculty') is-invalid @enderror" id="faculty" placeholder="Enter faculty" name="faculty"value="{!! old('faculty') !!}">
                @error('faculty')
                <div style="color: red">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="school">School:</label>
                <input type="text" class="form-control" id="school" class="@error('school')@enderror"placeholder="Enter school" name="school" value="{!! old('school') !!}">
                @error('school')
                <div style="color: red">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" class="form-control" id="age" class="@error('age')@enderror" placeholder="Enter age" name="age" value="{!! old('age') !!}">
                @error('age')
                <div style="color: red">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <label class="radio-inline">
                    <input type="radio" name="gender" value="male" {{old('gender')=='male'?'checked':'' }} checked>MALE
                </label>
                <label class="radio-inline">
                    <input type="radio" name="gender" value="female" {{old('gender')=='female'?'checked':'' }}>FEMALE
                </label>
            </div>
            <div class="form-group">
                <label for="fathername">Father's Name:</label>
                <input type="text" class="form-control" id="fathername" class="@error('fathername')@enderror" placeholder="Father's name" name="fathername" value="{!! old('fathername') !!}">
           @error('fathername')
                <div style="color: red">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="mothername">Mother's Name:</label>
                <input type="text" class="form-control" id="mothername" class="@error('mothername')@enderror" placeholder="Mother's name" name="mothername" value="{!! old('mothername') !!}" ><br>
            @error('mothername')
                <div style="color: red">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="hobbies"> Hobbies:</label>
                 <textarea name="hobbies" class="form-control " class="@error('hobbies')@enderror"  required rows="3" cols="90"   name="hobbies">{!! old('hobbies') !!}
                 </textarea>
                @error('hobbies')
                <div style="color: red">{{ $message }}</div>
                @enderror
            </div>
                <div class="form-group">
                    <label for="profile_photo"> Select a photo:</label>
                    <input type="file" name="profile_photo" id="fileupload"accept="image/png, image/jpeg">
                    <label for="fileupload"> Select a file to upload</label>

                </div>



        <button type="submit" class="btn btn-warning "><a href="{{route('student.index')}}">Back</a></button>


        </form>
    </div>
    </div>
</form>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'hobbies' );
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script src="//code.jquery.com/jquery-1.12.3.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

</body>
</html>



