@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome {{ $name }}</h1>
        <p>This is the laravel application from the "Laravel from Scratch" Youtube series</p>
    </div>
@endsection