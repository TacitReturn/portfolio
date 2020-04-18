@extends('layouts.app')

@section('content')

    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card my-3">
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <small class="card-text">Posted On: {{$post->created_at }}</small>
                    <p class="card-text">{{$post->body }}</p>
                    <a href="/posts/{{$post->id}}" class="card-link">Read More..</a>
                    {{--                <a class="card-link">Another link</a>--}}
                </div>
            </div>
        @endforeach
        {{$posts->links}}

    @else
        <p class="lead">No Posts Found!</p>
    @endif

@endsection
