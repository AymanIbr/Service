


@extends('admin.layouts.master')
@section('content')

<div class="container-fuluid">
    <div class="row">
        <div class="col-12">
            <h2 class="mb-4">Add New Portfolio</h2>
@include('admin.layouts.error')
            <form action="{{route('portfolios.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Name" >
                </div>
                <div class="mb-3">
                    <label>Image</label>
                    <input type="file" name="image"class="form-control" >
                </div>
                <div class="mb-3">
                  <select name="category_id" class="form-control">
                      <option value=""selected disabled>Select Category</option>
                      @foreach ( $categories as $category )
                        <option value="{{$category->id}}">{{$category->name}}</option>
                      @endforeach
                  </select>
                </div>
                <button class="btn btn-info px-5">Add</button>
            </form>
        </div>
    </div>
</div>



@stop
