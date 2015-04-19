<?php include ('functions.php');
$id=$_GET['id'];
$lat=$_GET['lat'];
$lon=$_GET['lon'];
$METROS=$_GET['METROS'];


ejecutarSQLCommand("UPDATE config set `lat`= $lat,`lon`=$lon ,`METROS`=$METROS;");

 ?>

