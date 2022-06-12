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

    <br><br><br>
  </body>
</html>
