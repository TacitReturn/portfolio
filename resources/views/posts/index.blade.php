@extends('layouts.app')

@section('content')
    <h1>Posts</h1>

    @if(count($posts) > 0)
        <ul>
            @foreach($posts as $post)
                <li>
                    {{$post->title}}
                </li>
            @endforeach
        </ul>

    @endif

@endsection
