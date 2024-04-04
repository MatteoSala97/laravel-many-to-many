@extends('layouts.app')

@section('title', 'Laravel Companion | Projects')

@section('content')
<main class="container">
    <h1 class="text-center py-3">Projects list</h1>

    <a class="btn btn-outline-secondary mb-3" href="{{ route('dashboard.posts.create') }}">Create a new project</a>

    <div class="row">
        @foreach($posts as $item)
            <div class="col-4 p-2">
                <div class="card d-flex flex-column">
                    <a href="{{ route('dashboard.posts.show', $item->id) }}">
                        <img class="card-img-top" src="{{ asset('images/WIP.jpg') }}" alt="{{ $item->title }}"/></a>
                    <div class="card-body overflow-hidden">
                        <h4 class="card-title">Title: {{ $item->title }}</h4>
                        <p class="card-text">ID: {{ $item->id }}</p>
                        <p class="card-text overflow-hidden" style="white-space: nowrap; text-overflow: ellipsis;">Content: {{ $item->content }}</p>
                        <p class="card-text">Slug: {{ $item->slug }}</p>
                        <div class=" d-flex gap-2 justify-content-center">
                            <a
                            name=""
                            id=""
                            class="btn btn-outline-success"
                            href="{{ route('dashboard.posts.edit', $item->id) }}"
                            role="button">
                            Edit
                        </a>
                            <form action="{{ route('dashboard.posts.destroy', $item->id) }}" method="POST">

                            @csrf
                            @method('DELETE')

                                <button type="submit" class="btn btn-outline-danger">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</main>
@endsection
