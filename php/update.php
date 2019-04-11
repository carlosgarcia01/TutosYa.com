<?php
    if($_GET['idasignaturas']){
        $id=$_GET['idasignaturas'];
        $localhost=mysqli_connect("localhost","root","carlosg","tutosya");
        $select=mysqli_query($localhost,"select * from asignaturas where idasignaturas=$id");
        $select_row=mysqli_fetch_array($select) ;?>

    <form method="post">

		<div>
			<label>Nombre</label>
			<input type="text" placeholder="Nombres" name="nombres" value="<?php echo $select_row['nombre']; ?>">
        </div>
        <input type="submit" value="Ingresar">
     </form>       
   <?php }
   if($_POST){
        $nombre_in=$_POST['nombres'];
        echo $nombre_in;
        $modificar=mysqli_query($localhost,"update asignaturas set nombre='$nombre_in' where idasignaturas=$id");
        if($modificar){
            echo " <script>location.replace('conexion.php')</script>";
        }else{
            echo 'Nada';
        }
   }
?>


