@extends('dashboard.layouts.main')

@section('container')
 
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Post</h1>
    </div>
<div class="col-lg-8">
 <form method="post" action="/dashboard/posts" class="mb-5" enctype="multipart/form-data">
    @csrf
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title') }}">
    @error('title')

     <div class="invalid-feedback">
      {{ $message }}
     </div>

    @enderror
  </div>
   <div class="mb-3">
    <label for="slug" class="form-label">Slug</label>
    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
    @error('slug')

     <div class="invalid-feedback">
      {{ $message }}
     </div>

    @enderror
  </div>
  <div class="mb-3">
    <label for="category" class="form-label">Category</label>
    <select class="form-select" name="category_id">
      @foreach ($categories as $category)
      @if(old('category_id') == $category->id)
      <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
      @else
      <option value="{{ $category->id }}">{{ $category->name }}</option>
      @endif
      @endforeach
    </select>
  </div>

  <div class="mb-3">
    <label for="formFile" class="form-label">Post Image</label>
    <input class="form-control" type="file" id="image" name="image">
  </div>

  <div class="mb-3">
    <label for="body" class="form-label">Body</label>
    @error('body')

     <p class="text-danger"> {{ $message }} </p>
     
    @enderror
    <input id="body" type="hidden" name="body" value="{{ old('body') }}">
    <trix-editor input="body"></trix-editor>
  </div>


      <script>
      const title = document.querySelector('#title');
      const slug = document.querySelector('#slug');

      title.addEventListener('change', function(){
        fetch('/dashboard/post/checkSlug?title=' + title.value)
          .then(response => response.json())
          .then(data => slug.value = data.slug)
      });

      document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
      })
    </script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
         <link rel="stylesheet" type="text/css" href="/css/trix.css">
    {{-- <script type="text/javascript" src="/js/trix.js"></script>
      <script src="/js/dashboard.js"></script> --}}

  <button type="submit" class="btn btn-primary">Create Post</button>
</form>
</div>

</main>




@endsection