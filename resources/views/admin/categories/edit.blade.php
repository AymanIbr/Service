


@extends('admin.layouts.master')
@section('content')

<div class="container-fuluid">
    <div class="row">
        <div class="col-12">
            <h2 class="mb-4">Update Category</h2>
@include('admin.layouts.error')
            <form action="{{route('categories.update',$category->id)}}" method="POST">
                @csrf
                @method('put')
                <div class="mb-3">
                    <input type="text" name="name" value="{{$category->name}}" class="form-control" placeholder="Name" >
                </div>
                <button class="btn btn-info px-5">update</button>
            </form>
        </div>
    </div>
</div>



@stop
