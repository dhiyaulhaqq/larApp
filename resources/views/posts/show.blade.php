@extends('layouts.app')

@section('title')
    {{ $post->title }}
@endsection

@section('content')
    <p><a href="/posts" class="btn btn-dark">Go Back</a></p>
    <small>Created at {{ $post->created_at }}</small>
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
    <p><a href="/posts/{{ $post->id }}/edit" class="btn btn-dark">Edit</a></p>
@endsection