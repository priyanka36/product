<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <button type="submit" class="btn btn-info"><a href="{{route('product.index')}}"> Product</a></button>
    <button type="submit" class="btn btn-info"><a href="{{route('student.index')}}"> Student</a></button>
    <button type="submit" class="btn btn-info"><a href="{{route('user.login')}}"> User</a></button>
    <button type="submit" class="btn btn-info"><a href="{{route('teacher.index')}}">Teacher</a></button>
    <button type="submit" class="btn btn-info"><a href="{{route('staff.index')}}"> Staff</a></button>

    <table class="table table-responsive">
        <h2>PRODUCT ENROLLED </h2>
        <a href="{{ route('product.create') }}" class="btn btn-sm btn-success">Create New Product</a>
        @if($message = Session::get('success'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">X</button>
                <strong>Message!</strong> {{ $message }}

            </div>
        @endif
        <tr>
            <th>SN</th>

            <th>Name</th>
            <th>Description</th>
            <th>Color</th>
            <th>Price</th>
            <th>Size</th>
            <th>Type</th>
            <th>Image</th>
            <th>User</th>
            <th>Action</th>


        </tr>
        @foreach($products as $product)
            <tr>

                <td>{{$index++ }}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->color}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->size}}</td>
                <td>{{$product->type}}</td>


                <td><img src="{{ asset('uploads/product-photo/'.$product->product_photo) }}" alt="" style="width:150px;"></td>
                <td> {{ isset($product->user->firstname)?$product->user->firstname:'' }}</td>


                <td>


                    <a class="btn btn-success" href="{{route('product.edit',$product->id)}}">Edit</a>
                  |
                    <a class="btn btn-danger" href="{{route('product.delete',$product->id)}}">Delete</a>

                </td>
            </tr>
        @endforeach
    </table>
    {{$products->links()}}
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

{{--<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>

<script>
    $('#abc').DataTable({});
</script>--}}

</body>
</html>