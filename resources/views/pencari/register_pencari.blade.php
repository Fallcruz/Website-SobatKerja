<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta
      name="author"
      content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
    />
    <meta name="generator" content="Hugo 0.88.1" />
    <title>SobatKerja - Register Pencari Kerja</title>
    {{-- Pengkoneksian file css --}}
    <link rel="stylesheet" href="/css/index.css" />

    <!-- Bootstrap core CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    {{-- Melakukan setting css pada halaman register pencari --}}
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="/css/signin.css" rel="stylesheet" />
  </head>
  {{-- Membuat form register untuk pengisian data pencari --}}
  <body class="text-center">
    <main class="form-signin">
      <form>
        {{-- Menampilkan teks sobat kerja dan please register --}}
        <span class="sobat">Sobat</span><span class="kerja">Kerja</span>
        <h1 class="h3 mb-3 fw-normal">Please Register</h1>

        {{-- Pembuatan teks field untuk nama --}}
        <div class="form-floating">
          <input
            type="text"
            class="form-control"
            id="floatingInput"
            placeholder="example123"
          />
          <label for="floatingInput">Full Name</label>
        </div>
        {{-- Pembuatan teks field untuk nomor telepon --}}
        <div class="form-floating">
          <input
            type="text"
            class="form-control"
            id="floatingInput"
            placeholder="example123"
          />
          <label for="floatingInput">Phone Number</label>
        </div>
        {{-- Pembuatan dropdown untuk skill --}}
        <div class="input-group" style="height: 50px;">
          <label class="input-group-text" for="inputGroupSelect01"
            >Skills</label
          >
          <select class="form-select" id="inputGroupSelect01">
            <option selected>Choose...</option>
            <option value="1">Software Engineer</option>
            <option value="2">Machine Learning Engineer</option>
            <option value="3">UI/UX Designer</option>
          </select>
        </div>
        {{-- Pembuatan teks field untuk email address --}}
        <div class="form-floating">
          <input
            type="email"
            class="form-control"
            id="floatingInput"
            placeholder="name@example.com"
          />
          <label for="floatingInput">Email address</label>
        </div>
        {{-- Pembuatan teks field untuk password --}}
        <div class="form-floating">
          <input
            type="password"
            class="form-control"
            id="floatingPassword"
            placeholder="Password"
          />
          <label for="floatingPassword">Password</label>
        </div>
        {{-- Membuat tombol register yang jika di klik akan mengarahkan ke halaman home_pencari --}}
        <a href="/home_pencari" class="w-100 btn btn-lg btn-primary">
          Register
        </a>
        {{-- Membuat teks already have account ? dan Login now yang akan mengarahkan ke halaman login_pencari --}}
        <div style="margin-top: 12px;">
          <span
            >Already have account ?
            <a href="/login_pencari">Login now!</a></span
          >
        </div>
      </form>
    </main>
  </body>
</html>
