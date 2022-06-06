@extends('layouts.back.backapp')
@section('pagename') Create Products @endsection
@section('content')
<div class="row">
<div class="col-12">
    <div class="col-md-12">
        <div class="card card-primary">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <h3 class="card-title">Add Products</h3>
                <a href="{{route('product.store')}}" class="btn btn-success">{{__('Products')}}</a>
            </div>
        </div>
        <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="card-body">
        <div class="form-group">
        <label for="title">Product Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder=" Product Title">
        </div>
        <div class="form-group">
        <label for="image">Product Image</label>
        <div class="input-group">
        <div class="custom-file">
        <input type="file" class="custom-file-input" id="image" name="image" placeholder="Product Image">
        <label class="custom-file-label" for="image">Choose file</label>
        </div>

        {{-- <div class="input-group-append">
        <span class="input-group-text">Upload</span>
        </div> --}}
        </div>
        </div>
        <div class="form-group">
            <label for="price">Product Price</label>
            <input type="number" class="form-control" id="price" name="price" placeholder=" Product Price">
            </div>
        <div class="form-group">
            <label for="description">Product Description</label>
            <textarea class="form-control" id="description" type="text" name="description" rows="5"></textarea>
          </div>
        </div>

        <div class="card-footer">
        <button type="submit" class="btn btn-primary">Save</button>
        </div>
        </form>
        </div>
        </div>
</div>
</div>
@endsection
