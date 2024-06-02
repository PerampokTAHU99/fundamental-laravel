@extends('layouts.main')

@section('container')
    <h1>{{ $title }}</h1>

    @if($posts->count())
        <div class="card mb-3 text-center">
          <img class="card-img-top" src="https://picsum.photos/1200/200?random={{ $posts[0]->category->name }}" alt="Picture of {{ $posts[0]->category->name }}">
          {{-- src="https://source.unsplash.com/random/1200×400/?{{ $posts[0]->category->name }}" --}}
          <div class="card-body">
            <h3 class="card-title"><a href="/posts/{{ $posts[0]->title }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
            <p class="card-text">
              <small class="text-muted">
                By: <a href="/authors/{{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
              </small>
            </p>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-primary">See More</a>
          </div>
        </div>
    @else
        <p class="text-center fs-4">No Post Found</p>
    @endif
    
    <div class="container">
        <div class="row">
          @foreach ($posts->skip(1) as $post)
          <div class="col-md-4 mb-3">
            <div class="card">
              <div>
                <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.7)">{{ $post->category->name }}</a>
              </div>
              <img class="card-img-top" src="https://picsum.photos/286/180?random={{ $post->category->name }}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><a href="/posts/{{ $post->title }}" class="text-decoration-none text-dark">{{ $post->title }}</a></h5>
                <p class="card-text">
                  <small class="text-muted">
                    By: <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
                  </small>
                </p>
                <p class="card-text">{{ $post->excerpt }}</p>
                <a href="/posts/{{ $post->slug }}" class="btn btn-primary">See More</a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
    </div>
@endsection
