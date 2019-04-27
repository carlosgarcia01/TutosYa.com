<!DOCTYPE html>
<?php session_start();?> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/perfil.css" >
    <link rel="stylesheet" href="../css/bootstrap.min.css">
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

                    <td><input type="submit" name="update" value="Actualizar"></td>
            </div>
            </tbody>
        </table>

        <table border=1>
            <thead>
                <th>id</th>
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

                        echo "<tr><td><label name='id'>".$asignatura['id']."</label></td>";
                        echo "<td><label name='m_nombre' disabled='true'>".$mater['nombre']."</label> </td>";
                        echo "<td><label name='m_descripcion'>".$asignatura['descripcion']."</label></td>";
                        echo "<td><label  name='m_valor'>".$asignatura['valor']."</label> </td>";
                        echo "<td><a href='delete.php?id=".$asignatura['id']."'>Borrar</a><a href='actualizarM.php?id=".$asignatura['id']."'>Actualizar</a></td></tr> ";
                        
                    }?>

            </div>
            </tbody>
        </table>
        <a href="login.php">Salir</a>
        
        <table border=1>
            <thead>
                <th>Asignatura</th>
                <th>Descripcion</th>
                <th>Valor</th>
                
            </thead>
            <tbody>
            <div class="form-group ">
                <tr>
                <td><select id="arac-turu" name="asig" class="form-control" >
                    <option selected>Asignatura</option>

                    <?php
                        
                        $select=mysqli_query($localhost,"Select * from asignatura");

                        while($asignatura=mysqli_fetch_array($select) ){
                        
                        echo "<option value='".$asignatura['id']."'>" .$asignatura['nombre']. "</option>";
                    }?>
                </select></td>
               
                <td><input type="text" name="desc" placeholder="Descripcion"></td>
                <td><input type="text" name="valor" placeholder="Valor"></td>
                
                </tr>
                <tr><td><input type="submit" name="nueva_m" value="ingresar"></td></tr>
            </div>
            </tbody>
        </table>
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
                mysqli_query($localhost,"update usuario set usuario='$nombre' where id=$id");
                echo "<script>location.replace('perfil.php?persona=ok')</script>";
            }else if(isset($_POST["nueva_m"])){
                $asg=$_POST['asig'];
                $desc=$_POST['desc'];
                $val=$_POST['valor'];
                $usu=$_SESSION['id'];
                $res=mysqli_query($localhost,"insert into anuncio (`descripcion`, `asignaturas_id`, `persona_id`, `valor`) VALUES ('$desc', $asg, $usu, $val)");
                if($res){
                    echo "<script>location.replace('perfil.php?insert=ok')</script>";
                }else{
                    echo "<script>location.replace('perfil.php?insert=Error')</script>";
                }
            }
        }
        
    ?>
</html>