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
      <form action="/register-pencari" method="POST">
        @csrf
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
            name="name"
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
            name="phone_number"
          />
          <label for="floatingInput">Phone Number</label>
        </div>
        {{-- Pembuatan dropdown untuk skill --}}
        <div class="input-group" style="height: 50px;">
          <label class="input-group-text" for="inputGroupSelect01"
            >Skills</label
          >
          <select class="form-select" id="inputGroupSelect01" name="skill">
            <option selected>Choose...</option>
            <option value="Software Engineer">Software Engineer</option>
            <option value="Machine Learning Engineer">Machine Learning Engineer</option>
            <option value="UI/UX Designer">UI/UX Designer</option>
            <option value="Backend Developer">Backend Developer</option>
            <option value="Frontend Developer">Frontend Developer</option>
          </select>
        </div>
        {{-- Pembuatan teks field untuk email address --}}
        <div class="form-floating">
          <input
            type="email"
            class="form-control"
            id="floatingInput"
            placeholder="name@example.com"
            name="email"
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
            name="password"
          />
          <label for="floatingPassword">Password</label>
        </div>
        {{-- Membuat tombol register yang jika di klik akan mengarahkan ke halaman home_pencari --}}
        <button class="w-100 btn btn-lg btn-primary">
          Register
        </button>
        {{-- Membuat teks already have account ? dan Login now yang akan mengarahkan ke halaman login_pencari --}}
        <div style="margin-top: 12px;">
          <span
            >Already have account ?
            <a href="/login-pencari">Login now!</a></span
          >
        </div>
      </form>
    </main>
  </body>
</html>
