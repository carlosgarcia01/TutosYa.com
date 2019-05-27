<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/estilo_comentarioprofe.css" >
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <title>Document</title>
</head>
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
                <a class="nav-link" href="pagos.php">Suscribete</a>
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
      </nav><br>




<div class="card col-md-6 mt-5 mb-5">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="100000">
    <div class="w-100 carousel-inner" role="listbox">
      <div class="carousel-item active">
        <div class="carousel-caption">
          <div class="row">
            <div class="col-sm-3">
              <img src="http://via.placeholder.com/200x200" alt="" class="rounded-circle img-fluid"/>
            </div>
            <div class="col-sm-9">
            
<?php $id=$_GET['id'];?>
    <form method="POST">
        <label for="com">Ingresa tu comentario</label><br>
        <input type="text" id="com" name="dato1" style="width:500px;height:100px" ><br>
        <input type="submit" name="dato2">
    </form>


    <?php
        if($_POST){
            if(isset($_POST['dato2'])){
                $com=$_POST['dato1'];
                $localhost=mysqli_connect("localhost","root","carlosg","tutosya");
                $sentencia=mysqli_query($localhost,"insert into comentario (`descripcion`, `id_maestro`) VALUES ('$com', $id)");
                if($sentencia){
                    echo "<script>location.replace('comentarios.php?status=ok')</script>";
                }else{
                    echo "<script>location.replace('comentarios.php?status=Error')</script>";
                }
            }
            
        }
    ?>
              
              
            </div>
          </div>
        </div>
      </div>
      











</body>
</html>