@extends('layouts.app')

@section('content')
    <div class="jumbotron card card-image"
         style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient1.jpg);">
        <h2 class=" display-4">Hello, there!</h2>
        <p class="lead">Welcome to my portfolio, you'll find my projects, resume and blog here --
            login and/or register if you're interested in IoT and tutorial material from my blog.</p>
        <p class="lead">If you're interested in more recent projects you can check out my GitHub repo
            <span><a target="_blank" href="https://github.com/TacitReturn"> here.</a></span>
        </p>
        <hr>
        <a class="btn btn-primary btn-lg" href="{{route('contact-me')}}" role="button">Contact</a>
    </div>
@endsection
