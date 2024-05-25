@extends('layouts.main')

@section('container')
    <h1>{{ $title }}</h1>
    @foreach ($posts as $post)
        {{-- <article class="mb-5">
            <h2>
                <a href="/posts/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
            </h2>
            <p>{{ $post->excerpt }}</p>
        </article> --}}
        <div class="card text-center mb-2">
            <div class="card-header">
              Blog
            </div>
            <div class="card-body">
              <h5 class="card-title"><a href="/posts/{{ $post->slug }}" class="text-decoration-none">
                {{ $post->title }}
            </a></h5>
              <p class="card-text">{{ $post->excerpt }}</p>
              <a href="/posts/{{ $post->slug }}" class="btn btn-primary">See More</a>
            </div>
            <div class="card-footer text-muted">
                <p>Written on: {{ $post->created_at->format('d F Y') }} by : <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a></p> 
            </div>
          </div>
    @endforeach
@endsection
