@extends('layouts.main')

@section('container')
<h2 class="mb-5">{{ $post->title }}</h2>
<p>By. <a href="" class="text-decoration-none">{{ $post->user->name }}</a> in a  <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
{!! $post->body !!}
<a href="/posts" class="d-block mt-3">Back To Posta</a>
@endsection