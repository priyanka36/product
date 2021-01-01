<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<form action="{{ route('product.update',$product->id) }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="container">
        <h2>EDIT TABLE </h2>
    <form action="/action_page.php">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{$product->name}}">
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" class="form-control" id="description" placeholder="Enter description" name="description" value="{{$product->description}}">
        </div>
        <div class="form-group">
            <label for="color">Color:</label>
            <input type="radio" name="color" value="white"{{ $product->color == "white"?'checked':'' }}>White
            <input type="radio" name="color" value="black" {{ $product->color == "black"?'checked':'' }}>Black<br>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" name="price" min="1000" max="5000"  class="form-control"   value="{{$product->price}}"><br>
        </div>
        <div class="form-group">
            <label for="Size">Size:</label>
            <input type="number" name="size" min="1000" max="5000"value="{{$product->size}}" class="form-control"><br>
        </div>
        <div class="form-group">
            <label for="select">Select:</label>
            <select id = "type" name='type' class="form-control">
                <option value = "small"{{ $product->size == "small"?'selected':''}}>Small</option>
                <option value = "large"{{ $product->size == "large"?'selected':''}}>Large</option>
                <option value = "extralarge"{{$product->size == "extralarge"?'selected':''}}>ExtraLarge</option>
            </select>
        </div>
        <div class="form-group">
            <input type="file" name="product_photo"  class="form-control"  id="fileupload">
            <img src="{{ asset('uploads/product-photo/'.$product->product_photo) }}" alt="" style="width:150px;">

            <label for="fileupload"> Select a file to upload</label>

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="submit" class="btn btn-warning"><a href="{{route('product.index')}}">Back</a></button>
    </form>
    </div>
    </form>
    </body>
    </form>
    </html>