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

<style>
    .mover{
    
        display:inline-block;
        margin:0px auto;
        width:70%;
    }
    .mover > div{
        display:inline-block;
        width:49%;
        
    }

    .mover > div .ordenar{
        width:49%;
       
        display:inline-block;
    }
</style>

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
                                    <a href="login.php">Salir</a>
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
                                    Perfil
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#works" role="tab" data-toggle="tab">
                                    <i class="material-icons">palette</i>
                                        Asignaturas
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#favorite" role="tab" data-toggle="tab">
                                    <i class="material-icons">favorite</i>
                                        Nueva Asignatura
                                    </a>
                                </li>
                            </ul>
                            </div>
                    </div>
                </div>
            
            <div class="tab-content tab-space">
                <div class="tab-pane active text-center gallery" id="studio">
                    <div class="row">
            
                        <div class="mover">
                            <div>
                                <div class="form-group ordenar">
                                    <label for="nombre">Nombre</label>
                                </div>
                                <div class="form-group ordenar">
                                    <input class="form-control" id="nombre" type='text' name='nombre' value="<?=$persona['nombre']?>"> 
                                </div>
                                <div class="form-group ordenar">   
                                    <label for="cc">Cedula</label>
                                </div>
                                <div class="form-group ordenar">
                                    <input class="form-control" type='text' id="cc" name='cc' value="<?=$persona['cedula']?>"> 
                                </div>

                                <div class="form-group ordenar">
                                    <label for="corr">Correo</label>
                                </div>
                                <div class="form-group ordenar">    
                                    <input class="form-control" type='text' id="corr" name='correo' value="<?=$persona['correo']?>">
                                </div>
                            </div>
                            <div>
                                <div class="form-group ordenar">   
                                    <label for="red">Red Social</label> 
                                </div>
                                <div class="form-group ordenar">    
                                    <input class="form-control" type='text' id="red" name='red' value="<?=$persona['red_social']?>">
                                </div>
                                <div class="form-group ordenar">
                                    <label for="tel">Telefono</label>
                                </div>
                                <div class="form-group ordenar">    
                                    <input class="form-control" type='text' id="tel" name='tel' value="<?=$persona['telefono']?>">
                                </div>
                                <div class="form-group ordenar">    
                                    <label for="ciudad">Ciudad</label>
                                </div>
                                <div class="form-group ordenar">    
                                    <input class="form-control" type='text' id="ciudad" name='ciudad' value="<?=$ciudad[1]?>" disabled='true'>
                                </div>
                            </div>

                            <button class="btn btn-success" type="submit" name="update">Actualizar</button>
                        </div>
                        
                    </div>
                </div>
                <div class="tab-pane text-center gallery" id="works">
                    <div class="row">
                        <div class="mover">
                        <?php
                                        
                                        $select=mysqli_query($localhost,"Select * from persona where id='$usuario'");
                                        $persona=mysqli_fetch_array($select);
                                        $select=mysqli_query($localhost,"Select * from anuncio where persona_id=$persona[0]");
                                        
                                        while($asignatura=mysqli_fetch_array($select) ){
                                            $materia=mysqli_query($localhost,"select * from asignatura where  id=$asignatura[2]");   
                                            $mater=mysqli_fetch_array($materia);
                                            
                                            echo "
                                            <div class='form-group ordenar'>
                                            <label for='nombre'>Id</label>
                                            </div>
                                            <div class='form-group ordenar'>
                                                <label class='form-control' id='nombre'>".$asignatura['id']."</label>
                                            </div>
                                            <div class='form-group ordenar'>
                                                <label for='nombre'>Nombre</label>
                                            </div>
                                            <div class='form-group ordenar'>
                                                <label class='form-control' id='nombre'>".$mater['nombre']."</label>
                                                </div>
                                                <div class='form-group ordenar'>
                                                <label for='nombre'>Descripcion</label>
                                            </div>
                                            <div class='form-group ordenar'>
                                                <label class='form-control' id='nombre'>".$asignatura['descripcion']." </label> 
                                                </div>
                                                <div class='form-group ordenar'>
                                                <label for='nombre'>Valor</label>
                                            </div>
                                            <div class='form-group ordenar'>
                                                <label class='form-control' id='nombre' >".$asignatura['valor']."</label>
                                            </div>

                                            <div class='form-group ordenar'>
                                                <a href='delete.php?id=".$asignatura['id']."'>Borrar</a>
                                            </div>
                                            <div class='form-group ordenar'>    
                                                <a href='actualizarM.php?id=".$asignatura['id']."'>Actualizar</a>
                                            </div>
                                            ";

                                            
                                   }?> 
                        </div>
                    </div>
                </div>
                <div class="tab-pane text-center gallery" id="favorite">
                    <div class="row" >
                        <div class="">
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