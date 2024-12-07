@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>

                <p>By : <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

                <img src="img/code.jpg" alt="{{ $post->category->name }}" class="image-fluid" style="width:1200px; height:400px;">

                <article class="my-3 fs-5">
                    <p>{!! $post->body !!}</p>
                </article>

                <a href="/blog">Back to posts</a>
            </div>
        </div>
    </div>

@endsection