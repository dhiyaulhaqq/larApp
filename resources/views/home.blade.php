@extends('layouts.app')

@section('content')
    <div class="alert alert-success">
        You are logged in!
    </div>
    <h1>Dashboard</h1>
    <p><a href="{{ route('posts.create') }}" class="btn btn-dark">{{ __('Create Post') }}</a></p>
    <h3>Your Blog Posts</h3>
    @if (count($posts) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Post Title</th>
                    <th>Created at</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td><a href="/posts/{{ $post->id }}" class="text-dark">{{ $post->title }}</a></td>
                    <td>{{ $post->created_at }}</td>
                    <td>
                        <div class="d-flex flex-row">
                            <a href="/posts/{{ $post->id }}/edit" class="btn btn-dark mr-2">Edit</a>
                            <form action="/posts/{{ $post->id }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $posts->links() }}
    @else
        <p>No posts</p>
    @endif
@endsection
