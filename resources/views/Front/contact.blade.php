
@extends('Front.layouts.master')

@section('content')


@include('Front.layouts.include',[
    'title'=> 'Welcome To Contact Page'
]);
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Let's Get In Touch!</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">Ready to start your next project with us? Send us a messages and we will get back to you as soon as possible!</p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form action="{{route('contactSubmit')}}" method="POST">
                            @csrf
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}" type="text" placeholder="Enter your name..."  />
                                <label for="name">Full name</label>
                                @error('name')
                                    <small class="invalid-feedback">{{$message}}</small>
                                @enderror
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" type="email" placeholder="name@example.com" />
                                <label for="email">Email address</label>
                                @error('email')
                                    <small class="invalid-feedback">{{$message}}</small>
                                @enderror
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{old('phone')}}" type="tel" placeholder="(123) 456-7890"/>
                                <label for="phone">Phone number</label>
                                @error('phone')
                                    <small class="invalid-feedback">{{$message}}</small>
                                @enderror
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control @error('message') is-invalid @enderror" name="message" type="text" placeholder="Enter your message here..." style="height: 10rem">{{old('message')}}</textarea>
                                <label for="message">Message</label>
                                @error('message')
                                    <small class="invalid-feedback">{{$message}}</small>
                                @enderror
                            </div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary btn-xl " id="submitButton" type="submit">Submit</button></div>
                        </form>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-4 text-center mb-5 mb-lg-0">
                        <i class="bi-phone fs-2 mb-3 text-muted"></i>
                        <div>+970 594 258 327</div>
                    </div>
                </div>
            </div>
        </section>
    </section>

@stop
