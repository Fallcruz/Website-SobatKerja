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
    <!--Navbar Atas-->
    <div class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid px-4">
        <a class="navbar-brand mx-4" href="index.html"
          ><span class="sobat">Sobat</span><span class="kerja">Kerja</span></a
        >
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
            <button class="btn-sign-out">
              <a href="/">Sign Out</a>
            </button>
          </li>
        </ul>
      </div>
    </div>
    <div class="box-rekomendasi" style="background-image: url(/Gambar/4.png);">
      <div>
        <h3 class="txt-rekomendasi">Rekomendasi Pekerjaan Untuk Anda</h3>
        {{-- <img src="/Gambar/req-job2.png" alt="" /> --}}
        <div class="container col-9 mt-4" style="margin-left: 240px;">
          <div class="row">
            @foreach ($list as $lists)
              @if ($lists->pekerjaan == "Software Engineer")
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
          </div>
        </div>
      </div>
    </div>
    <br />
    <h4 class="content">Lowongan Pekerjaan Terbaru</h4>
    <div class="container col-12 my-4">
      <div class="row">
        @for ($i = 0; $i < 3; $i++)
        <div class="col-3 cardJob me-4">
          <div class="container py-3 text-center" style="height: 200px">
            <img src="/Gambar/logo/{{ $list[$i]->gambar }}" alt="" width="85%">
          </div>
          <div class="container px-2">
            <h5 class="">{{ $list[$i]->pekerjaan }}</h5>
            <div class="row d-flex justify-content-between">
              <div class="col-10 ps-3">
                <p class="" style="color: rgb(120, 120, 120)">{{ $list[$i]->nama_perusahaan }}</p>
              </div>
              <div class="col-2 text-end">
                <a href="">
                  <img src="/Gambar/arrow-right.png" alt="" width="75%">
                </a>
              </div>
            </div>
          </div>
        </div>
        @endfor
      </div>
    </div>
    <br />
    <h4 class="content">Berita Terbaru</h4>
    <div class="list-rec-news">
      <ul>
        <li>
          <img src="/Gambar/news1.png" alt="" />
        </li>
        <li>
          <img src="/Gambar/news2.png" alt="" />
        </li>
        <li>
          <img src="/Gambar/news3.png" alt="" />
        </li>
        <li>
          <img src="/Gambar/news4.png" alt="" />
        </li>
      </ul>
    </div>
    <br /><br /><br /><br /><br /><br /><br />
  </body>
</html>
