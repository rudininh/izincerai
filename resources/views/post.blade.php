@extends('layouts.main')

@section('container')
<h2>{{ $post->title }}</h2>
<p>By. Rudini in a  <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
{!! $post->body !!}
<a href="/posts">Back To Posta</a>
@endsection