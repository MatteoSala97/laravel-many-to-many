@extends('layouts.app')

@section('title', 'Laravel Companion | Edit')

@section('content')
<main class="container">
    <h1 class="text-center py-3">Edit an existing project</h1>

    <form action="{{ route('dashboard.posts.update', $project->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input
                type="text"
                class="form-control @error('title') is-invalid @enderror"
                name="title"
                id="title"
                value="{{ old('title') ?? $project->title }}"
                />
        </div>
       @error('title')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror


         {{-- Multiple selection "categories"--}}
         <div class="mb-3">
            <label for="category_id" class="form-label">Categories</label>
            <select
                class="form-select form-select-lg @error('category_id') is-invalid @enderror"
                name="category_id"
                id="category_id">

                <option value="">Select one</option>

                @foreach ($categories as $item )
                <option value="{{ $item->id }}"
                    {{ $item->id == old('category_id', $project->category ? $project->category->id : '') ? 'selected' : '' }}>
                    {{ $item->name }}
                </option>
                @endforeach
            </select>
        </div>

        {{-- Multiple selection "tags"--}}

        <div class="mb-3">
            <label for="tags" class="form-label">Tags</label>


            <select
                multiple
                class="form-select form-select-lg"
                name="tags[]"
                id="tags"
            >
                @forelse ($tags as $item )
                    {{-- validation control --}}

                    @if($errors->any())
                        <option value="{{ $item->id }}"
                            {{ in_array($item->id, old('tags', [])) ? 'selected' : '' }}
                            >
                            {{ item->name }}
                        </option>

                        @else
                        <option value="{{ $item->id }}"
                            {{ $project->tags->contains($item->id) ? 'selected' : ''}}
                            >
                            {{ $item->name }}</option>
                    @endif
                    @empty

                    <option value="">There are no tags</option>

                @endforelse
            </select>
        </div>




        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control @error('title') is-invalid @enderror"" name="content" id="content" rows="3">{{ old('content') ?? $project->content }}</textarea>
        </div>
        @error('content')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
        <button type="submit" class="btn btn-outline-info">Submit your changes</button>
    </form>

</main>
@endsection
