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
<form action="{{ route('staff.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <h2>CREATE NEW STAFF</h2>
        <form data-toggle="validator" role="form">
        <table class="table table-bordered">

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name"
                       value="{!! old('name') !!}">
                @error('name')
                <div style="color: red">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email_id">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"
                       value="{!! old('email') !!}">
                @error('email')
                <div style="color: red">{{ $message }}</div>
                @enderror

            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" class="form-control" id="phone" placeholder="Enter phonenumber" name="phone"
                       value="{!! old('phone') !!}">
                @error('phone')
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
                <label for="salary">Salary:</label>
                <input type="number" class="form-control"  id="salary" placeholder="Enter salary" name="salary" value="{!! old('salary') !!}">
                @error('salary')
                <div style="color: red">{{ $message }}</div>
                @enderror
            </div>


            <div class="form-group">
                <label for="designation">Designation:</label>
                <input type="text" class="form-control"  id="designation" placeholder="Enter designation" name="designation" value="{!! old('designation') !!}">
                @error('designation')
                <div style="color: red">{{ $message }}</div>
                @enderror
            </div>



            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" class="form-control" id="age" class="@error('age')@enderror" placeholder="Enter age" name="age"value="{!! old('age') !!}">
                @error('age')
                <div style="color: red">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <input type="file" name="staff_photo" id="fileupload"accept="image/png, image/jpeg">
                <label for="fileupload"> Select a file to upload</label>
                @error('staff_photo')
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

            <button type="submit" class="btn  btn-primary">Submit</button>

            <button type="submit" class="btn btn-warning "><a href="{{route('staff.index')}}"> Back</a></button>
        </table>
</form>
    </div>
</form>
</html>



