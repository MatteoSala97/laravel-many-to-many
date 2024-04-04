@extends('layouts.app')

@section('title', 'Laravel Companion | View Project')

@section('content')

<main class="container">
    <h1 class="pt-4">
        Benvenuto in questo progetto
    </h1>
    <div class="card-body border p-4 mt-3 d-flex">
        <img class="card-img-top" style="max-width: 400px" src="{{ asset('images/WIP.jpg') }}" alt="{{ $project->title }}"/>
        <div class="d-flex flex-column justify-content-center" style="overflow: hidden; width: 600px;">
            <h4 class="card-title">Title: {{ $project->title }}</h4>
            <p class="card-text">ID: {{ $project->id }}</p>
            <p class="card-text" style="word-wrap: break-word;">Content: {{ $project->content }}</p>
            <p class="card-text">Slug: {{ $project->slug }}</p>
            <p class="card-text">Category: {{ $project->category->name }}</p>
        </div>
    </div>
    <div class="mt-5 d-flex gap-3">
        <a href="{{ route('dashboard.posts.index') }}" class="btn btn-outline-secondary" type="button">Back to where you came from</a>

        <a name="edit" id="edit" class="btn btn-outline-success" href="{{ route('dashboard.posts.edit', $project->id) }}" role="button">
        Edit this project</a>
    </div>
</main>
@endsection
