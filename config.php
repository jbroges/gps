<?php include ('functions.php');
$id=$_GET['id'];
$lat=$_GET['lat'];
$lon=$_GET['lon'];
$METROS=$_GET['METROS'];


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

echo $id . ' ' . $lat . ' ' . $lon . ' ' . $METROS;
 ?>

