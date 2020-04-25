@extends('layouts.app')

@section('content')
    <div class="card my-3">
        <div class="card-body">
            <h5 class="card-title">{{$post->title}}</h5>
            <small class="card-text">
                Posted on:
                <span class="badge badge-pill badge-primary">
                    {{$post->created_at->format('jS F Y h:i:s A') }}
                </span>
                by:
                <span class="badge badge-pill badge-primary">
                    {{ isset(Auth::user()->name) ? Auth::user()->name : 'Must be signed in.' }}
                </span>

            </small>
            <p class="card-text">{{$post->body }}</p>
            <a href="/posts/{{$post->id}}/edit" class="card-link">Edit Post</a>
            <form action="/posts/{{$post->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="card-link">Delete Post</button>
            </form>

        </div>
    </div>
@endsection
