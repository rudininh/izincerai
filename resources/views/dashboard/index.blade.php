@extends('dashboard.layouts.main')

@section('container')


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">


  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Selamat Datang, {{ auth()->user()->name }}</h1>
      </div>

      <div class="small-box bg-info">
        <div class="inner">
          <h3>30</h3>
          <p>Jumlah Izin Cerai 2022</p>
        </div>
        <div class="icon">
          <i class="fas fa-shopping-cart"></i>
        </div>
        <a href="#" class="small-box-footer">
          More info <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>





   </main>
@endsection