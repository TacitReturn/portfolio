@extends('layouts.app')

@section('content')

    <div class="container">
        @if(count($posts) > 0)
            @foreach($posts as $post)
                <div class="card my-3">
                    <div class="card-body">
                        <h4 class="card-title">{{$post->title}}</h4>
                        <small class="card-text">
                            Posted on:
                            <span class="badge badge-pill badge-primary">
                    {{$post->created_at->format('jS F Y h:i:s A') }}
                </span>
                            by:
                            <span class="badge badge-pill badge-primary">

                                {{$post->user->name}}
                </span>
                        </small>
                        <br/>
                        <p class="card-text pt-5">{{ Str::limit($post->body, 50) }}</p>
                        <a href="/posts/{{$post->id}}" class="card-link">Read More..</a>
                        {{--                <a class="card-link">Another link</a>--}}
                    </div>
                </div>
            @endforeach
            {{$posts->links()}}

        @else
            <p class="lead">No Posts Found!</p>
        @endif

    </div>

@endsection
