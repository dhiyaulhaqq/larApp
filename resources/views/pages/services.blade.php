@extends('layouts.app')

@section('title')
    Services
@endsection

@section('content')
    <h1>Services</h1>
    <ul class="list-group">
    @foreach ($services as $service)
        <li class="list-group-item">{{ $service }}</li>
    @endforeach
    </ul>
@endsection