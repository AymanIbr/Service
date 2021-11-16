


@extends('admin.layouts.master')
@section('content')

<div class="container-fuluid">
    <div class="row">
        <div class="col-12">
            <h2 class="mb-4">Update Portfolio</h2>
@include('admin.layouts.error')
<form action="{{route('portfolios.update', $portfolio->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="mb-3">
        <input type="text" name="name" value="{{$portfolio->name}}" class="form-control" placeholder="Name" >
    </div>
    <div class="mb-3">
        <label>Image</label>
        <input type="file" name="image" class="form-control" >
        <img class="mt-1" width="80" src="{{asset('uplods/'.$portfolio->image)}}" alt="">
    </div>
    <div class="mb-3">
      <select name="category_id" class="form-control mb-4">
          <option value=""selected disabled>Select Category</option>
          @foreach ( $categories as $category )
            <option {{$category->id == $portfolio->category->id ? 'selected' : '' }} value="{{$category->id}}">{{$category->name}}</option>
          @endforeach
      </select>
    </div>
    <button class="btn btn-info px-5">Update</button>
</form>
        </div>
    </div>
</div>



@stop
