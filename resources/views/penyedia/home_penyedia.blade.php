<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SobatKerja - Profil Perusahaan</title>
    <link rel="stylesheet" href="/css/profil_penyedia.css" />
    <link rel="stylesheet" href="/css/profil_pencari.css" />
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
      <h3 class="txt-profile">Your Profile</h4>
    </div>

    {{-- Membuat profile picture user --}}
    <div class="container mx-auto mt-3 text-center">
      <img src="/Gambar/pic-company.png" width="200px">
      <h2 class="mt-3" style="font-weight: 600;">{{ auth('penyedia')->user()->company_name }}</h2>
    </div>

    {{-- Membuat form yang menampung data dari akun user untuk ditampilkan dan dapat di edit sesuai keinginan --}}
    <div class="container col-lg-7 mx-auto mt-4"> 
      <form action="/update_penyedia/{{ auth()->user()->id }}" method="POST" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <div class="row">
          <div class="col-10">
            {{-- Field Nama --}}
            <div class="row my-2">
              <label class="col-4 col-form-label text-end">Nama Perusahaan</label>
              <div class="col-8 px-0">
                <input 
                  type="text" 
                  class="form-control px-3"
                  name="company_name" 
                  id="company_name"
                  placeholder="Fulan"
                  readonly value="{{ auth('penyedia')->user()->company_name }}"
                  style="border-radius: 20px;"
                />
              </div>
            </div>
            {{-- Field No Telepon --}}
            <div class="row my-2">
              <label class="col-4 col-form-label text-end">Lokasi Perusahaan</label>
              <div class="col-8 px-0">
                <input 
                  type="text" 
                  class="form-control px-3"
                  name="location" 
                  id="location"
                  readonly value="{{ auth('penyedia')->user()->location }}"
                  style="border-radius: 20px;"
                />
              </div>
            </div>
            {{-- Field Email --}}
            <div class="row my-2">
              <label class="col-4 col-form-label text-end">Email Perusahaan</label>
              <div class="col-8 px-0">
                <input 
                  type="email" 
                  class="form-control px-3"
                  name="email" 
                  id="email"
                  readonly value="{{ auth('penyedia')->user()->email }}"
                  style="border-radius: 20px;"
                />
              </div>
            </div>
          </div>

          {{-- Button Edit --}}
          <div class="col-2 py-1 align-self-center">
            <a class="btnEdit" onclick="namaSetReadonly()">
              <img src="/Gambar/logo-edit-circle.png" alt="" width="50%">
            </a>
          </div>
        </div>

        {{-- Button Simpan --}}
        <div class="row mt-4">
          <div class="col-12 text-center">
            <button class="btn btn-simpan" type="submit">Simpan</button>
          </div>
        </div>
      </form>
    </div>

    <br><br><br>

    <script>
      var click = 0;
      function namaSetReadonly() {
        if (click % 2 == 0){
          document.getElementById("company_name").readOnly = false;
          document.getElementById("location").readOnly = false;
          document.getElementById("email").readOnly = false;
          click += 1;
        }
        else if (click % 2 == 1) {
          document.getElementById("company_name").readOnly = true;
          document.getElementById("location").readOnly = true;
          document.getElementById("email").readOnly = true;
          click += 1;
        }
      }
    </script>
  </body>
</html>
