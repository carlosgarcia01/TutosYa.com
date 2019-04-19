<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/estilo_registro.css">
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <title>Document</title>

</head>

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


    <div class="container" style="margin-top:-10px">
      <div class="row">
        <div class="col-lg-10 col-xl-9 mx-auto">
          <div class="card card-signin flex-row my-5">
            <div class="card-img-left d-none d-md-flex">
              
               <!-- Background image for card set in CSS! -->
            </div>
            <div class="card-body">
              <h5 class="card-title text-center">Registrate</h5>
              <form class="form-signin" method="POST">
                <div class="form-label-group">
                  <input type="text" name="usuario" id="inputUserame" class="form-control" placeholder="Username" required autofocus>
                  <label for="inputUserame">Usuario</label>
                </div>

                <div class="form-label-group">
                  <input type="text" name="cc" id="inputCc" class="form-control" placeholder="Cedula" required>
                  <label for="inputCc">Cedula</label>
                </div>

                <div class="form-label-group">
                  <input type="text" name="red" id="inputRed" class="form-control" placeholder="Link Red Social" required>
                  <label for="inputRed">Link Red Social</label>
                </div>

                <div class="form-label-group">
                  <select id="ciudad" class="form-control" name="selectCiudad">
                    <option class="form-control" selected> Ciudad</option>
                    <?php
                      $localhost=mysqli_connect("localhost","root","carlosg","tutosya");
                      $select=mysqli_query($localhost,"Select * from ciudad");

                      while($ciudad=mysqli_fetch_array($select) ){
                        
                      echo "<option value='".$ciudad['id']."'>" .$ciudad['nombre']. "</option>";
                      }?>
                  </select>
                </div>
  
                <div class="form-label-group">
                  <input type="email" name="correo" id="inputEmail" class="form-control" placeholder="Email address" required>
                  <label for="inputEmail">Correo electronico</label>
                </div>

                <div class="form-label-group">
                  <input type="text" name="tel" id="inputTel" class="form-control" placeholder="Telefono" required>
                  <label for="inputTel">Telefono</label>
                </div>
                
                <hr>
  
                <div class="form-label-group">
                  <input type="password" name="contrasena" id="inputPassword" class="form-control" placeholder="Password" required>
                  <label for="inputPassword">Contraseña</label>
                </div>
                
                <div class="form-label-group">
                  <input type="password" name="conf_contra" id="inputConfirmPassword" class="form-control" placeholder="Password" required>
                  <label for="inputConfirmPassword">Confirmar contraseña</label>
                </div>


                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Registrate</button>
                <a class="d-block text-center mt-2 small" href="#">Ingresar</a>
                <hr class="my-4">
              </form>  

              
              <?php
                  if($_POST){
                    $localhost=mysqli_connect("localhost","root","carlosg","tutosya");
                    $usuariosRegis=mysqli_query($localhost,"select * from usuario");
                    $usuExiste=0;
                    while($var=mysqli_fetch_array($usuariosRegis)){
                      if($var['usuario']==$_POST['usuario']){
                          $usuExiste=1;
                          echo '<h7 style="color: red">El usuario ya existe</h7>';
                          break;
                      }
                    }
                    if($usuExiste==0){
                      $cont=$_POST['contrasena'];
                      $con_cont= $_POST['conf_contra'];
                      if($cont!=$con_cont){
                        echo '<h7 style="color: red">Las Contrase&ntildeas no coinciden</h7>';
                      }else{
                        $usu=$_POST['usuario'];
                        $correo=$_POST['correo'];
                        $cc=$_POST['cc'];
                        $red=$_POST['red'];
                        $ciudad=$_POST['selectCiudad'];
                        $tel=$_POST['tel'];
                        $localhost=mysqli_connect("localhost","root","carlosg","tutosya");
                        mysqli_query($localhost,"insert into usuario ( `usuario`, `contrasena`) VALUES ('$usu', '$cont')");

                        
                        
                        $idUsu=mysqli_query($localhost,"select id from usuario where usuario='$usu'");
                        $idUsu2=mysqli_fetch_array($idUsu);
                        mysqli_query($localhost,"insert into persona (`nombre`, `cedula`, `correo`, `red_social`, `telefono`, `ciudad_id`,`usuario_id`) VALUES ('$usu', '$cc', '$correo', '$red', '$tel', $ciudad, $idUsu2[0])"); 
                      }
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