<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<form action="{{ route('staff.update',$staff->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <h2>CREATE NEW STAFF</h2>

        <table class="table table-bordered">

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name"
                       value="{{$staff->name}}">

            </div>
            <div class="form-group">
                <label for="email_id">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"
                       value="{{$staff->email}}">


            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="number" class="form-control" id="phone" placeholder="Enter phonenumber" name="phone"
                       value="{{$staff->phone}}">

            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control"  id="address" placeholder="Enter address" name="address" value="{{$staff->address}}">

            </div>

            <div class="form-group">
                <label for="salary">Salary:</label>
                <input type="number" class="form-control" id="salary" class="form-control" placeholder="Enter salary" name="salary"value="{{$staff->salary}}">

            </div>


            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" class="form-control" id="age" class="form-control" placeholder="Enter age" name="age"value="{{$staff->age}}">

            </div>

            <div class="form-group">
                <label for="designation">Designation:</label>
                <input type="text" class="form-control" id="designation" class="form-control" placeholder="Enter designation" name="designation" value="{{$staff->designation}}">

            </div>

            <div class="form-group">
                <input type="file" name="staff_photo" accept="image/png, image/jpeg">
                <img src="{{ asset('uploads/staff-photo/'.$staff->staff_photo) }}" alt="" style="width:150px;">
                @error('staff_photo')
                <div style="color: red">{{ $message }}</div>
                @enderror

                <label for="fileupload"> Select a file to upload</label>


            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <label class="radio-inline">
                    <input type="radio" name="gender" value="1" {{ $staff->gender == "1"?'checked':''}}>Male

                </label>
                <label class="radio-inline">
                    <input type="radio" name="gender" value="0" {{ $staff->gender == "0"?'checked':''}} >Female

                </label>
            </div>


            <button type="submit" class="btn btn-default btn-primary">Submit</button>

            <button type="submit" class="btn btn-warning "><a href="{{route('staff.index')}}">Back</a></button>
        </table>

    </div>
</form>
</html>



