@extends('layouts.app')

@section('content')
    {{--<div class="jumbotron">--}}
    {{--    <h2 class="display-4">Hello, there!</h2>--}}
    {{--    <p class="lead">Welcome to my portfolio, you'll find my projects, resume and blog here ----}}
    {{--    login and/or register if you're interested in IoT and tutorial material from my blog.</p>--}}
    {{--    <a class="btn btn-primary btn-lg" href="{{route('contact-me')}}" role="button">Contact</a>--}}
    {{--    <p class="lead">If you're interested in more recent projects you can check out my GitHub repo--}}
    {{--        <span><a target="_blank" href="https://github.com/TacitReturn"> here.</a></span>--}}
    {{--    </p>--}}
    {{--</div>--}}

    <!-- News jumbotron -->
    <div class="jumbotron text-center hoverable p-4">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-4 offset-md-1 mx-3 my-3">

                <!-- Featured image -->
                <div class="view overlay">
                    <img src="https://mdbootstrap.com/img/Photos/Others/laptop-sm.jpg" class="img-fluid"
                         alt="Sample image for first version of blog listing">
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-7 text-md-left ml-3 mt-3">

                <!-- Excerpt -->
                <a href="#!" class="green-text">
                    <h6 class="h6 pb-1"><i class="fas fa-desktop pr-1"></i> Work</h6>
                </a>

                <h4 class="h4 mb-4">This is title of the news</h4>

                <p class="font-weight-normal">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                    doloremque, totam
                    rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                    dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur.</p>
                <p class="font-weight-normal">by <a><strong>Carine Fox</strong></a>, 19/08/2016</p>

                <a class="btn btn-success">Read more</a>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- News jumbotron -->
@endsection
