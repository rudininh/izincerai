
@extends('layouts/main')

    @section('container')
    <h1>{{ $title }}</h1>

    @if ($posts->count())

     <div class="card mb-3">
        <img src="http://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}" class="card-img-top" alt="...">
        <div class="card-body text-center">
            <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
            <small class="text-muted"><p>By. <a href="/authors/{{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in a  <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}</p></small>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
             <a href="/posts/{{ $posts[0]->slug  }}" class="text-decoration-none btn btn-primary">Read More</a>
        </div>
    </div>   
    
    @else
    <p class="text-center fs-4">No posts found.</p>

    @endif

    

    @foreach ($posts->skip(1) as $post)

    
    <article class="mb-5 border-bottom pb-4">
        <h2>
            <a href="/posts/{{ $post->slug  }}" class="text-decoration-none">
                {{ $post->title }}
            </a>
        </h2>
             <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in a  <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
        <p>{{ $post->excerpt  }}</p>

        <a href="/posts/{{ $post->slug  }}" class="text-decoration-none">Read More..</a>
    </article>

    
    @endforeach
      
    @endsection