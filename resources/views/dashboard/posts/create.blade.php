@extends('dashboard.layouts.main')

@section('container')
 
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Post</h1>
    </div>
<div class="col-lg-8">
 <form method="post" action="/dasboard/posts">
    @csrf
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
   <div class="mb-3">
    <label for="slug" class="form-label">Slug</label>
    <input type="text" class="form-control" id="slug" name="slug">
  </div>
  
  <button type="submit" class="btn btn-primary">Create Post</button>
</form>
</div>

</main>

<script>

</script>


@endsection