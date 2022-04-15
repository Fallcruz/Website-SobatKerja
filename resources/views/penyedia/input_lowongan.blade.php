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
    <title>Input Lowongan</title>

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
            <a class="nav-link" href="">Daftar Pelamar</a>
          </li>
          <li class="nav-item me-2">
            <button class="btn-sign-out">
              <a href="/">Sign Out</a>
            </button>
          </li>
        </ul>
      </div>
    </div>
    <main class="form-signin">
      <form>
        <span class="sobat">Sobat</span><span class="kerja">Kerja</span>
        <h1 class="h3 mb-3 fw-normal">Masukkan Data Pekerjaan</h1>

        <div class="form-floating">
          <input
            type="text"
            class="form-control"
            id="floatingInput"
            placeholder="contoh: Software Engineer"
          />
          <label for="floatingInput">Pekerjaan</label>
        </div>

        <div class="form-floating">
          <input
            type="text"
            class="form-control"
            id="floatingInput"
            placeholder="contoh: Golek"
          />
          <label for="floatingInput">Nama Perusahaan</label>
        </div>

        <div class="form-floating">
          <input
            type="text"
            class="form-control"
            id="floatingInput"
            placeholder="contoh: Bekasi"
          />
          <label for="floatingInput">Lokasi</label>
        </div>

        <div class="form-floating">
          <input
            type="text"
            class="form-control"
            id="floatingInput"
            placeholder="contoh: 1 Tahun"
          />
          <label for="floatingInput">Pengalaman Kerja</label>
        </div>

        <div class="form-floating">
          <input
            type="text"
            class="form-control"
            id="floatingInput"
            placeholder="contoh: Sarjana (S1)"
          />
          <label for="floatingInput">Kualifikasi</label>
        </div>

        <div class="form-floating">
          <input
            type="text"
            class="form-control"
            id="floatingInput"
            placeholder="contoh: 40000000"
          />
          <label for="floatingInput">Gaji</label>
        </div>

        <div class="form-floating">
          <textarea
            class="form-control"
            placeholder="Leave a comment here"
            id="floatingTextarea2"
            style="height: 100px;"
          ></textarea>
          <label for="floatingTextarea2">Persyaratan</label>
        </div>

        <a href="penyedia.html" class="w-100 btn btn-lg btn-primary">
          Input Lowongan Pekerjaan
        </a>
      </form>
    </main>
  </body>
</html>
