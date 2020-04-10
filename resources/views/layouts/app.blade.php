<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>GR Portfolio</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="">
                    {{ config('app.name', 'GR Portfolio') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('index')}}">Home</a>
                        </li>
                        <!-- Button trigger modal -->
                        <li class="nav-item">
                            <a type="button" class="nav-link" data-toggle="modal" data-target="#fullHeightModalRight">
                                Resume
                            </a>

                            <!-- Full Height Modal Right -->
                            <div class="modal fade right" id="fullHeightModalRight" tabindex="-1" role="dialog"
                                 aria-labelledby="myModalLabel"
                                 aria-hidden="true">

                                <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
                                <div class="modal-dialog modal-dialog-scrollable modal-full-height modal-right" role="document">


                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title w-100" id="myModalLabel">Software Engineer</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            {{--                                Modal Content Here--}}
                                            <h1>Glenn Rudge</h1>
                                            <p class="lead">
                                                491 Ives Dairy Road <br/>
                                                Miami, Florida 33179 <br/>
                                                Phone: (305) 904-1725 <br/>
                                                E-Mail: glennrudge@hephaestus-solutions.com <br/>
                                            </p>
                                            <br/>
                                            <h1>Programming Languages</h1>
                                            <ul class="list-group">
                                                <li class="list-group-item">
                                                    C++
                                                </li>
                                                <li class="list-group-item">
                                                    PHP
                                                </li>

                                                <li class="list-group-item">
                                                    JavaScript
                                                </li>
                                            </ul>

                                            <h2 class="mt-2">
                                                Professional Summary
                                            </h2>
                                            <p class>
                                                Self-motivated Software Engineer with high level of experience working on multiple
                                                projects. Passionate and hardworking with penchant for meeting deadlines. Interested
                                                in
                                                role with company promoting best practices and offering diverse customer projects.
                                            </p>
                                            <h2>
                                                Work History
                                            </h2>

                                            <p>
                                                April 2016 - Current <br/>
                                                Hephaestus Software Miami, Florida <br/>
                                                Web Application Developer
                                            </p>
                                            <p>
                                                Hands-on experience using UNIX and Apache web servers.
                                                Assist in updating application development policies to ensure that all future
                                                applications meet the latest technical requirements.
                                                Kept abreast of emerging technologies, software and trends and project applications.
                                                Used programming capabilities in PHP, SQL and JavaScript and other libraries as
                                                needed.
                                                Designed, implemented and monitored web pages and sites for continuous improvement.
                                                Oversaw troubleshooting of technical and [Type] issues to solve problems quickly and
                                                efficiently.
                                            </p>
                                            <hr/>

                                            <p>
                                                February 2010 - September 2013 <br/>
                                                Toy Crew Miami, FL <br/>
                                                Web Developer <br/>
                                            </p>
                                            <p>
                                                The role is responsible for designing, coding and modifying websites, from layout to
                                                function and according to a client's specifications.
                                                Strive to create visually appealing sites that feature user-friendly design and
                                                clear
                                                navigation.
                                            </p>
                                            <hr/>

                                            <h2>
                                                Education
                                            </h2>
                                            <p>
                                                Miami Dade College Miami, FL <br/>
                                                Associate of Science Computer Programming - Business Applications
                                            </p>
                                            <p>
                                                Free Code Camp <br/>
                                                Responsive Web Design Certification Web Development
                                            </p>
                                            <hr/>
                                        </div>
                                        <div class="modal-footer justify-content-center">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Download PDF</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- Full Height Modal Right -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif

                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.15.0/js/mdb.min.js"></script>
</body>

</html>
