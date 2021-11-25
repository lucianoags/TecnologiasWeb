
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Signin Template · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->

<link href="<?= base_url("assets/login/css/bootstrap.css");?>" rel="stylesheet" >
<link href="<?= base_url("assets/css/custom/login.css");?>" rel="stylesheet" >


    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


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

      .myForm {
        min-width: 500px;
        position: absolute;
        text-align: center;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
      }


    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">

  <div class="area" >
            <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul>
    </div >


<main class="form-signin">
  <form class="myForm" method='post' action="<?= base_url("/public/login");?>">
    <img class="mb-4" src="<?= base_url("assets/img/u-logo.svg");?>" alt="" width="25%" height="25%">
    <h1 class="h3 mb-3 fw-normal">Inicia sesión</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
      <label for="floatingInput">Email institucional</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control mb-2" id="pass" name="pass" placeholder="Password">
      <label for="floatingPassword">Contraseña</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Recordarme
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
    <p class="mt-5 mb-3">&copy; 2021</p>
  </form>
</main>




  <script src="<?= base_url("assets/login/css/bootstrap.js");?>"></script>
    
  </body>
</html>
