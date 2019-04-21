@extends('layouts.app')

@section('title')
    Services
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>Services</h1>
            <ul class="list-group">
            @foreach ($services as $service)
                <li class="list-group-item">{{ $service }}</li>
            @endforeach
            </ul>
        </div>
    </div>
@endsection