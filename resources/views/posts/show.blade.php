@extends('layouts.app')

@section('content')
    <div class="container">
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
                    {{$post->user->name}}
                </span>

                </small>
                <p class="card-text">{!! $post->body !!}}</p>
                <div class="row">
                    @if(!Auth::guest())
                        @if(Auth::user()->id == $post->user_id)
                            <a href="/posts/{{$post->id}}/edit" class="card-link btn btn-primary">Edit Post</a>

                            <form action="/posts/{{$post->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="card-link btn btn-danger">Delete Post</button>
                            </form>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
