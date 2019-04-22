@extends('layouts.app')

@section('title')
    {{ $post->title }}
@endsection

@section('content')
    @guest
        <p>
            <a href="/posts" class="btn btn-dark">Go Back</a>
        </p>
    @else
        <p>
            <a href="/home" class="btn btn-dark">Dashboard</a>
            <a href="/posts" class="btn btn-dark">All Posts</a>
        </p>
    @endguest
    <small>
        Created at {{ $post->created_at }} by {{ $post->user->name }}
    </small>
    <h1>
        {{ $post->title }}
    </h1>
    <p>
        {{ $post->body }}
    </p>
    @auth
        @if ( auth()->user()->id === $post->user_id )
            <div class="d-flex flex-row">
            <a href="/posts/{{ $post->id }}/edit" class="btn btn-dark mr-2">Edit</a>
            <form action="/posts/{{ $post->id }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
        @endif
    @endauth
@endsection