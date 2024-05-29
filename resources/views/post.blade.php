@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <article class="border-bottom mb-3">
                <h2>{{ $post->title }}</h2>
                <p>By: <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> | <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p> <p>Written on: {{ $post->created_at->format('d F Y') }} </p> 
                {!! $post->body !!}
            </article>
        
            <a href="/blog" class="text-decoration-none">Back to blogs</a>
        </div>
    </div>
</div>
@endsection