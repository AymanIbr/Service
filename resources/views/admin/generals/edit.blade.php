


@extends('admin.layouts.master')
@section('content')

<div class="container-fuluid">
    <div class="row">
        <div class="col-12">
            <h2 class="mb-4">Update Service</h2>
@include('admin.layouts.error')
            <form action="{{route('generals.update',$general->id)}}" method="POST">
                @csrf
                @method('put')
                <div class="mb-3">
                    <input type="text" name="title" value="{{$general->title}}" class="form-control" placeholder=" About Title" >
                </div>
                <div class="mb-3">
                <textarea placeholder="About Content" name="content" class="form-control" rows="4"{{$general->content}}></textarea>
                </div>
                <div class="mb-3">
                    <input type="text" name="sturdy" value="{{$general->sturdy}}" class="form-control" placeholder="Sturdy Themes" >
                </div>
                <div class="mb-3">
                    <input type="text" name="up_to_Date" value="{{$general->up_to_Date}}" class="form-control" placeholder="Up to Date" >
                </div>
                <div class="mb-3">
                    <input type="text" name="ready" value="{{$general->ready}}" class="form-control" placeholder="Ready to Publish" >
                </div>
                <div class="mb-3">
                    <input type="text" name="made" value="{{$general->made}}" class="form-control" placeholder="Made with Love" >
                </div>
                <button class="btn btn-info px-5">update</button>
            </form>
        </div>
    </div>
</div>



@stop
