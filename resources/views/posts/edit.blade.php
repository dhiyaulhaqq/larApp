@extends('layouts.app')

@section('title')
    Edit Post
@endsection

@section('content')
    <h1>Edit  Post</h1>
    <form action="/posts/{{ $post->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" placeholder="Title" value="{{ $post->title }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea name="body" id="body" rows="3" placeholder="Body" class="form-control">{{ $post->body }}</textarea>
        </div>
        <button type="submit" class="btn btn-dark">Submit</button>
    </form>
@endsection
