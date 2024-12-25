@extends('backend.layouts.app')

@section('title', 'List Blog')

@section('content')
<div class="container mt-5">
    <h2>All Blogs</h2>
    <a href="{{ route('admin.blog.create') }}" class="btn btn-primary mb-3">Add New Blog</a>

    <table class="table table-bordered text-white   table-lg ">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Image</th>
                <th>Tags</th>
                <th>Post Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $blog)
            <tr>
                <td>{{ $blog->id }}</td>
                <td>{{ $blog->title }}</td>
                <td>
                    @if ($blog->image)
                        <img src="{{ Storage::url($blog->image) }}" alt="{{ $blog->title }}" width="100">
                    @else
                        No Image
                    @endif
                </td>
                <td>{{ $blog->tags }}</td>
                <td>{{ $blog->post_date ? $blog->post_date->format('d M, Y') : 'N/A' }}</td>
                <td>
                    <a href="{{ route('admin.blog.edit', $blog->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('admin.blog.destroy', $blog->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination -->
    <div class="d-flex justify-content-center">
        {{ $blogs->links() }}
    </div>
</div>
@endsection
