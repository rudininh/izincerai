
@extends('layouts/main')

    @section('container')
    <h1>Post Categories </h1>

    <div class="container">
        <div class="row">
           @foreach ($categories as $category)
            <div class="col-md-4">
                <div class="card bg-dark text-white">
                <a href="/posts?category={{ $category->slug }}" class="text-white text-decoration-none">
                    <img src="http://source.unsplash.com/500x500?{{ $category->name }}" class="card-img " alt="{{ $category->name }}">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                        <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0,0,0,0.7)">{{ $category->name }}</h5>
                     
                    </div>
                </div>
                </a>
            </div>
             @endforeach
        </div>
    </div>

      
    @endsection