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
                    $usuario=$_SESSION['usuario'];
                    $localhost=mysqli_connect("localhost","root","carlosg","tutosya");
                    $select=mysqli_query($localhost,"Select * from persona where nombre='$usuario'");
                    

                    while($persona=mysqli_fetch_array($select) ){

                        echo "<tr><td>" .$persona['nombre']. "</td>";
                        echo "<td>" .$persona['cedula']. "</td>";
                        echo "<td>" .$persona['correo']. "</td>";
                        echo "<td>" .$persona['red_social']. "</td>";
                        echo "<td>" .$persona['telefono']. "</td>";
                        echo "<td>" .$persona[7]. "</td></tr>";
                    }?>
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
                    
                    $select=mysqli_query($localhost,"Select * from persona where nombre='$usuario'");
                    $persona=mysqli_fetch_array($select);
                    $select=mysqli_query($localhost,"Select * from anuncio where persona_id=$persona[0]");
                                  
                    while($asignatura=mysqli_fetch_array($select) ){
                        $materia=mysqli_query($localhost,"select * from asignatura where  id=$asignatura[2]");   
                        $mater=mysqli_fetch_array($materia);
                        echo "<tr><td>" .$mater['nombre']. "</td>";
                        echo "<td>" .$asignatura['descripcion']. "</td>";
                        echo "<td>" .$asignatura['valor']. "</td></tr>";
                    }?>

            </div>
            </tbody>
        </table>

    </div>
</body>
</html>