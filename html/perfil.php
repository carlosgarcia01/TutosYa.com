<!DOCTYPE html>
<?php session_start();?>  
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/perfil.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form method="POST">
        <table border=1>
            <thead>
                <th>Nombre</th>
                <th>Cedula</th>
                <th>Correo</th>
                <th>Red Social</th>
                <th>Telefono</th>
                <th>Ciudad</th>
                
            </thead>
            <tbody>
            <div class="form-group ">
                <?php
                    $usuario=$_SESSION['id'];
                    $localhost=mysqli_connect("localhost","root","carlosg","tutosya");
                    $select=mysqli_query($localhost,"Select * from persona where id='$usuario'");
                    while($persona=mysqli_fetch_array($select) ){
                        
                        $consulta=mysqli_query($localhost,"Select * from ciudad where id=$persona[7] ");    
                        $ciudad=mysqli_fetch_array($consulta);
                        echo "<tr><td><input type='text' name='nombre' value=".$persona['nombre']."> </td>";
                        echo "<td><input type='text' name='cedula' value=".$persona['cedula']."> </td>";
                        echo "<td><input type='text' name='correo' value=".$persona['correo']."> </td>";
                        echo "<td><input type='text' name='red' value=".$persona['red_social']."> </td>";
                        echo "<td><input type='text' name='tel' value=".$persona['telefono']."> </td>";
                        echo "<td><input type='text' name='ciudad' value=".$ciudad[1]." disabled='true'> </td></tr>";

                    }?>

                    <input type="submit" name="update" value="Actualizar">
            </div>
            </tbody>
        </table>

        <table border=1>
            <thead>
                <th>Asignatura</th>
                <th>Descripcion</th>
                <th>Valor</th>
                
            </thead>
            <tbody>
            <div class="form-group ">
                <?php
                    
                    $select=mysqli_query($localhost,"Select * from persona where id='$usuario'");
                    $persona=mysqli_fetch_array($select);
                    $select=mysqli_query($localhost,"Select * from anuncio where persona_id=$persona[0]");
                                  
                    while($asignatura=mysqli_fetch_array($select) ){
                        $materia=mysqli_query($localhost,"select * from asignatura where  id=$asignatura[2]");   
                        $mater=mysqli_fetch_array($materia);

                        echo "<tr><td><input type='text' name='m_nombre' value=".$mater['nombre']." disabled='true'> </td>";
                        echo "<td><textarea name='m_descripcion' >".$asignatura['descripcion']."</textarea></td>";
                        echo "<td><input type='text' name='m_valor' value=".$asignatura['valor']."> </td>";
                        echo "<td><input type='submit' name='delete' value='borrar'><input type='submit' name='update_m' value='Actualizar'></td> ";
                        echo "<td><input name='id' value=".$asignatura['id']." type='text' ></td></tr>";
                    }?>

            </div>
            </tbody>
        </table>
        <a href="login.php">Salir</a>
        
        </form>
    </div>

    <?php
        if($_POST){
            $m_id=$_POST['id'];
            if(isset($_POST["update"])){
                $nombre=$_POST['nombre'];
                $cedula=$_POST['cedula'];
                $correo=$_POST['correo'];
                $red=$_POST['red'];
                $tel=$_POST['tel'];
                $id = $_SESSION["id"];
                mysqli_query($localhost,"update persona set nombre='$nombre', cedula='$cedula', correo='$correo', red_social='$red',telefono='$tel' where id=$id");
            
            }else if(isset($_POST["update_m"])){
                $m_des=$_POST['m_descripcion'];
                $m_valor=$_POST['m_valor'];
               
                mysqli_query($localhost,"update anuncio set descripcion='$m_des',valor='$m_valor' where id='$m_id' ");
            }else if(isset($_POST["delete"])){
                mysqli_query($localhost,"delete from anuncio where id='$m_id' ");
            }
            echo " <script>location.replace('perfil.php?gg=true')</script>";
        }
        
    ?>
</html>