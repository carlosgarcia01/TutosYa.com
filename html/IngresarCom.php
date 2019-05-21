<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="POST">
    <?php
        if($_GET['id']){
            $id=$_GET['id'];
        }
    ?>
    
    <label for="nuevoCom">Comentario:</label>
    <input type="text" id="nuevoCom" name="nuevoCom" placeholder="comentario">
    <input type="submit" value="Ingresar" name="Comentario" >
</form>


<?php
    
        if($_POST){
            if($_POST('Comentario')){    
                $comentario=$_POST['nuevoCom'];
                $localhost=mysqli_connect("localhost","root","carlosg","tutosya");
                echo "<h1>siiii</h1>";
                //$res=mysqli_query($localhost,"insert into comentario (`descripcion`, `id_maestro`) VALUES ('$comentario', $id) ");
                /*if($res){
                    echo "<h1>Siiiiii</h1>";
                    //<script>location.replace('comentarios.php?insert=ok')</script>
                }else{
                    echo "<h1>Nooooo</h1>";
                }  */   
            }
        }
    
    
    
    
?>
</body>
</html>