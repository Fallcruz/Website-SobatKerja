<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SobatKerja - Profil Perusahaan</title>
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
            <a class="nav-link active" href="/home_penyedia">Your Profile</a>
          </li>
          <li class="nav-item me-4">
            <a class="nav-link" href="/input_lowongan">Input Lowongan</a>
          </li>
          <li class="nav-item me-4">
            <a class="nav-link" href="/daftar_pelamar">Daftar Pelamar</a>
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
      <h3 class="txt-profile">Your Profile</h4>
    </div>
    <div class="container col-3 mx-auto mt-4 text-center" style="width: 250px">
      <img class="picProfile" src="/Gambar/modernland.png" width="100%">
    </div>
    <h3 class="mt-3 text-center">Modernland Indonesia</h3>

    <div class="container col-lg-6 mx-auto mt-5"> 
      <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-2">
          <label class="col-3 col-form-label text-end">Nama Perusahaan</label>
          <div class="col-8 px-0">
            <input 
              type="text" 
              class="form-control px-3"
              name="nama" 
              id="nama"
              placeholder="Modernland Indonesia"
              value="{{ old('nama') }}"
              style="border-radius: 20px;"
            />
          </div>
          <div class="col-1 py-1">
            <a href="">
              <img src="/Gambar/logo-edit.png" alt="" width="80%">
            </a>
          </div>
        </div>
        <div class="row mb-2">
          <label class="col-3 col-form-label text-end">Lokasi Perusahaan</label>
          <div class="col-8 px-0">
            <input 
              type="text" 
              class="form-control px-3"
              name="lokasi" 
              id="lokasi"
              placeholder="Jakarta Utara"
              value="{{ old('lokasi') }}"
              style="border-radius: 20px;"
            />
          </div>
          <div class="col-1 py-1">
            <a href="">
              <img class="text-end" src="/Gambar/logo-edit.png" alt="" width="80%">
            </a>
          </div>
        </div>
        <div class="row mb-2">
          <label class="col-3 col-form-label text-end">Email Perusahaan</label>
          <div class="col-8 px-0">
            <input 
              type="email" 
              class="form-control px-3"
              name="email" 
              id="email"
              placeholder="admin@gmail.com"
              value="{{ old('email') }}"
              style="border-radius: 20px;"
            />
          </div>
          <div class="col-1 py-1">
            <a href="">
              <img class="text-end" src="/Gambar/logo-edit.png" alt="" width="80%">
            </a>
          </div>
        </div>
        <div class="row mb-2">
          <label class="col-3 col-form-label text-end">Password</label>
          <div class="col-8 px-0">
            <input 
              type="password" 
              class="form-control px-3"
              name="password" 
              id="password"
              placeholder="admin"
              value="{{ old('password') }}"
              style="border-radius: 20px;"
            />
          </div>
          <div class="col-1 py-1">
            <a href="">
              <img class="text-end" src="/Gambar/logo-edit.png" alt="" width="80%">
            </a>
          </div>
        </div>
        
        <div class="row">
          <div class="col-12 text-center mt-3">
            <button class="btn btn-simpan" type="submit">Simpan</button>
          </div>
        </div>
      </form>
    </div>
    <br><br><br>
  </body>
</html>
