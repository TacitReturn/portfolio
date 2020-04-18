@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{$post->title}}</h5>
            <small class="card-text">Posted On: {{$post->created_at }}</small>
            <p class="card-text">{{$post->body }}</p>
            {{--                <a class="card-link">Another link</a>--}}
        </div>
    </div>
@endsection
