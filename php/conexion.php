<?php

    $localhost=mysqli_connect("localhost","root","carlosg","tutosya");

    $select=mysqli_query($localhost,"Select * from asignaturas");

?>

<table border='1'>
    <thead>
        <tr>
            <td>Id:</td>
            <td>Nombre:</td>
        </tr>
    </thead>
    <?php
        while( $select_row=mysqli_fetch_array($select)    ){
            ?>
            <tr>
                <td><?php echo $select_row['idasignaturas']; ?> </td>
                <td><?php echo $select_row['nombre']; ?> </td>


                <td><a href='update.php?idasignaturas=<?php echo $select_row['idasignaturas']?>'>modificar</a> </td>
            </tr>
            <?php } ?>

    

</table>
