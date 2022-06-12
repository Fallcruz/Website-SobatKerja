<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SobatKerja - Home</title>
    <link rel="stylesheet" href="/css/home_pencari.css" />
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
        <a class="navbar-brand mx-4" href="index.html">
          <span class="sobat">Sobat</span><span class="kerja">Kerja</span>
        </a>
        {{-- Membuat menu navigasi --}}
        <ul class="navbar-nav justify-content-end">
          <li class="nav-item me-4">
            <a class="nav-link active" href="">Home</a>
          </li>
          <li class="nav-item me-4">
            <a class="nav-link" href="/jobs_pencari">Jobs</a>
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
            {{-- membuat button sign out untuk keluar dari akun --}}
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

    {{-- Membuat section untuk rekomendasi pekerjaan --}}
    <div class="box-rekomendasi" style="background-image: url(/Gambar/4.png);">
      <div>
        <h3 class="txt-rekomendasi">Rekomendasi Pekerjaan Untuk Anda</h3>
        <div class="container col-9 mt-4" style="margin-left: 240px;">
          <div class="row">
            {{-- melakukan looping untuk mendapatkan data dari database --}}
            @php
              $count = 0
            @endphp
            @foreach ($listJobs as $lists)
              {{-- melakukan pengkondisian jika nama pekerjaan = Software Engineer maka akan di tampilkan --}}
              @if ($lists->pekerjaan == auth('pencari')->user()->skill )
              @php
                $count++
              @endphp
              {{-- membuat card yang berisi data lowongan pekerjaan --}}
              <div class="col-5" style="background-color: rgba(255, 255, 255, 0.902); width: 420px; height: 200px; border-radius: 20px">
                <div class="row h-100">
                  <div class="col-5 text-center my-auto">
                    <img src="/Gambar/logo/{{ $lists->gambar }}" width="120px">
                  </div>
                  <div class="col-7 align-self-center" style="padding-left: 5px;">
                    <h5><a href="" class="text-decoration-none" style="color: black">{{ $lists->pekerjaan }}</a></h5>
                    <p class="desc-jobs" style="margin: 0;">Company : <span class="cardField">{{ $lists->nama_perusahaan }}</span></p>
                    <p class="desc-jobs">Location : <span class="cardField">{{ $lists->lokasi }}</span></p>
                  </div>
                </div>
              </div>
              <div class="col-1" style="width: 20px"></div>
              @endif
            @endforeach

            @if ($count == 0 )
              @foreach ($listJobs as $lists)
                {{-- melakukan pengkondisian jika nama pekerjaan = Software Engineer maka akan di tampilkan --}}
                @if ($lists->pekerjaan == "Software Engineer" )
                {{-- membuat card yang berisi data lowongan pekerjaan --}}
                <div class="col-5" style="background-color: rgba(255, 255, 255, 0.902); width: 420px; height: 200px; border-radius: 20px">
                  <div class="row h-100">
                    <div class="col-5 text-center my-auto">
                      <img src="/Gambar/logo/{{ $lists->gambar }}" width="120px">
                    </div>
                    <div class="col-7 align-self-center" style="padding-left: 5px;">
                      <h5><a href="" class="text-decoration-none" style="color: black">{{ $lists->pekerjaan }}</a></h5>
                      <p class="desc-jobs" style="margin: 0;">Company : <span class="cardField">{{ $lists->nama_perusahaan }}</span></p>
                      <p class="desc-jobs">Location : <span class="cardField">{{ $lists->lokasi }}</span></p>
                    </div>
                  </div>
                </div>
                <div class="col-1" style="width: 20px"></div>
                @endif
              @endforeach
            @endif
          </div>
        </div>
      </div>
    </div>
    <br/>

    {{-- Membuat section untuk lowongan pekerjaan terbaru --}}
    <h4 class="content">Lowongan Pekerjaan Terbaru</h4>
    <div class="container my-4">
      <div class="row">
        {{-- melakukan looping sebanyak 3 kali untuk mendapatkan data dari database --}}
        @for ($i = 0; $i < 3; $i++)
        <div class="col-3 cardJob me-4">
          <div class="container py-3 text-center" style="height: 200px">
            <img src="/Gambar/logo/{{ $listJobs[$i]->gambar }}" alt="" width="85%">
          </div>
          <div class="container px-2">
            <h5>{{ $listJobs[$i]->pekerjaan }}</h5>
            <div class="row d-flex justify-content-between">
              <div class="col-10 ps-3">
                <p style="color: rgb(120, 120, 120)">{{ $listJobs[$i]->nama_perusahaan }}</p>
              </div>
              <div class="col-2 text-end">
                <a href="/jobs_pencari/{{ $listJobs[$i]->id }}">
                  <img src="/Gambar/arrow-right.png" alt="" width="75%">
                </a>
              </div>
            </div>
          </div>
        </div>
        @endfor
      </div>
    </div>
    <br/>

    {{-- Membuat section untuk Berita terbaru --}}
    <h4 class="content">Berita Terbaru</h4>
    <div class="container my-4">
      <div class="row">
        @for ($i = 0; $i < 2; $i++)
        <div class="col-5 cardNews px-0 me-4">
          <div class="container text-center px-0">
            <img src="/Gambar/{{ $listNews[$i]->gambar }}" alt="" width="100%">
          </div>
          <div class="container px-3 py-3">
            <h5>{{ $listNews[$i]->judul }}</h5>
            <div class="row d-flex justify-content-between">
              <div class="col-10 d-flex align-items-center my-2">
                <img class="me-3" src="/Gambar/time.png" alt="" width="20px" height="20px">
                <p class="m-0" style="color: rgb(120, 120, 120)">{{ $listNews[$i]->created_at }}</p>
              </div>
              <div class="col-2 text-center align-self-center">
                <a href="/news_pencari/{{ $listNews[$i]->id }}">
                  <img src="/Gambar/arrow-right.png" alt="" width="32%">
                </a>
              </div>
            </div>
          </div>
        </div>
        @endfor
      </div>
    </div>
    
    <br /><br /><br /><br />
  </body>
</html>
