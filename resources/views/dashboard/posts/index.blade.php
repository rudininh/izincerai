@extends('dashboard.layouts.main')

@section('container')
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Izin Cerai</h1>
      </div>

      @if(session()->has('success'))
      <div class="alert alert-success col-lg-8" role="alert">
        {{ session('success') }}
      </div>
      @endif

       <div class="table-responsive col-lg-8">
         <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Buat Data Baru</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">NIP</th>
              <th scope="col">JAbatan methor</th>
            </tr>
          </thead>
          <tbody>

            @foreach ($posts as $post)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $post->title }}</td>
              <td>{{ $post->category->name }}</td>
              <td>
                  <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info" ><span data-feather="eye"></span></a>
                  <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning" ><span data-feather="edit"></span></a>
                  <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
                  </form>

              </td>
            </tr>
            @endforeach

          </tbody>
        </table>
      </div>
      
   </main>

   
@endsection