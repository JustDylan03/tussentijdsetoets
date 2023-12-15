@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Alle Forum Posts</h1>

        @foreach ($posts as $post)
            <div class="post">
                <h2>{{ $post->subject }}</h2>
                <p>{{ $post->content }}</p>
                <p>Geplaatst door: {{ $post->user->name }}</p>

                <h3>Reacties:</h3>
                @foreach ($post->comments as $comment)
                    <div class="comment">
                        <p>{{ $comment->content }}</p>
                        <p>Geplaatst door: {{ $comment->user->name }}</p>
                    </div>
                @endforeach
            </div>
            <hr>
        @endforeach
    </div>
@endsection