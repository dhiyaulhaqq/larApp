@extends('layouts.app')

@section('title')
    {{ $post->title }}
@endsection

@section('content')
    <p><a href="/posts" class="btn btn-dark">Go Back</a></p>
    <small>Created at {{ $post->created_at }}</small>
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
    <div class="d-flex flex-row">
        <a href="/posts/{{ $post->id }}/edit" class="btn btn-dark mr-2">Edit</a>
        <form action="/posts/{{ $post->id }}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
@endsection