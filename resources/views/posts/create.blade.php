@extends('layouts.app')

@section('title')
    Create Post
@endsection

@section('content')
    <h1>Create Post</h1>
    <form action="/posts" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" placeholder="Title" class="form-control">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea name="body" id="body" rows="3" placeholder="Body" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-dark">Submit</button>
    </form>
@endsection
