{{-- 
  Tujuan Kode: Membuat tampilan halaman awal dari website SobatKerja
  Deskripsi:
  Halaman ini merupakan halaman awal ketika pengguna mengakses website SobatKerja
--}}

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>SobatKerja</title>
    <link rel="stylesheet" href="css/index.css" />
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
            <a class="nav-link active" href="/">Home</a>
          </li>
          <li class="nav-item me-4">
            {{-- Tombol Untuk Menuju Halaman About --}}
            <a class="nav-link" href="/about">About</a>
          </li>
          <li class="nav-item me-4">
            {{-- Tombol Untuk Menuju Halaman Contact --}}
            <a class="nav-link" href="/contact">Contact</a>
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
    <div class="container col-lg-8 mx-auto headline-home">
      <div class="row">
        <div class="col-7">
          <div class="garis-biru"></div>
          {{-- Header --}}
          <h3 class="judul-home">TEMPAT DIMANA KAMU MENGEMBANGKAN KARIR</h3>

          {{-- Deskripsi Home --}}
          <p class="desc-home">
            Ambil keputusan terbaik kamu dan bangun karir impianmu, kamu dapat
            mencari pekerjaan yang sesuai dengan skill yang kamu kuasai
          </p>

          {{-- Tombol Untuk Menuju Ke Halaman Registrasi Pencari Kerja --}}
          <button type="button" class="btn-about px-3 py-2">
            <a href="/register_pencari" style="color: white; text-decoration: none; font-size: 18px">
              Register
            </a>
          </button>
        </div>
        <div class="col-4 my-auto">
          <img src="Gambar/uwu1.png" width="280px" />
        </div>
      </div>
    </div>
  </body>
</html>
