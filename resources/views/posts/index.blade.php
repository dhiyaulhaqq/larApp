@extends('layouts.app')

@section('title')
    Posts
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Posts</h1>
            @if (count($posts) > 0)
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Post Title</th>
                            <th>Created at</th>
                            <th>Posted by</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                        <tr>
                            <td><a href="/posts/{{ $post->id }}" class="text-dark">{{ $post->title }}</a></td>
                            <td>{{ $post->created_at }}</td>
                            <td>{{ $post->user->name }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>No posts</p>
            @endif
        </div>
    </div>
@endsection