<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SobatKerja - Motivation</title>
    <link rel="stylesheet" href="/css/motivation_pencari.css" />
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
            <a class="nav-link" href="/video_pencari">Video</a>
          </li>
          {{-- membuat tombol Motivation yang mengarah ke halaman motivation --}}
          <li class="nav-item me-4">
            <a class="nav-link active" href="/motivation_pencari">Motivation</a>
          </li>
          {{-- membuat tombol Your Profile yang mengarah ke halaman profile --}}
          <li class="nav-item me-4">
            <a class="nav-link" href="/your_profile">Your Profile</a>
          </li>
          {{-- membuat tombol Sign Out yang mengarah ke halaman awal website --}}
          <li class="nav-item me-2">
            <button class="btn-sign-out">
              <a href="/">Sign Out</a>
            </button>
          </li>
        </ul>
      </div>
    </div>
    {{-- Membuat Teks Motivation agar menarik --}}
    <div class="box-motivasi" style="background-image: url(/Gambar/5.png);">
      <h3 class="txt-motivasi">Motivation</h4>
    </div>
    {{-- Membuat container dan row untuk menampilkan kata kata motivasi --}}
    <div class="container col-10 mx-auto my-4">
      <div class="row d-flex justify-content-center align-items-center">
        {{-- Membuat gambar motivasi pertama --}}
        <div class="col-6 mb-4">
          <img class="img-motivasi" src="/Gambar/img-motivation-1.png" alt="" width="100%"/>
        </div>
        {{-- Membuat gambar motivasi kedua --}}
        <div class="col-6 mb-4">
          <img class="img-motivasi" src="/Gambar/img-motivation-2.png" alt="" width="100%"/>
        </div>
        {{-- Membuat gambar motivasi ketiga --}}
        <div class="col-6 mb-4">
          <img class="img-motivasi" src="/Gambar/img-motivation-4.png" alt="" width="100%"/>
        </div>
        {{-- Membuat gambar motivasi keempat --}}
        <div class="col-6 mb-4">
          <img class="img-motivasi" src="/Gambar/img-motivation-5.png" alt="" width="100%"/>
        </div>
      </div>
    </div>
  </body>
</html>
