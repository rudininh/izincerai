@extends('dashboard.layouts.main')

@section('container')
 
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Buat Data Izin Cerai Baru</h1>
    </div>

    

<div class="col-lg-8">
 <form method="post" action="/dashboard/posts" class="row mb-5" enctype="multipart/form-data" >
    @csrf


  <div class="mb-3">
    <label for="nama_pegawai" class="form-label">Nama Pegawai</label>
    <input type="text" class="form-control @error('nama_pegawai') is-invalid @enderror" id="nama_pegawai" name="nama_pegawai" required autofocus value="{{ old('nama_pegawai') }}">
    @error('nama_pegawai')

     <div class="invalid-feedback">
      {{ $message }}
     </div>

    @enderror
  </div>

  <div class="mb-3">
    <label for="nip_pegawai" class="form-label">NIP Pegawai</label>
    <input type="text" class="form-control @error('nip_pegawai') is-invalid @enderror" id="nip_pegawai" name="nip_pegawai" required autofocus value="{{ old('nip_pegawai') }}">
    @error('nip_pegawai')

     <div class="invalid-feedback">
      {{ $message }}
     </div>

    @enderror
  </div>

  <div class="mb-3">

    <label for="nip_pegawai" class="form-label">Pangkat/Golongan Pegawai</label>
        
    <select class="form-select" aria-label="Default select example">
      <option selected>Pangkat</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>

  </div>


  
  <div class="col-md-6">
    <label for="tempat_lahir_pegawai" class="form-label">Tempat Lahir Pegawai</label>
    <input type="text" class="form-control @error('tempat_lahir_pegawai') is-invalid @enderror" id="tempat_lahir_pegawai" name="tempat_lahir_pegawai" required autofocus value="{{ old('tempat_lahir_pegawai') }}">
    @error('tempat_lahir_pegawai')

     <div class="invalid-feedback">
      {{ $message }}
     </div>

    @enderror
  </div>
  
  <div class="col-md-6">
    <label for="tanggal_lahir_pegawai" class="form-label">Tanggal Lahir Pegawai</label>
    <input type="date" data-date-format="DD MMMM YYYY" class="form-control @error('tanggal_lahir_pegawai') is-invalid @enderror" id="tanggal_lahir_pegawai" name="tanggal_lahir_pegawai" required autofocus value="{{ old('tanggal_lahir_pegawai') }}">
    @error('tanggal_lahir_pegawai')

     <div class="invalid-feedback">
      {{ $message }}
     </div>

    @enderror
  </div>
  




   {{-- <div class="mb-3">
    <label for="slug" class="form-label">Slug</label>
    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
    @error('slug')

     <div class="invalid-feedback">
      {{ $message }}
     </div>

    @enderror
  </div> --}}
  {{-- <div class="mb-3">
    <label for="category" class="form-label">Pangkat/Gol.Ruang</label>
    <select class="form-select" name="pangkats">
      @foreach ($pangkats as $Pangkat)
      @if(old('pangkat_id') == $pangkat->id)
      <option value="{{ $pangkat->id }}" selected>{{ $pangkat->nama }}</option>
      @else
      <option value="{{ $pangkat->id }}">{{ $category->nama }}</option>
      @endif
      @endforeach
    </select>
  </div> --}}



  <div class="mb-3">
    <label for="formFile" class="form-label">Post Image</label>
    <img class="img-preview img-fluid mb-3 col-sm-5">
    <input class="form-control  @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()" >

    @error('image')
    <div class="invalid-feedback">
     {{ $message }}
    </div>
     @enderror

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

      function previewImage() {

        const input = document.querySelector('#image');
                const image = document.querySelector('.img-preview');
                
                image.style.display = 'block';
                const oFReader = new FileReader();
                oFReader.readAsDataURL(input.files[0]);

                oFReader.onload = function(oFREvent) {
                    image.src = oFREvent.target.result;
      
      }
     }
    

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