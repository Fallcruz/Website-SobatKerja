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
    <title>SobatKerja - Login Pencari Kerja</title>

    <link rel="stylesheet" href="/css/index.css" />

    <!-- Bootstrap core CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

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
  <body class="text-center">

    {{-- Membuat form yang menampung data akun user untuk melakukan sign in kedalam website SobatKerja --}}
    <main class="form-signin">
      <form action="/login-pencari" method="POST">
        @csrf
        <span class="sobat">Sobat</span><span class="kerja">Kerja</span>
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
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
        <button class="w-100 btn btn-lg btn-primary">
          Sign in
        </button>
        <div style="margin-top: 12px;">
          <span
            >Doesn't have an account ?
            <a href="/register_pencari">Register now!</a></span
          >
        </div>
      </form>
    </main>
  </body>
</html>
