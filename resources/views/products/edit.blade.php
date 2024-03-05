<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1 class="text-center" >Edit a Product</h1>
    <br>
    @if ($errors->any())
    
        <ul>
            @foreach ($errors->all() as $error)
               <li>{{ $error }}</li> 
            @endforeach
        </ul>
     
    @endif
    <br>
    <form action="{{ route('product.update',['product' =>$product ]) }}" method="POST" class="container mt-5">
       @csrf
       @method('put')
        <div class="form-group row">
            <label  class="col-sm-2 col-form-label">Name :</label>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-control"   value="{{$product->name}}">
            </div>
        </div>
        <br>

        <div class="form-group row">
            <label  class="col-sm-2 col-form-label">Qty:</label>
            <div class="col-sm-10">
                <input type="text" name="qty" class="form-control" value="{{$product->qty}}" >
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Price :</label>
            <div class="col-sm-10">
                <input type="text" name="price" class="form-control"  value="{{$product->price}}" >
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label  class="col-sm-2 col-form-label">Description :</label>
            <div class="col-sm-10">
                <input type="text" name="description" class="form-control"  value="{{$product->description}}" >
            </div>
        </div>
        <br>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <input type="submit" name="submit" value="Update" class="btn btn-primary">
            </div>
        </div>
    </form>
</body>
</html>