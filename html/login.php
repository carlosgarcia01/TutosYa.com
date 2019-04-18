<!DOCTYPE html>
<?php session_start();?>  
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/estilo_login.css">
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/all.css">
    <title>Document</title>
</head>
<body>
 <!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">TutosYa</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home
                      <span class="sr-only">(current)</span>
                    </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pagos.html">Suscribete</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="registro.php">Registrate</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="login.php">iniciar sesión</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card card-signin my-5">
            <div class="card-body">
              <h5 class="card-title text-center">Ingresar</h5>
              <form class="form-signin" method="POST">
                <div class="form-label-group">
                  <input type="text" name="usuario" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                  <label for="inputEmail">Usuario</label>
                </div>
  
                <div class="form-label-group">
                  <input type="password" name="contrasena" id="inputPassword" class="form-control" placeholder="Password" required>
                  <label for="inputPassword">Contraseña</label>
                </div>
  
                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Ingresar</button>
                <hr class="my-4">
                
              </form>
              <?php 
                if($_POST){
                  $usu=$_POST['usuario'];
                  $contra=$_POST['contrasena'];
                  $localhost=mysqli_connect("localhost","root","carlosg","tutosya");
                  $select=mysqli_query($localhost,"select * from ususario where ususario='$usu' and contraseña='$contra'");
                  $select_row=mysqli_fetch_array($select) ;
                  if($select_row){
                    echo 'ingreso';
                  }else{
                    echo 'No';
                  }
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</body>
</html>