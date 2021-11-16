


@extends('admin.layouts.master')
@section('content')

<div class="container-fuluid">
    <div class="row">
        <div class="col-12">
            <h2 class="mb-4">All Portfolios</h2>
            @if (session('success'))
            <div class="alert alert-{{session('type')}} alert-dismissible fade show">
                {{session('success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
            </div>
        @endif
@include('admin.layouts.error')
    <table class="table">
        <tr class="dark  thead-dark">
            <th>#</th>
            <th>Name</th>
            <th>Image</th>
            <th>Category</th>
            <th>Created At</th>
            <th>Action</th>
        </tr>
        @foreach ( $portfolios as $portfolio )
        <tr>
            <td>{{$portfolio->id}}</td>
            <td>{{$portfolio->name}}</td>
            <td>
                <img width="80" src="{{asset('uplods/'.$portfolio->image)}}" alt="">
            </td>
            <td>{{$portfolio->category->name}}</td>
            <td>{{$portfolio->created_at->format('d - m - Y')}}</td>
            <td>
                <a class="btn btn-primary btn-sm" href="{{route('portfolios.edit',$portfolio->id)}}"><i class="fas fa-edit"></i></a>
                <form class="d-inline" action="{{route('portfolios.destroy',$portfolio->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button onclick="return confirm('are you sure ?')" class="btn btn-danger btn-sm"><i class="fas fa-times"></i></button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>
    {{$portfolios->links()}}
        </div>
    </div>
</div>



@stop
