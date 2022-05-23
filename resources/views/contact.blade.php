{{-- 
  Tujuan Kode: Membuat tampilan halaman contact website SobatKerja
  Deskripsi:
  Halaman ini berisi informasi-informasi contact yang dapat dihubungi
--}}


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>SobatKerja</title>
    <link rel="stylesheet" href="css/about.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
  </head>
  <body>
    {{-- Navbar --}}
    <div class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid px-4">
        {{-- Tombol Untuk Kembali Ke Halaman Utama (Home) --}}
        <a class="navbar-brand mx-4" href="/"
          ><span class="sobat">Sobat</span><span class="kerja">Kerja</span></a
        >
        <ul class="navbar-nav justify-content-end">
          <li class="nav-item me-4">
            {{-- Tombol Untuk Kembali Ke Halaman Utama (Home) --}}
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item me-4">
            {{-- Tombol Untuk Menuju Halaman About --}}
            <a class="nav-link" href="/about">About</a>
          </li>
          <li class="nav-item me-4">
            {{-- Tombol Untuk Menuju Halaman Contact --}}
            <a class="nav-link active" href="/contact">Contact</a>
          </li>
          <li class="nav-item me-3">
            {{-- Tombol Untuk Menuju Halaman Login Pencari Kerja --}}
            <button class="btn-pencari" type="button">
              <a href="/login_pencari">Pencari</a>
            </button>
          </li>
          <li class="nav-item me-2">
            {{-- Tombol Untuk Menuju Halaman Login Penyedia Kerja --}}
            <button class="btn-penyedia" type="button">
              <a href="/login_penyedia">Penyedia</a>
            </button>
          </li>
        </ul>
      </div>
    </div>

    {{-- Container Contact --}}
    <div class="container col-lg-8 mx-auto headline-about">
      <div class="row">
        <div class="col-8">
          <div class="garis-biru"></div>
          {{-- Header Contact --}}
          <h3 class="judul-about">CONTACT</h3>
          {{-- Deskripsi Contact --}}
          <p class="desc-about" style="margin-bottom: 0">Jika anda mempunyai keluhan terhadap website kami baik itu kesalahan fitur atau menu ataupun performa website yang kurang baik, anda bisa mengkontak kami lewat list kontak yang tersedia dibawah ini.</p>

          {{-- List Contact Yang Bisa Dihubungi --}}
          <ul class="desc-about">
            <li>Admin 1 - Rafly Rhamadhan : <a href="">rafly@gmail.com</a></li>
            <li>Admin 2 - Kadek Rizky Fransisca Putra : <a href="">kadekrizky@gmail.com</a></li>
            <li>Admin 3 - I Made Krishna Vrindavana   : <a href="">krishna@gmail.com</a></li>
          </ul>
        </div>
        <div class="col-4 my-auto">
          <img src="Gambar/contact.png" width="280px" />
        </div>
      </div>
    </div>
  </body>
</html>
