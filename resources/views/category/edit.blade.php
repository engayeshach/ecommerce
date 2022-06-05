@extends('layouts.back.backapp')
@section('content')
<div class="row">
<div class="col-12">
    <div class="col-md-12">
        <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Update Category</h3>
        </div>
        <form action="{{route('category.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="category_id" value="{{$category->id}}">
        <div class="card-body">
        <div class="form-group">
        <label for="title">Category Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder=" Category Title" value="{{$category->title}}">
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
        <div class="form-group">
            <img src="{{asset('/images')."/".$category->image}}" alt="" width="50">
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
