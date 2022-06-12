<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SobatKerja - News Detail</title>
    <title>SobatKerja - News</title>
    <link rel="stylesheet" href="/css/news_pencari.css" />
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
              <a class="nav-link active" href="/news_pencari">News</a>
            </li>
            {{-- membuat tombol Video yang mengarah ke halaman video --}}
            <li class="nav-item me-4">
              <a class="nav-link" href="/video_pencari">Video</a>
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
      {{-- Membuat Teks Berita Terbaru agar menarik --}}
      <div class="box-berita" style="background-image: url(/Gambar/5.png);">
        <h3 class="txt-berita">Berita Terbaru</h4>
      </div>
      <div class="col-9 mx-auto mt-3">
        <a href="/news_pencari">
          <img src="/Gambar/arrow-right.png" alt="" width="20px" height="20px" style="transform: rotate(180deg)">
        </a>
      </div>
      <div class="d-flex justify-content-center mx-auto my-4">
        <img src="/Gambar/{{ $new->gambar }}" alt="" width="600px" height="300px" style="object-fit:cover">
      </div>
      <div class="col-9 mt-4 mb-5 title-home-1 mx-auto">
        <h3 class="mb-4">{{ $new->judul }}</h3>
        <h5><i>Penulis : {{ $new->penulis }}</i></h5>
        <p>{!! $new->deskripsi !!}</p>
      </div>
</body>
</html>