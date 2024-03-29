@extends('dashboard.layouts.main')

@section('container')
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Input Pangkat</h1>
      </div>

      @if(session()->has('success'))
      <div class="alert alert-success col-lg-6" role="alert">
        {{ session('success') }}
      </div>
      @endif

       <div class="table-responsive col-lg-6">
         <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Buat Pangkat</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Category Name</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>

            @foreach ($pangkats as $pangkat)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $pangkat->nama_pangkat }}</td>
              <td>
                  <a href="/dashboard/categories/{{ $pangkat->slug }}" class="badge bg-info" ><span data-feather="eye"></span></a>
                  <a href="/dashboard/categories/{{ $pangkat->slug }}/edit" class="badge bg-warning" ><span data-feather="edit"></span></a>
                  <form action="/dashboard/categories/{{ $pangkat->slug }}" method="post" class="d-inline">
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