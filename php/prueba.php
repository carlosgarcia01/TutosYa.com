<?php //Ejemplo curso PHP aprenderaprogramar.com

$link = mysqli_connect("sql203.byethost7.com", "b7_10356956", "*****");

mysqli_select_db($link, "b7_10356956_mibasededatos");

$tildes = $link->query("SET NAMES 'utf8'"); //Para que se inserten las tildes correctamente

mysqli_query($link, "INSERT INTO agenda VALUES ('Pedro2', 'Gómez Gómez', 'C/ Buenaventura 54', '699887766', 35, 1.98)");

mysqli_query($link, "INSERT INTO agenda VALUES ('Antonio2', 'Delgado Folken', 'C/ El Milagroso 77', '699667744', 88, 1.71)");

mysqli_close($link); // Cerramos la conexion con la base de datos

echo 'Los datos han sido insertados en la base de datos';

?>