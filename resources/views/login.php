<?php
$error = null;
?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="../../public/assets/fonts/icomoon/style.css">

  <link rel="stylesheet" href="../../public/assets/css/owl.carousel.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../public/assets/css/bootstrap.min.css">

  <!-- Style -->
  <link rel="stylesheet" href="../../public/assets/css/style.css">

  <title>Login</title>
</head>

<body>



  <div class="content">
    <div class="container">
      <div class="body d-md-flex align-items-center justify-content-between">
        <div class="row">
          <div class="col-md-6">
            <img src="images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-6 contents">
            <div class="row justify-content-center">
              <div class="col-md-8">
                <div class="mb-4">
                  <h3>Iniciar Sesión</h3>
                </div>

                <form action="login.php" method="POST">
                  <!-- si hay un error mandar un danger -->
                  <?php if ($error) : ?>
                    <p class="text-danger">
                      <?= $error ?>
                    </p>
                  <?php endif ?>
                  <div class="form-group first">
                    <label for="user">Usuario</label>
                    <input type="text" class="form-control" id="user" name="user" required autocomplete="user" autofocus>

                  </div>
                  <div class="form-group last mb-4">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" required autocomplete="password" autofocus>

                  </div>

                  <div class="d-flex mb-5 align-items-center">
                    <label class="control control--checkbox mb-0"><span class="caption">Recordar credenciales</span>
                      <input type="checkbox" checked="checked" />
                      <div class="control__indicator"></div>
                    </label>
                  </div>

                  <button type="submit" class="btn btn-block btn-info">Iniciar Sesión</button>




                </form>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>


  <script src="../../public/assets/js/jquery-3.3.1.min.js"></script>
  <script src="../../public/assets/js/popper.min.js"></script>
  <script src="../../public/assets/js/bootstrap.min.js"></script>
  <script src="../../public/assets/js/main.js"></script>
</body>

</html>
