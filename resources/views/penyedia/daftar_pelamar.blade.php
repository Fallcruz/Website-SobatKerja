<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SobatKerja - Daftar Pelamar</title>
    <link rel="stylesheet" href="/css/profil_penyedia.css" />
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
            <a class="nav-link" href="/home_penyedia">Your Profile</a>
          </li>
          <li class="nav-item me-4">
            <a class="nav-link" href="/input_lowongan">Input Lowongan</a>
          </li>
          <li class="nav-item me-4">
            <a class="nav-link active" href="/daftar_pelamar">Daftar Pelamar</a>
          </li>
          <li class="nav-item me-4">
            <a class="nav-link" href="/penyedia/list-lowongan">Daftar Lowongan</a>
          </li>
          <li class="nav-item me-2">
            <form action="/signout_penyedia" method="POST">
              @csrf
              <button class="btn-sign-out">
                Sign Out
              </button>
            </form>
          </li>
        </ul>
      </div>
    </div>

    <div class="box-profile" style="background-image: url(/Gambar/5.png);">
      <h3 class="txt-profile">Daftar Pelamar</h4>
    </div>
    <div class="container my-4">
      <div class="row">
        @foreach ($pelamars as $pelamar)
          <div class="col-3 cardJob me-4">
            <div class="container py-3 text-center" style="height: 200px">
              <img src="/Gambar/pic-profile-avatar.png" alt="" width="85%">
            </div>
            <div class="container px-2">
              <h5>{{ $pelamar->name }}</h5>
              <div class="row d-flex justify-content-between">
                <div class="col-10 ps-3">
                  <p style="color: rgb(120, 120, 120)">{{ $pelamar->email }}</p>
                </div>
                <div class="col-2 text-end">
                  <a href="/jobs_pencari/{{ $pelamar->skill }}">
                    <img src="/Gambar/arrow-right.png" alt="" width="75%">
                  </a>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
    <br><br><br>
  </body>
</html>
