


@extends('admin.layouts.master')
@section('content')

<div class="container-fuluid">
    <div class="row">
        <div class="col-12">
            <h2 class="mb-4">Add New service</h2>
@include('admin.layouts.error')
            <form action="{{route('generals.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="text" name="title" value="{{old('title')}}" class="form-control" placeholder=" About Title" >
                </div>
                <div class="mb-3">
                <textarea placeholder="About Content" name="content" class="form-control" rows="4"{{old('content')}}></textarea>
                </div>
                <div class="mb-3">
                    <input type="text" name="sturdy" value="{{old('sturdy')}}" class="form-control" placeholder="Sturdy Themes" >
                </div>
                <div class="mb-3">
                    <input type="text" name="up_to_Date" value="{{old('up_to_Date')}}" class="form-control" placeholder="Up to Date" >
                </div>
                <div class="mb-3">
                    <input type="text" name="ready" value="{{old('ready')}}" class="form-control" placeholder="Ready to Publish" >
                </div>
                <div class="mb-3">
                    <input type="text" name="made" value="{{old('made')}}" class="form-control" placeholder="Made with Love" >
                </div>
                <button class="btn btn-info px-5">Add</button>
            </form>
        </div>
    </div>
</div>



@stop
