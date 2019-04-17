<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/estilos.css">
    <script type="text/javascript" src="../js/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>TutosYa</title>
</head>
<body>



    <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">TutosYa</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Home
                  <span class="sr-only">(current)</span>
                </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pagos.html">Suscribete</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registro.html">Registrate</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="login.php">iniciar sesión</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('https://source.unsplash.com/LAaSoL0LrYs/1920x1080')">
          <div class="carousel-caption d-none d-md-block">
            <h2 class="display-8">TutosYa</h2>
            <section class="search-banner text-white py-3 form-arka-plan" id="search-banner">
              <div class="container py-5 my-5">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="card acik-renk-form" style="background: none; border: none ">
                              <div class="card-body">
                                  <div class="row">
                                      
                                      <div class="col-md-4">
                                        <div class="form-group ">
                                          <select id="ilceler" class="form-control" >
                                              <option selected>Departamento</option>
                                                <?php
                                                $localhost=mysqli_connect("localhost","root","carlosg","tutosya");
                                                $select=mysqli_query($localhost,"Select * from departamento");

                                                while($departamento=mysqli_fetch_array($select) ){
                                                  
                                                echo "<option value='".$departamento['id']."'>" .$departamento['nombre']. "</option>";
                                                }?>
                                          </select>
                                        </div>
                                      </div>

                                      <div class="col-md-4">
                                        <div class="form-group ">
                                          <select id="ilceler" class="form-control" name="select">
                                            <option selected> Ciudad</option>
                                            <?php
                                              $localhost=mysqli_connect("localhost","root","carlosg","tutosya");
                                              $select=mysqli_query($localhost,"Select * from ciudad");

                                              while($ciudad=mysqli_fetch_array($select) ){
                                                
                                              echo "<option value='".$ciudad['id']."'>" .$ciudad['nombre']. "</option>";
                                              }?>
                                          </select>
                                        </div>
                                      </div> 

                                      


                                      <div class="col-md-4">
                                          <div class="form-group ">
                                              <select id="arac-turu" class="form-control" >
                                                  <option selected>Asignatura</option>

                                                    <?php
                                                      $localhost=mysqli_connect("localhost","root","carlosg","tutosya");
                                                      $select=mysqli_query($localhost,"Select * from asignatura");

                                                      while($asignatura=mysqli_fetch_array($select) ){
                                                        
                                                      echo "<option value='".$asignatura['id']."'>" .$asignatura['nombre']. "</option>";
                                                    }?>
                                              </select>
                                          </div>
                                      </div>

                                  </div>
                                  <p class="font-weight-light text-dark">buscar</p>
                                  <div class="row">
                                      <div class="col-md-9">
                                          <div class="form-group ">
                                              <input type="text" class="form-control" placeholder="¿Que buscas?">
                                          </div>
                                      </div>
                                      <div class="col-md-3">
                                          <a href="lista_profesores.html" class="btn btn-block btn-primary text-uppercase">Buscar</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </section>
            
          
  </header>
  




  </section>
</body>
</html>