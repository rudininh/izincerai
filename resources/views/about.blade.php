@extends('layouts/main')

@section('container')
    <h1>THIS IS ABOUT YOU AND ME asda</h1>
    <h1>{{ $name }} </h1>
    <h2>  {{ $email }} </h2>
    <img src="{{ $img }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
@endsection
    
