<!DOCTYPE html>
<?php session_start();?>  
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

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
<form method="POST">
    <input type="text" name="desc" value="<?php echo $consultarUno['descripcion'] ?>">
    <input type="text" name="valor" value="<?php echo $consultarUno['valor'] ?>">
    <input type="submit" value="actualizar">    
</form>  
    
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