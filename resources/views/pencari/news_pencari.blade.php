<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
            <button class="btn-sign-out">
              <a href="/">Sign Out</a>
            </button>
          </li>
        </ul>
      </div>
    </div>
    {{-- Membuat Teks Berita Terbaru agar menarik --}}
    <div class="box-berita" style="background-image: url(/Gambar/5.png);">
      <h3 class="txt-berita">Berita Terbaru</h4>
    </div>
    {{-- Membuat Container yang nantinya berisi item dari news --}}
    <div class="container-fluid">
      {{-- Melakukan perulangan untuk menampilkan seluruh item news yang berada dalam database --}}
      @foreach ($list as $news)
      {{-- Membuat card dengan template bootstrap dengan beberapa sedikit tambahan --}}
      <div class="news-card my-5">
        <div class="d-flex news-field p-1">
          {{-- Memuat gambar news dalam database yang akan di tampilkan di halaman news --}}
          <img class="img-news" src="/Gambar/{{ $news->gambar }}" alt="" />
          {{-- Memuat judul news dalam database sesuai dengan index yang sedang di looping --}}
          <div class="mx-4">
            <h5>{{ $news->judul }}</h5>
            {{-- Memaut teks  penulis dan excerpt sesuai index yang di looping dalam database --}}
            <p><b>Penulis :</b> <i>{{ $news->penulis }}</i><br>{{ $news->excerpt }}</p>
            {{-- Membuat tombol Read Now --}}
            <a href="#" class="btn btn-primary">Read Now</a>
          </div>
        </div>
      </div>
      {{-- Selesai melakukan perulangan --}}
      @endforeach
    </div>
  </body>
</html>
