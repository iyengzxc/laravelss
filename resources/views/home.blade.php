@extends('layout.app')

@section('content')
<div class="card my-4 ">
    <form action="{{ route('saveProducts')}}" method="post">
        @csrf
        <div class="card-body">
            <div class="row">
                <div class="col mb-3">
                    <label for="p_name" class="form-label">Product Name</label>
                    <input type="text" class="form-control" name="product_name" >
                </div>
                <div class="col-md-3 mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" name="description" >
                </div>
                <div class="col mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" name="price" >
                </div>
                <div class="col mb-3">
                    <label for="quantityinstock" class="form-label">Quantity Stock</label>
                    <input type="text" class="form-control" name="quantityinstock" >
                </div>
                <div class="col mb-3 d-flex justify-content-center align-items-center">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>

<table class="table table-hover text-center ">
    <thead class="table-danger">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Product Name</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity Stock</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @if ($products)
            @foreach ($products as $product)
                <tr>
                    <th scope="row">{{$product->id}}</th>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->quantityinstock}}</td>
                    <td>
                        <a href="{{route('updateProducts', $product->id)}}"><button type="button" class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i>Edit</button></a>
                        <a href="{{route('removeProducts', $product->id)}}"><button type="button" class="btn btn-danger"> <i class="glyphicon glyphicon-minus"></i>Delete</button></a>
                        
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>
@endsection