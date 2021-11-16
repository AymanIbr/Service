        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        @isset($title)
                        <h1 class="text-white font-weight-bold">{{$title}}</h1>
                        @endisset
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        @isset($subTitle)
                        <p class="text-white-75 mb-5">{{$subTitle}}</p>
                        @endisset
                        @isset($button)
                        <a class="btn btn-primary btn-xl" href="{{route('aboutPage')}}">{{$button}}</a>
                        @endisset
                    </div>
                </div>
            </div>
        </header>
