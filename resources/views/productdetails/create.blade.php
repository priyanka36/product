<html>
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js">
    </script>
</head>
<form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <h2>CREATE NEW RECORD</h2>
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
                <label for="user_id">All Users:</label>
                <select name="user_id" class="form-control">
                    <option value="">Please Choose</option>
                @foreach($allUsers as $user)
                        <option value="{{$user->id}}">{{ $user->firstname }} {{ $user->lastname }}</option>
                    @endforeach
                </select>
                @error('name')
                <div style="color: red">{{ $message }}</div>
                @enderror

            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter description" name="description"
                       value="{!! old('description') !!}">
                @error('description')
                <div style="color: red">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="color">Color:</label>
                <label class="radio-inline">
                    <input type="radio" name="color" value="white" {{old('color')=='white'?'checked':'' }}>WHITE
                    @error('color')
                    <div style="color: red">{{ $message }}</div>
                    @enderror
                </label>
                <label class="radio-inline">
                    <input type="radio" name="color" value="black" {{old('color')=='black'?'checked':'' }}>BLACK
                    @error('color')
                    <div style="color: red">{{ $message }}</div>
                    @enderror
                </label>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" class="form-control" name="price" min="1000" max="5000" value="{{old('price')}}"><br>
                @error('price')
                <div style="color: red">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="Size">Size:</label>
                <input type="number" class="form-control" name="size" min="1000" max="5000" value="{{old('size')}}"><br>
                @error('size')
                <div style="color: red">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group" class="form-control">
                <label for="select">Select:</label>
                <select id="type" name="type" class="form-control">
                    <option value="small">Small</option>
                    <option value="large">Large</option>
                    <option value="extralarge">ExtraLarge</option>
                </select>
            </div>
            <div class="form-group">
                <input type="file" name="product_photo" id="fileupload" accept="image/png, image/jpeg">
                <label for="fileupload"> Select a file to upload</label>
                @error('product_photo')
                <div style="color: red">{{ $message }}</div>
                @enderror


            </div>
            <button type="submit" class="btn btn-default btn-primary">Submit</button>

            <button type="submit" class="btn btn-default "><a href="{{route('product.index')}}">Back</a></button>
        </table>
</form>
    </div>
</form>
</html>



