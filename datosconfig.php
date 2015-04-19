<?php
include('functions.php'); 
$cc=$_GET['cc'];
if ($resultset = getSQLResultSet("SELECT id,lat,lon,METROS
FROM  `config`")) {
	
    	while ($row = $resultset->fetch_array(MYSQLI_NUM)) {
    	echo json_encode($row);
    	
    	}
    	
   }
   
?>
