<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SobatKerja - Your Profil</title>
    <link rel="stylesheet" href="/css/profil_pencari.css" />
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
        <a class="navbar-brand mx-4" href="/home_pencari">
          <span class="sobat">Sobat</span><span class="kerja">Kerja</span>
        </a>

        {{-- Membuat menu navigasi --}}
        <ul class="navbar-nav justify-content-end">
          <li class="nav-item me-4">
            <a class="nav-link" href="/home_pencari">Home</a>
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
            <a class="nav-link active" href="/your_profile">Your Profile</a>
          </li>
          <li class="nav-item me-2">
            {{-- membuat button sign out untuk keluar dari akun --}}
            <button class="btn-sign-out">
              <a href="/">Sign Out</a>
            </button>
          </li>
        </ul>
      </div>
    </div>


    <div class="box-profile" style="background-image: url(/Gambar/5.png);">
      <h3 class="txt-profile">Your Profile</h4>
    </div>

    {{-- Membuat profile picture user --}}
    <div class="container mx-auto mt-3 text-center">
      <img src="/Gambar/pic-profile.png" width="200px">
      <h3 class="mt-3">Fulan</h3>
    </div>

    {{-- Membuat form yang menampung data dari akun user untuk ditampilkan dan dapat di edit sesuai keinginan --}}
    <div class="container col-lg-6 mx-auto mt-5"> 
      <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-2">
          <label class="col-2 col-form-label text-end">Nama</label>
          <div class="col-9 px-0">
            <input 
              type="text" 
              class="form-control px-3"
              name="nama" 
              id="nama"
              placeholder="Rizky"
              required value="{{ old('nama') }}"
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
          <label class="col-2 col-form-label text-end">No Telepon</label>
          <div class="col-9 px-0">
            <input 
              type="text" 
              class="form-control px-3"
              name="telepon" 
              id="telepon"
              placeholder="081210101010"
              required value="{{ old('telepon') }}"
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
          <label class="col-2 col-form-label text-end">Skill</label>
          <div class="col-9 px-0">
            <input 
              type="text" 
              class="form-control px-3"
              name="skill" 
              id="skill"
              placeholder="Software Engineer"
              required value="{{ old('skill') }}"
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
          <label class="col-2 col-form-label text-end">Email</label>
          <div class="col-9 px-0">
            <input 
              type="email" 
              class="form-control px-3"
              name="email" 
              id="email"
              placeholder="admin@gmail.com"
              required value="{{ old('email') }}"
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
          <label class="col-2 col-form-label text-end">Password</label>
          <div class="col-9 px-0">
            <input 
              type="password" 
              class="form-control px-3"
              name="password" 
              id="password"
              placeholder="admin"
              required value="{{ old('password') }}"
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
