@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-4"> 

    @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
       {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>       
    @endif

    @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
       {{ session('loginError') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>       
    @endif


        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center">Login dulu Say...</h1>
            <form action="/login" method="post">
              @csrf
              <div class="form-floating">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control @error  ('email') is-invalid @enderror" id="email" placeholder="sayang@gmail.com" autofocus required value="{{ old('email') }}">
                @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <label for="password">Password</label>

              <div class="form-floating">

                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
              </div>
          
              <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>

            </form>
            <small class="d-block text-center mt-3">Belum daftar? <a href="/register">Register Sekarang!</a></small>
        </main>
    </div>
</div>

@endsection