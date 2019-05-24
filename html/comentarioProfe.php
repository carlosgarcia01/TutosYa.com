<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php $id=$_GET['id'];?>
    <form method="POST">
        <label for="com">Com</label>
        <input type="text" id="com" name="dato1">
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
</body>
</html>