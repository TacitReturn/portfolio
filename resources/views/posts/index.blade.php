@include('layouts.app')

@section('content')

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
