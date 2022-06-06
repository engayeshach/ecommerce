@extends('layouts.back.backapp')
@section('pagename') Products @endsection
@section('content')
<div class="row">
<div class="col-12">
    <div class="col-md-12">
        <div class="card card-primary">
        <div class="card-header">
            <div class="d-flex justify-content-between">
        <h3 class="card-title">All Products</h3>
        <a href="{{route('product.create')}}" class="btn btn-success">{{__('Add Products')}}</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Image</th>
                    <th scope="col">Description</th>
                    <th scope="col">price</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{$product->id}}</th>
                        <td>{{$product->title}}</td>
                        <td><img src="{{asset('/images')."/".$product->image}}" width="50"></td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->price}}</td>
                        <td>
                            <a href="{{route('product.edit',$product)}}" class="btn btn-primary">Edit</a>
                            <a href="{{route('product.destroy' ,$product)}}" class="btn btn-danger">Delete</a>
                        </td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
        </div>
        </div>
</div>
</div>
@endsection
