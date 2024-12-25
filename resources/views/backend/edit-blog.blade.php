@extends('backend.layouts.app')

@section('title', 'Edit Blog')

@section('content')
<div class="container mt-5">
    <h1>Edit Blog</h1>
    <form action="{{ route('admin.blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title', $blog->title) }}" required class="form-control" />
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" class="form-control" required>{{ old('content', $blog->content) }}</textarea>
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control" />
            @if ($blog->image)
                <img src="{{ Storage::url($blog->image) }}" alt="{{ $blog->title }}" width="100" />
            @else
                No Image
            @endif
        </div>

        <div class="form-group">
            <label for="tags">Tags</label>
            <input type="text" name="tags" id="tags" value="{{ old('tags', $blog->tags) }}" class="form-control" />
        </div>

        <div class="form-group">
            <label for="post_date">Post Date</label>
            <input type="date" name="post_date" id="post_date" value="{{ old('post_date', $blog->post_date->format('Y-m-d') ?? '') }}" class="form-control" />
        </div>

        <button type="submit" class="btn btn-success">Update Blog</button>
    </form>

    <br>
    <a href="{{ route('admin.blog.index') }}" class="btn btn-secondary">Back to List</a>
</div>
@endsection
