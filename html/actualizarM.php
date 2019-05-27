<!DOCTYPE html>
<?php session_start();?>  
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
<body >
<?php
    if($_GET['id']){

       $id=$_GET['id'];
       $usuario = $_SESSION['id'];
   
       $localhost=mysqli_connect("localhost","root","carlosg","tutosya");
       $consultar =mysqli_query($localhost,"select * from anuncio where id='$id' and persona_id='$usuario'");
       $consultarUno = mysqli_fetch_array($consultar);

       //$validar=mysqli_query($localhost,"update anuncio set `descripcion`='biologia ' where ='$id' ");


    }
    
?>


<div class="card col-md-6 mt-5 mb-5">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="100000">
    <div class="w-100 carousel-inner" role="listbox">
      <div class="carousel-item active">
        <div class="carousel-caption">
          <div class="row">
            <div class="col-sm-3">
              
            </div>
                <div class="col-sm-9">

                    
                    <form method="POST">
                        
                        <strong><label for="des">Descripcion Asignatura</label></strong>
                        <input type="text" id="des" name="desc" value="<?php echo $consultarUno['descripcion'] ?>">
                        <br/>
                        <strong><label for="val">Valor Asignatura</label></strong>
                        <input type="text" id="val" name="valor" value="<?php echo $consultarUno['valor'] ?>">
                        <br/>
                        <input type="submit" value="actualizar">    
                    
                        
                    </form>  
                        
                </div>
          </div>
        </div>
      </div>
    </div>
  </div>








<?php
    if($_POST){
        $des=$_POST['desc'];
        $val=$_POST['valor'];
        $validar=mysqli_query($localhost,"update anuncio set descripcion='$des' , valor=$val  where id=$id and persona_id=$usuario ");
        if($validar){
            echo "<script>location.replace('perfil_usuario.php?status=ok')</script>";
        }else{
            echo "<script>location.replace('perfil_usuario.php?status=Error')</script>";
        }
    }
?>
</body>
</html>