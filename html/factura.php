<!DOCTYPE html>
<?php session_start();?> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <h7 style="color: red;padding: 0px 50px">Las Contrase&ntildeas no coinciden</h7>
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

  <!---  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<div class="container">
    <div class="row"  style="margin-top:100px">
        <form method=POST>
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3" table style="position:absolute;top:30px;left:60px;"  >
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                   
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p>
                        <em>Date: 1st November, 2013</em>
                    </p>
                    <p>
                        <em>Id factura : 1</em>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <h1>Factura</h1>
                </div>
                </span>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>#</th>
                            <th class="text-center">Precio</th>
                            <th class="text-center">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-md-9"><em>Suscripcion TutosYa</em></h4></td>
                            <td class="col-md-1" style="text-align: center"> 2 </td>
                            <td class="col-md-1 text-center">$<?php echo $_SESSION['valor']?></td>
                            <td class="col-md-1 text-center">$<?php echo $_SESSION['valor']?></td>
                        </tr>
                        
                      
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right">
                            <p>
                                <strong>Subtotal: </strong>
                            </p>
                            </td>
                            <td class="text-center">
                            <p>
                                <strong>$<?php echo $_SESSION['valor']?></strong>
                            </p>
                           
                        </tr>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right"><h4><strong>Total: </strong></h4></td>
                            <td class="text-center text-danger"><h4><strong>$<?php echo $_SESSION['valor']?></strong></h4></td>
                        </tr>
                    </tbody>
                </table>
                <a href="medio_pago.html" class="btn btn-block btn-primary text-uppercase"> Pagar Ahora </a>
            
            </div>
        </div>
        </form>
    </div>
</div>
</body>
</html>