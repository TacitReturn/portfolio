@extends('layouts.app')

@section('content')
    <!-- Card deck -->
    <div class="card-deck mt-5">

        <!-- Card -->
        <div class="card mb-4">

            <!--Card image-->
            <div class="view overlay">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg"
                     alt="Card image cap">
                <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>

            <!--Card content-->
            <div class="card-body">

                <!--Title-->
                <h4 class="card-title">My Portfolio</h4>
                <!--Text-->
                <p class="card-text">Portfolio displaying my projects, contact information and blog</p>
                <!-- Tech Stack -->
                <ul class="list-group">
                    <li class="list-group-item">HTML5</li>
                    <li class="list-group-item">CSS3</li>
                    <li class="list-group-item">JavaScript</li>
                    <li class="list-group-item">PHP 7.4</li>
                    <li class="list-group-item">Laravel Framework</li>
                    <li class="list-group-item">PostgresSQL</li>
                    <li class="list-group-item">Heroku</li>
                </ul>
                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                <button type="button" class="btn btn-light-blue btn-md">Read more</button>
                <button type="button" class="btn btn-light-blue btn-md">Read more</button>

            </div>

        </div>
        <!-- Card -->

{{--        <!-- Card -->--}}
{{--        <div class="card mb-4">--}}

{{--            <!--Card image-->--}}
{{--            <div class="view overlay">--}}
{{--                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/14.jpg"--}}
{{--                     alt="Card image cap">--}}
{{--                <a href="#!">--}}
{{--                    <div class="mask rgba-white-slight"></div>--}}
{{--                </a>--}}
{{--            </div>--}}

{{--            <!--Card content-->--}}
{{--            <div class="card-body">--}}

{{--                <!--Title-->--}}
{{--                <h4 class="card-title">Card title</h4>--}}
{{--                <!--Text-->--}}
{{--                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the--}}
{{--                    card's--}}
{{--                    content.</p>--}}
{{--                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->--}}
{{--                <button type="button" class="btn btn-light-blue btn-md">Read more</button>--}}

{{--            </div>--}}

{{--        </div>--}}
{{--        <!-- Card -->--}}

{{--        <!-- Card -->--}}
{{--        <div class="card mb-4">--}}

{{--            <!--Card image-->--}}
{{--            <div class="view overlay">--}}
{{--                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/15.jpg"--}}
{{--                     alt="Card image cap">--}}
{{--                <a href="#!">--}}
{{--                    <div class="mask rgba-white-slight"></div>--}}
{{--                </a>--}}
{{--            </div>--}}

{{--            <!--Card content-->--}}
{{--            <div class="card-body">--}}

{{--                <!--Title-->--}}
{{--                <h4 class="card-title">Card title</h4>--}}
{{--                <!--Text-->--}}
{{--                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the--}}
{{--                    card's--}}
{{--                    content.</p>--}}
{{--                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->--}}
{{--                <button type="button" class="btn btn-light-blue btn-md">Read more</button>--}}

{{--            </div>--}}

{{--        </div>--}}
{{--        <!-- Card -->--}}

    </div>
    <!-- Card deck -->
@endsection
