
@extends('Front.layouts.master')

@section('content')

 @include('Front.layouts.include',[
     'title' => 'Welcome To Home Page',
     'subTitle' => 'I wish you a pleasant tour',
     'button'=> 'Find Out More'
 ]);

@stop
