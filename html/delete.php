<?php session_start();?>  
<?php
if($_GET['id']){
    $id=$_GET['id'];
    $localhost=mysqli_connect("localhost","root","carlosg","tutosya");
    $validar=mysqli_query($localhost,"delete from anuncio where id='$id' ");
    if($validar){
        echo "<script>location.replace('perfil_usuario.php?status=ok')</script>";
    }else{
        echo "<script>location.replace('perfil_usuario.php?status=Error')</script>";
    }
}
    

?>