@extends('layouts.app')

@section('title', 'Laravel Companion | Home')

@section('content')

<div class="jumbotron p-5 mb-4 bg-light rounded-3">
    <div class="container py-5 text-center">
        <h1 class="display-5 fw-bold">
            My Laravel Companion
        </h1>

        <p class="fs-4 text-center">Meet your Laravel projects' faithful ally - a beacon of efficiency and innovation. Let this companion guide you to coding greatness.</p>
    </div>
    <div class="d-flex gap-3 justify-content-center">
        <a href="{{ route('dashboard.posts.index') }}" class="btn btn-primary btn-lg" type="button">Projects list</a>
        <a href="{{ route('dashboard.posts.create') }}" class="btn btn-success btn-lg" type="button">Create a new project</a>
    </div>
</div>
@endsection
