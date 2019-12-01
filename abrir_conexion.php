<?php 
	
	$host = "localhost";     
	$basededatos = "propietario";     
	$usuariodb = "luis";     
	$clavedb = "12345";     

	
	$tabla_db1 = "propietario"; 	   
	$tabla_db2 = "usuario"; 	   
	

	
	
	$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);


	if ($conexion->connect_errno) {
	    echo "Nuestro sitio experimenta fallos....";
	    exit();
	}

?>
