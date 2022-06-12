<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SobatKerja - Jobs</title>
    <link rel="stylesheet" href="/css/applied.css" />
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
            <a class="nav-link" href="/jobs_pencari">Jobs</a>
          </li>
          <li class="nav-item me-4">
            <a class="nav-link active" href="/pencari/list-lowongan">Applied</a>
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

    {{-- Membuat section untuk pencarian lowongan pekerjaan --}}
    <div class="box-pencarian" style="background-image: url(/Gambar/6.png);">
      <h3 class="txt-pencarian">Applied Lowongan</h3>
    </div>

    {{-- Membuat section untuk daftar lowongan pekerjaan --}}
    <div class="container mt-5">
      <div class="row">
        {{-- melakukan looping untuk mendapatkan data dari database --}}
        @foreach ($lowongans as $lowongan)
          <div class="col-5 mb-4">
            <div class="d-flex job-field p-3">
              <img class="img-jobs" src="/Gambar/logo/{{ $lowongan->gambar }}" alt="logo perusahaan">
              <div class="align-self-center py-2" style="margin-left: 35px;">
                  <h5>{{ $lowongan->pekerjaan }}</h5>
                  <p class="desc-jobs" style="margin: 0;">Company : {{ $lowongan->nama_perusahaan }}</p>
                  <p class="desc-jobs">Location : {{ $lowongan->lokasi }}</p>
                  <a class="btn btn-view" href="/pencari/list-lowongan/{{ $lowongan->id }}">View</a>
              </div>
            </div>
          </div>
          <div class="col-1" style="width: 30px"></div>
        @endforeach
      </div>
    </div>
    
    <br /><br /><br />
  </body>
</html>
