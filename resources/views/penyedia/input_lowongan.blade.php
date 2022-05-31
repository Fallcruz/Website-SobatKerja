<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta
      name="author"
      content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
    />
    <meta name="generator" content="Hugo 0.88.1" />
    <title>SobatKerja - Input Lowongan</title>

    <link rel="stylesheet" href="/css/index.css" />
    <link rel="stylesheet" href="/css/home_pencari.css" />

    <!-- Bootstrap core CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="/css/signin.css" rel="stylesheet" />
  </head>
  <body class="text-center">
    <!--Navbar Atas-->
    <div class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid px-4">
        <a class="navbar-brand mx-4" href="index.html"
          ><span class="sobat">Sobat</span><span class="kerja">Kerja</span></a
        >
        <ul class="navbar-nav justify-content-end">
          <li class="nav-item me-4">
            <a class="nav-link" href="/home_penyedia">Your Profile</a>
          </li>
          <li class="nav-item me-4">
            <a class="nav-link active" href="/input_lowongan">Input Lowongan</a>
          </li>
          <li class="nav-item me-4">
            <a class="nav-link" href="/daftar_pelamar">Daftar Pelamar</a>
          </li>
          <li class="nav-item me-2">
            <form action="/signout_penyedia" method="POST">
              @csrf
              <button class="btn-sign-out">
                Sign Out
              </button>
            </form>
          </li>
        </ul>
      </div>
    </div>
    <main class="form-signin">
      <form action="/input_lowongan" method="POST" enctype="multipart/form-data">
        @csrf
        <span class="sobat">Sobat</span><span class="kerja">Kerja</span>
        <h1 class="h3 mb-3 fw-normal">Masukkan Data Pekerjaan</h1>
        @if(session()->has('success'))
        <div class="alert alert-success mt-3" role="alert">
          {{ session('success') }}
        </div>
        @endif
        <div class="form-floating">
          <input
            type="text"
            class="form-control"
            name="pekerjaan"
            id="pekerjaan"
            placeholder="contoh: Software Engineer"
          />
          <label for="pekerjaan">Pekerjaan</label>
        </div>

        <div class="form-floating">
          <input
            type="text"
            class="form-control"
            name="nama_perusahaan"
            id="nama_perusahaan"
            placeholder="contoh: Golek"
          />
          <label for="nama_perusahaan">Nama Perusahaan</label>
        </div>

        <div class="form-floating">
          <input
            type="text"
            class="form-control"
            name="lokasi"
            id="lokasi"
            placeholder="contoh: Bekasi"
          />
          <label for="lokasi">Lokasi</label>
        </div>

        <div class="form-floating">
          <input
            type="text"
            class="form-control"
            name="pengalaman"
            id="pengalaman"
            placeholder="contoh: 1 Tahun"
          />
          <label for="pengalaman">Pengalaman Kerja</label>
        </div>

        <div class="form-floating">
          <input
            type="text"
            class="form-control"
            name="kualifikasi"
            id="kualifikasi"
            placeholder="contoh: Sarjana (S1)"
          />
          <label for="kualifikasi">Kualifikasi</label>
        </div>

        <div class="form-floating">
          <input
            type="text"
            class="form-control"
            name="gaji"
            id="gaji"
            placeholder="contoh: 40000000"
          />
          <label for="gaji">Gaji</label>
        </div>

        <div class="form-floating">
          <textarea
            class="form-control"
            placeholder="Leave a comment here"
            name="persyaratan"
            id="persyaratan"
            style="height: 100px;"
          ></textarea>
          <label for="persyaratan">Persyaratan</label>
        </div>

        <div class="container text-start pt-3" style="border: 1px solid rgb(202, 202, 202); border-radius: 4px">
          <label class="mb-2" for="gambar">Gambar</label>
          <div class="col-sm-10">
            <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar" id="gambar" onchange="previewImage()"/>
            <img class="img-preview img-fluid my-3 col-sm-5">
            @error('gambar')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">
          Input Lowongan Pekerjaan
        </button>
      </form>
    </main>

    <script>
      function previewImage(){
        const image = document.querySelector('#gambar')
        const imgPreview = document.querySelector('.img-preview')

        imgPreview.style.display = 'block'

        const oFReader = new FileReader()
        oFReader.readAsDataURL(image.files[0])

        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result
        }
      }
    </script>
  </body>
</html>
