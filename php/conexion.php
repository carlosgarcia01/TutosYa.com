<?php

$conn=mysqli_connect("127.0.01","root","carlosg","tutosya");

    if($conn->connet_error)
        die($conn->conneet_error);

    
    print('Conexion exitosa \n');
    exit(1);
?>