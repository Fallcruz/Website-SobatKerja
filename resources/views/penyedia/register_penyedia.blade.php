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
    <title>Signin Template · Bootstrap v5.1</title>

    <link rel="stylesheet" href="css/index.css" />

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
    <link href="signin.css" rel="stylesheet" />
  </head>
  <body class="text-center">
    <main class="form-signin">
      <form>
        <span class="sobat">Sobat</span><span class="kerja">Kerja</span>
        <h1 class="h3 mb-3 fw-normal">Please Register</h1>

        <div class="form-floating">
          <input
            type="text"
            class="form-control"
            id="floatingInput"
            placeholder="example123"
          />
          <label for="floatingInput">Nama Perusahaan</label>
        </div>

        <div class="form-floating">
          <input
            type="text"
            class="form-control"
            id="floatingInput"
            placeholder="example123"
          />
          <label for="floatingInput">Lokasi Perusahaan</label>
        </div>

        <div class="form-floating">
          <input
            type="email"
            class="form-control"
            id="floatingInput"
            placeholder="name@example.com"
          />
          <label for="floatingInput">Email Perusahaan</label>
        </div>
        <div class="form-floating">
          <input
            type="password"
            class="form-control"
            id="floatingPassword"
            placeholder="Password"
          />
          <label for="floatingPassword">Password</label>
        </div>
        <a href="penyedia.html" class="w-100 btn btn-lg btn-primary">
          Register
        </a>
        <div style="margin-top: 12px;">
          <span
            >Already have account ?
            <a href="login_penyedia.html">Login now!</a></span
          >
        </div>
      </form>
    </main>
  </body>
</html>