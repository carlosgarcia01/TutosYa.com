<link href="../css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="../css/estilo_perfil_usu.css">
<script src="../js/perfil_usu.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<?php session_start();?> 
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
    <link rel="stylesgeet" href="https://rawgit.com/creativetimofficial/material-kit/master/assets/css/material-kit.css">
</head>

<?php
    $usuario=$_SESSION['id'];
    $localhost=mysqli_connect("localhost","root","carlosg","tutosya");
    $select=mysqli_query($localhost,"Select * from persona where id='$usuario'");
    $persona=mysqli_fetch_array($select);
        
        $consulta=mysqli_query($localhost,"Select * from ciudad where id=$persona[7] ");    
        $ciudad=mysqli_fetch_array($consulta);
        

?>
<body class="profile-page">

    <form method="POST">    
        <div class="page-header header-filter" data-parallax="true" style="background-image:url('http://wallpapere.org/wp-content/uploads/2012/02/black-and-white-city-night.png');"></div>
        <div class="main main-raised">
            <div class="profile-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 ml-auto mr-auto">
                        <div class="profile">
                                <div class="avatar">
                                    <img src="https://www.biography.com/.image/ar_1:1%2Cc_fill%2Ccs_srgb%2Cg_face%2Cq_auto:good%2Cw_300/MTU0NjQzOTk4OTQ4OTkyMzQy/ansel-elgort-poses-for-a-portrait-during-the-baby-driver-premiere-2017-sxsw-conference-and-festivals-on-march-11-2017-in-austin-texas-photo-by-matt-winkelmeyer_getty-imagesfor-sxsw-square.jpg" alt="Circle Image" class="img-raised rounded-circle img-fluid">
                                </div>
                                <div class="name">
                                    <h3 class="title"><?=$persona['nombre']?></h3>
                                    <h6>Designer</h6>
                                    <a href="#pablo" class="btn btn-just-icon btn-link btn-dribbble"><i class="fa fa-dribbble"></i></a>
                                    <a href="#pablo" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#pablo" class="btn btn-just-icon btn-link btn-pinterest"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="description text-center">
                        <p>An artist of considerable range, Chet Faker — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. </p>
                    </div>
                    <div class="row">
                        <div class="col-md-6 ml-auto mr-auto">
                            <div class="profile-tabs">
                            <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#studio" role="tab" data-toggle="tab">
                                    <i class="material-icons">camera</i>
                                    Studio
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#works" role="tab" data-toggle="tab">
                                    <i class="material-icons">palette</i>
                                        Work
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#favorite" role="tab" data-toggle="tab">
                                    <i class="material-icons">favorite</i>
                                        Favorite
                                    </a>
                                </li>
                            </ul>
                            </div>
                    </div>
                </div>
            
            <div class="tab-content tab-space">
                <div class="tab-pane active text-center gallery" id="studio">
                    <div class="row">
            
                        <div class="col-md-3 ml-auto">
                            <div>
                                <h3>Nombre</h3>
                                <input type='text' name='nombre' value="<?=$persona['nombre']?>"> 
                                <h3>Cedula</h3>
                                <input type='text' name='cedula' value="<?=$persona['cedula']?>"> 
                            </div>
                            <div>
                                <h3>Correo</h3>
                                <input type='text' name='correo' value="<?=$persona['correo']?>">
                                <h3>Red Social</h3> 
                                <input type='text' name='red' value="<?=$persona['red_social']?>">
                            </div>
                            <div>
                                <h3>Telefono</h3>
                                <input type='text' name='tel' value="<?=$persona['telefono']?>">
                                <h3>Ciudad</h3>
                                <input type='text' name='ciudad' value="<?=$ciudad[1]?>" disabled='true'>
                            </div>
                            
                            
                            <input type="submit" name="update" value="Actualizar">
                        </div>
                        
                    </div>
                </div>
                <div class="tab-pane text-center gallery" id="works">
                    <div class="row">
                        <div class="col-md-3 ml-auto">
                        <table>
                            <thead>
                                <th>id</th>
                                <th>Asignatura</th>
                                <th>Descripcion</th>
                                <th>Valor</th>
                            </thead>
                            <tbody>
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
                            </tbody>
                        </table>           
                                
                        </div>
                    </div>
                </div>
                <div class="tab-pane text-center gallery" id="favorite">
                    <div class="row" >
                        <div class="col-md-3 ml-auto" >
                            <table >
                                <thead>
                                    <th>Asignatura</th>
                                    <th>Descripcion</th>
                                    <th>Valor</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <select  name="asig"  >
                                                <option selected>Asignatura</option>

                                                <?php
                                                    
                                                    $select=mysqli_query($localhost,"select * from asignatura");

                                                    while($asignatura=mysqli_fetch_array($select) ){
                                                    
                                                    echo "<option value='".$asignatura['id']."'>" .$asignatura['nombre']. "</option>";
                                                }?>
                                            </select>
                                        </td>
                                    
                                        <td><input type="text" name="desc" placeholder="Descripcion"></td>
                                        <td><input type="text" name="valor" placeholder="Valor"></td>
                                        
                                    </tr>
                                </tbody>
                            </table>
                                <input type="submit" name="nueva_m" value="ingresar">
                        </div>
                    </div>
                </div>
            </div>

            
                </div>
            </div>
        </div>
    </form>
	<footer class="footer text-center ">
        <p>Made with <a href="https://demos.creative-tim.com/material-kit/index.html" target="_blank">Material Kit</a> by Creative Tim</p>
    </footer>
    
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>


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
                echo "<script>location.replace('perfil_usuario.php?persona=ok')</script>";
            }else if(isset($_POST["nueva_m"])){
                $asg=$_POST['asig'];
                $desc=$_POST['desc'];
                $val=$_POST['valor'];
                $usu=$_SESSION['id'];
                $res=mysqli_query($localhost,"insert into anuncio (`descripcion`, `asignaturas_id`, `persona_id`, `valor`) VALUES ('$desc', $asg, $usu, $val)");
                if($res){
                    echo "<script>location.replace('perfil_usuario.php?insert=ok')</script>";
                }else{
                    echo "<script>location.replace('perfil_usuario.php?insert=Error')</script>";
                }
            }
        }
        
    ?>
</body>