<?php include ('functions.php');
$id=$_GET['id'];
$lat=$_GET['lat'];
$lon=$_GET['lon'];
$METROS=$_GET['METROS'];


ejecutarSQLCommand("INSERT INTO  `config` (
`lat` ,
`lon` ,
`METROS`
)
VALUES (
$lat ,
$lon ,
$METROS);");

echo $id . ' ' . $lat . ' ' . $lon . ' ' . $METROS;
 ?>

