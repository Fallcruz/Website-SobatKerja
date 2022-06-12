<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SobatKerja - Jobs</title>
    <link rel="stylesheet" href="/css/detail_jobs_pencari.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
  </head>
  <body>
    {{-- Membuat Navbar --}}
    <div class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid px-4">
        {{-- Logo Website --}}
        <a class="navbar-brand mx-4" href="/home_pencari">
          <span class="sobat">Sobat</span><span class="kerja">Kerja</span>
        </a>
        {{-- Membuat menu navigasi --}}
        <ul class="navbar-nav justify-content-end">
          <li class="nav-item me-4">
            <a class="nav-link" href="/home_pencari">Home</a>
          </li>
          <li class="nav-item me-4">
            <a class="nav-link active" href="/jobs_pencari">Jobs</a>
          </li>
          <li class="nav-item me-4">
            <a class="nav-link" href="/news_pencari">News</a>
          </li>
          <li class="nav-item me-4">
            <a class="nav-link" href="/video_pencari">Video</a>
          </li>
          <li class="nav-item me-4">
            <a class="nav-link" href="/motivation_pencari">Motivation</a>
          </li>
          <li class="nav-item me-4">
            <a class="nav-link" href="/your_profile">Your Profile</a>
          </li>
          <li class="nav-item me-2">
            <form action="/signout-pencari" method="POST">
              @csrf
              <button class="btn-sign-out">
                Sign Out
              </button>
            </form>
          </li>
        </ul>
      </div>
    </div>

    <div class="box-gambar" style="background-image: url(/Gambar/6.png);">
      <h3 class="txt-lowongan">Lowongan Pekerjaan</h4>
    </div>

    <div class="col-10 container mx-auto my-4">
      <a href="/jobs_pencari">
        <img src="/Gambar/arrow-right.png" alt="" width="20px" height="20px" style="transform: rotate(180deg)">
      </a>
      <div class="d-flex justify-content-center">
        <img class="img-jobs" src="/Gambar/logo/{{ $job->gambar }}" alt="logo perusahaan">
      </div>
      <div class="my-5 mx-5">
        <p class="desc-jobs">Nama Perusahaan : <b>{{ $job->nama_perusahaan }}</b></p>
        <p class="desc-jobs">Posisi : <b>{{ $job->pekerjaan }}</b></p>
        <p class="desc-jobs">Lokasi : <b>{{ $job->lokasi }}</b></p>
        <p class="desc-jobs">Minimal Pengalaman : <b>{{ $job->pengalaman }}</b></p>
        <p class="desc-jobs">Kualifikasi : <b>{{ $job->kualifikasi }}</b></p>
        <p class="desc-jobs">Estimasi Gaji : <b>{{ $job->gaji }}</b></p>
        <p class="desc-jobs">Persyaratan : <b>{{ $job->persyaratan }}</b></p>
        <div style="height: 20px"></div>
        <a class="btn btn-view" href="">Lamar Sekarang</a>
      </div>
    </div>

    <br /><br /><br />
  </body>
</html>
