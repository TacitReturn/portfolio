@include('layouts.app')

@section('content')

    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">{{$post->created_at }}</p>
                    <p class="card-text">{{$post->body }}</p>
                    <a class="card-link">Read More..</a>
                    {{--                <a class="card-link">Another link</a>--}}
                </div>
            </div>
        @endforeach
    @endif

@endsection
