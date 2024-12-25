@extends('frontend.layouts.app')

@section('title', $blog->title)

@section('content')
<div class="single-blog-area  pt-400   pb-110  ">
    <div class="container ">
        <div class="row">
            <div class="col-12">
                <div class="single-blog-content">
                    <div class="single-blog-img mb-25">
                        @if($blog->image)
                            <img class="width100" src="{{ Storage::url($blog->image) }}" alt="{{ $blog->title }}">
                        @else
                            <img class="width100" src="{{ url('frontend/assets/images/blog/default-image.jpg') }}" alt="No Image">
                        @endif
                    </div>

                    <div class="single-blog-text">
                        <h2>{{ $blog->title }}</h2>
                        <div class="blog-meta d-flex justify-content-between mb-20">
                            <span><strong>Post Date:</strong> {{ $blog->post_date ? $blog->post_date->format('d M, Y') : 'N/A' }}</span>
                            @if($blog->tags)
                                <span><strong>Tags:</strong> 
                                    @foreach(explode(',', $blog->tags) as $tag)
                                        <a href="#" class="blog-tag">{{ $tag }}</a>
                                    @endforeach
                                </span>
                            @endif
                        </div>
                        <div class="blog-content">
                            <p>{{ $blog->content }}</p>
                        </div>
                    </div>

                    <div class="back-to-list mt-30">
                        <a href="{{ route('blog') }}" class="btn btn-primary">Back to Blog List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
