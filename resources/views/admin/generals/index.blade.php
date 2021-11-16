


@extends('admin.layouts.master')
@section('content')

<div class="container-fuluid">
    <div class="row">
        <div class="col-12">
            <h2 class="mb-4">All Service</h2>
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
            <th>Title About</th>
            <th>Ccontent About</th>
            <th>Sturdy Themes</th>
            <th>Up to Date</th>
            <th>Ready to Publish</th>
            <th>Made with Love</th>
            <th>Created At</th>
            <th>Action</th>
        </tr>
        @foreach ( $generals as $general )
        <tr>
            <td>{{$general->id}}</td>
            <td>{{$general->title}}</td>
            <td>{{$general->content}}</td>
            <td>{{$general->sturdy}}</td>
            <td>{{$general->up_to_Date}}</td>
            <td>{{$general->ready}}</td>
            <td>{{$general->made}}</td>
            <td>{{$general->created_at->format('d - m - Y')}}</td>
            <td>
                <a class="btn btn-primary btn-sm " href="{{route('generals.edit',$general->id)}}"><i class="fas fa-edit"></i></a>
                <form class="d-inline" action="{{route('generals.destroy',$general->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button onclick="return confirm('are you sure ?')" class="btn btn-danger btn-sm"><i class="fas fa-times"></i></button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>
    {{$generals->links()}}
        </div>
    </div>
</div>



@stop
