<!DOCTYPE html>
<?php session_start();?> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/estilopago.css">
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
      </nav>

    <!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->
  
  <section class="pricing py-5" >
  <form method="POST">
    <div class="container" style="margin:100px auto; padding-bottom: 100px ">
      <div class="row">
        <!-- Free Tier -->
        
        <div class="col-lg-4" >
          <div class="card mb-5 mb-lg-0">
            <div class="card-body" >
              <h5 class="card-title text-muted text-uppercase text-center">Ocasional</h5>
              <h6 class="card-price text-center">$5<span class="period">/mes</span></h6>
              <hr>
              <ul class="fa-ul">
                <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Destacar 2 anuncio por semana gratis</strong></li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>5GB Storage</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
              </ul>

               
               <input type="submit" name="valor5" value="Comprar" class="btn btn-block btn-primary text-uppercase" >
  
            </div>
          </div>
        </div>
 
        <!-- Plus Tier -->
        <div class="col-lg-4">
          <div class="card mb-5 mb-lg-0">
            <div class="card-body">
              <h5 class="card-title text-muted text-uppercase text-center">Plus</h5>
              <h6 class="card-price text-center">$10<span class="period">/6 meses</span></h6>
              <hr>
              <ul class="fa-ul">
                <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Destacar 2 anuncio por semana gratis</strong></li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>50GB Storage</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
                
              </ul>
              
               <input type="submit" name="valor10" value="Comprar" class="btn btn-block btn-primary text-uppercase" >
           
            </div>
          </div>
        </div>
        <!-- Pro Tier -->
        <div class="col-lg-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-muted text-uppercase text-center">Pro</h5>
              <h6 class="card-price text-center">$30<span class="period">/año</span></h6>
              <hr>
              <ul class="fa-ul">
                <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Destacar 4 anuncio por semana gratis</strong></li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>150GB Storage</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects</li>
                <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
              
              </ul>
              
               <input type="submit" name="valor30" value="Comprar" class="btn btn-block btn-primary text-uppercase" >
                
            </div>
          </div>
        </div>
      </div>
      <a href="factura.php" style="margin-top:20px;background:green" class="btn btn-block btn-primary text-uppercase" >Generar Factura</a>
    </div>
</form>

    <?php
      if(isset($_POST["valor5"]))
        $_SESSION['valor']=5;
      else if(isset($_POST["valor10"]))
        $_SESSION['valor']=10;
      else if(isset($_POST["valor30"])){
        $_SESSION['valor']=30;}
    ?>
   
  </section>
</body>
</html>