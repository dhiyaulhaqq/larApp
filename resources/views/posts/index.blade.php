@extends('layouts.app')

@section('title')
    Posts
@endsection

@section('content')
    <h1>Posts</h1>
    @if (count($posts) > 0)
        <ul class="list-group mb-3">
            @foreach ($posts as $post)
                <li class="list-group-item">
                    <a href="/posts/{{ $post->id }}">
                        <h3>{{ $post->title }}</h3>
                    </a>
                    <small>Created at {{ $post->created_at }}</small>
                </li>
            @endforeach
        </ul>
        {{ $posts->links() }}
    @else
        <p>No posts</p>
    @endif
@endsection