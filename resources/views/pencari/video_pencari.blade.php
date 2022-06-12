<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SobatKerja - Video</title>
    <link rel="stylesheet" href="/css/home_pencari.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
  </head>
  {{-- Melakukan setting css pada halaman register pencari --}}
  <style>
    .box-video {
      color: white;
      background-image: url("/Gambar/5.png");
      background-size: cover;
      height: 90px;
    }
    .txt-video {
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      font-weight: 500;
      color: white;
      padding-top: 33px;
      padding-left: 50px;
    }
  </style>

  <body>
    <!--Navbar Atas-->
    <div class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid px-4">
        {{-- menampilkan logo sobat kerja yang jika di klik akan nge-direct ke laman home --}}
        <a class="navbar-brand mx-4" href="/home_pencari"
          ><span class="sobat">Sobat</span><span class="kerja">Kerja</span></a
        >
        {{-- membuat item navbar --}}
        <ul class="navbar-nav justify-content-end">
          {{-- membuat tombol Home yang mengarah ke halaman home --}}
          <li class="nav-item me-4">
            <a class="nav-link" href="/home_pencari">Home</a>
          </li>
          {{-- membuat tombol Jobs yang mengarah ke halaman jobs --}}
          <li class="nav-item me-4">
            <a class="nav-link" href="/jobs_pencari">Jobs</a>
          </li>
          {{-- membuat tombol News yang mengarah ke halaman news --}}
          <li class="nav-item me-4">
            <a class="nav-link" href="/news_pencari">News</a>
          </li>
          {{-- membuat tombol Video yang mengarah ke halaman video --}}
          <li class="nav-item me-4">
            <a class="nav-link active" href="/video_pencari">Video</a>
          </li>
          {{-- membuat tombol Motivation yang mengarah ke halaman motivation --}}
          <li class="nav-item me-4">
            <a class="nav-link" href="/motivation_pencari">Motivation</a>
          </li>
          {{-- membuat tombol Your Profile yang mengarah ke halaman profile --}}
          <li class="nav-item me-4">
            <a class="nav-link" href="/your_profile">Your Profile</a>
          </li>
          {{-- membuat tombol Sign Out yang mengarah ke halaman awal website --}}
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
    {{-- Membuat Teks Video agar menarik --}}
    <div class="box-video">
      <h3 class="txt-video">Video</h4>
    </div>
    <br />
    <div class="container my-3">
      <div class="row justify-content-center">
        @foreach ($list as $video)
          <div class="col-6 pb-3">
            <iframe 
              src="https://www.youtube.com/embed/{{ $video->kode_video }}?controls=0"
              width="100%"
              height="350px"
              style="border-radius: 15px; box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;"
            ></iframe>
          </div>
        @endforeach
      </div>
    </div>

    <br /><br /><br /><br />
  </body>
</html>
https://www.youtube.com/watch?v=