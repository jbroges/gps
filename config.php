<?php include ('functions.php');
$cc=$_GET['cc'];
$nombre=$_GET['id'];
$apellido=$_GET['lat'];
$direccion=$_GET['lon'];
$telefono=$_GET['METROS'];


ejecutarSQLCommand("INSERT INTO  `config` (
`id` ,
`lat` ,
`lon` ,
`METROS`
)
VALUES (
'$id' ,
'$lat' ,
'$lon' ,
'$METROS')

 ON DUPLICATE KEY UPDATE `lat`= '$lat',
`lon`='$lon' ,METROS
`METROS`='$METROS'
;");

 ?>
