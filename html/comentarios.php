<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script type="text/javascript" src="../js/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
      </nav>

    <!-- Page Content -->
<div class="container" style="margin-top:80px">

    <!-- Page Heading -->
    <h1 class="my-4">Profesores
      
    </h1>
  <form method="POST">
    <div class="row">
    <?php 
        //if($_POST){
          $localhost=mysqli_connect("localhost","root","carlosg","tutosya");
          $select=mysqli_query($localhost,"select * from persona");
          while($dato=mysqli_fetch_array($select)){
            $consulta=mysqli_query($localhost,"select * from comentario where id_maestro=$dato[id]");   
            //$profesor=mysqli_fetch_array($consulta);
            echo "
            <div class='col-lg-6 mb-4'>
            <div class='card h-100'>
              <a href='#'><img class='card-img-top' src='http://placehold.it/700x400' alt=''></a>
              <div class='card-body'>
                <h4 class='card-title'>
                  <label >".$dato['nombre']."</label>
                </h4>";
                if($consulta){
                  while($datoCom=mysqli_fetch_array($consulta)){
                      echo "<p class='card-text'>".$datoCom['descripcion']."</p>";
                  }
                
                }

                echo "
                <a href='IngresarCom.php?id=".$dato['id']."'>Ingresar Comentario</a>
              </div>
            </div>
          </div>
            ";
          //}
        }?>
    </form>  
    <!-- /.row -->
  
    <!-- Pagination -->
    <ul class="pagination justify-content-center">
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only">Previous</span>
            </a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">1</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">2</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">3</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only">Next</span>
            </a>
      </li>
    </ul>
  
  </div>
  <!-- /.container -->
</body>
</html>