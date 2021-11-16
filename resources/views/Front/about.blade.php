
@extends('Front.layouts.master')

@section('content')


@include('Front.layouts.include',[
    'title'=> 'Welcome To About Page'
]);
        <!-- About-->
@foreach ( $generals as $general )
<section class="page-section bg-primary" id="about">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="text-white mt-0">{{$general->title}}</h2>
                <hr class="divider divider-light" />
                <p class="text-white-75 mb-4">{{$general->content}}</p>
                <a class="btn btn-light btn-xl" href="{{route('servicePage')}}">Get Started!</a>
            </div>
        </div>
    </div>
</section>

@endforeach




@stop
