@extends('layouts.back.backapp')
@section('pagename') Caregories @endsection
@section('content')
<div class="row">
<div class="col-12">
    <div class="col-md-12">
        <div class="card card-primary">
        <div class="card-header">
            <div class="d-flex justify-content-between">
        <h3 class="card-title">All Categories</h3>
        <a href="{{route('category.create')}}" class="btn btn-success">{{__('Add Category')}}</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($category as $data)
                    <tr>
                        <th scope="row">{{$data->id}}</th>
                        <td>{{$data->title}}</td>
                        <td><img src="{{asset('/images')."/".$data->image}}" width="50"></td>
                        <td>
                            <a href="{{route('category.edit',$data)}}" class="btn btn-primary">Edit</a>
                            <a href="{{route('category.destroy',$data)}}" class="btn btn-danger">Delete</a>
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
