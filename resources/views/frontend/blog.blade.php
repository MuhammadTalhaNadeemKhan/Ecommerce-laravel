@extends('frontend.layouts.app')

@section('title', 'Blog')

@section('content')
<div class="slider-area over-hidden">
    <div class="single-page page-height d-flex align-items-center" data-background="{{ url('frontend/assets/images/blog/bg-blog-1-1.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="page-title text-center">
                        <h2 class="text-capitalize text-white mb-25 pt-35">Blog</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center bg-transparent">
                                <li class="breadcrumb-item"><a class="secondary-color" href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active text-capitalize text-white" aria-current="page">Blog</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="blog-full-width-area pt-300 over-hidden pl-15 pr-15">
    <div class="container-wrapper">
        <div class="row">
            @if($blogs->count())
                @foreach ($blogs as $blog)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="blog-right-sidebar-left-content mb-60">
                            <div class="blog-right-sidebar-left-img mb-25">
                                @if($blog->image)
                                    <img class="width100 pb-15" src="{{ Storage::url($blog->image) }}" alt="{{ $blog->title }}">
                                @else
                                    <img class="width100 pb-15" src="{{ url('frontend/assets/images/blog/default-image.jpg') }}" alt="Default Image">
                                @endif
                            </div>
                            <ul class="blog-tag d-flex">
                                @if($blog->tags)
                                    @foreach (explode(',', $blog->tags) as $tag)
                                        <li><a class="text-white d-inline-block mb-15" href="#">{{ $tag }}</a></li>
                                    @endforeach
                                @endif
                            </ul>
                            <h3><a href="{{ route('show-blog', $blog->id) }}">{{ $blog->title }}</a></h3>
                            <p class="pt-10 pb-10">{{ \Illuminate\Support\Str::limit($blog->content, 150, '...') }}</p>
                            <ul class="blog-post-data">
                                <li class="post-date pr-35">Post date: <a href="#">{{ $blog->post_date ? $blog->post_date->format('d M, Y') : 'N/A' }}</a></li>
                                <li class="post-view pr-20"><span class="icon-eye pr-1"></span>{{ rand(100, 500) }} Views</li>
                                <li class="post-comments"><span><i class="far fa-comment"></i></span><span class="px-1">0</span> Comments</li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            @else
                <p>No blogs found.</p>
            @endif
        </div>
    </div>
</div>

<div class="pagination-area blog-pagination-area pb-110 mt-10 over-hidden">
    <div class="container-wrapper pl-15 pr-15">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                {{ $blogs->links() }} <!-- Laravel pagination links -->
            </div>
        </div>
    </div>
</div>
@endsection
