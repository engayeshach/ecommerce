@extends('layouts.back.backapp')
@section('pagename') Create Category @endsection
@section('content')
<div class="row">
<div class="col-12">
    <div class="col-md-12">
        <div class="card card-primary">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <h3 class="card-title">Add Category</h3>
                <a href="{{route('category.index')}}" class="btn btn-success">{{__('Categories')}}</a>
            </div>
        </div>
        <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="card-body">
        <div class="form-group">
        <label for="title">Category Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder=" Category Title">
        </div>
        <div class="form-group">
        <label for="image">Category Image</label>
        <div class="input-group">
        <div class="custom-file">
        <input type="file" class="custom-file-input" id="image" name="image" placeholder="Category Image">
        <label class="custom-file-label" for="image">Choose file</label>
        </div>
        {{-- <div class="input-group-append">
        <span class="input-group-text">Upload</span>
        </div> --}}
        </div>
        </div>
        </div>

        <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
        </div>
        </div>
</div>
</div>
@endsection
