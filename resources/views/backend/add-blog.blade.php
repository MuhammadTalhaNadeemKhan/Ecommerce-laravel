@extends('backend.layouts.app')

@section('title', 'Add Blog')

@section('content')
<div class="container mt-5 pt-5 mb-5">
    <h1>Create Blog</h1>
    <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" required />
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" required>{{ old('content') }}</textarea>
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" />
        </div>

        <div class="form-group">
            <label for="tags">Tags</label>
            <input type="text" name="tags" id="tags" value="{{ old('tags') }}" />
        </div>

        <div class="form-group">
            <label for="post_date">Post Date</label>
            <input type="date" name="post_date" id="post_date" value="{{ old('post_date') }}" />
        </div>

        <button type="submit">Create Blog</button>
    </form>
</div>
@endsection
