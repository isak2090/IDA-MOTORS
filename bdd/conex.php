<?php
$user ="localhost";
$name = "amarillo";
$contraseña = "amarillo123";
$database = "idaPi";

$conex = mysqli_connect($user,$name,$contraseña,$database);

if(mysqli_connect_errno()){
		printf("Fallo la conexion");
	}
	else {
		//printf("Estas conectado");
	}





?>