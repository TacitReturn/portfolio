@extends('layouts.app')

@section('content')
    <div class="card my-3">
        <div class="card-body">
            <h5 class="card-title">{{$post->title}}</h5>
            <small class="card-text">
                Posted on {{$post->created_at->format('jS F Y h:i:s A') }}
                by {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}
            </small>
            <p class="card-text">{{$post->body }}</p>
            {{--                <a class="card-link">Another link</a>--}}
        </div>
    </div>
@endsection
