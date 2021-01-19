<?php
	$conexion= new mysqli("localhost", "nivek", "#Robotix327", "ida");
	//Comprobar conexion
	if(mysqli_connect_errno())
	{
		printf("Fallo la conexion");
	}
	else {
		//printf("Estas conectado");
	}
?>