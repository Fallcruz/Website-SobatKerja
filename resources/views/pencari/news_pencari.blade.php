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
        <a class="navbar-brand mx-4" href="/"
          ><span class="sobat">Sobat</span><span class="kerja">Kerja</span></a
        >
        <ul class="navbar-nav justify-content-end">
          <li class="nav-item me-4">
            <a class="nav-link" href="/home_pencari">Home</a>
          </li>
          <li class="nav-item me-4">
            <a class="nav-link" href="/jobs_pencari">Jobs</a>
          </li>
          <li class="nav-item me-4">
            <a class="nav-link active" href="/news_pencari">News</a>
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
    <div class="box-berita" style="background-image: url(/Gambar/5.png);">
      <h3 class="txt-berita">Berita Terbaru</h4>
    </div>
    <div class="container-fluid">
      @foreach ($list as $news)
      <div class="news-card my-5">
        <div class="d-flex news-field p-1">
          <img class="img-news" src="/Gambar/{{ $news->gambar }}" alt="" />
          <div class="mx-4">
            <h5>{{ $news->judul }}</h5>
            <p><b>Penulis :</b> <i>{{ $news->penulis }}</i><br>{{ $news->excerpt }}</p>
            <a href="#" class="btn btn-primary">Read Now</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </body>
</html>
