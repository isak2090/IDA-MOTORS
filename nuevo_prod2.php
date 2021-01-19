<?php

	
	NuevoProducto($_POST['nombre'], $_POST['descrip'], $_POST['precio'],
				  $_POST['tipo'], $_POST['marca'], $_POST['modelo'],
				  $_POST['vendedor'], $_POST['contacto']);
	
	function NuevoProducto($nom, $descrip, $precio, 
						   $tipo, $marca, 
						   $modelo, $vendedor, $contacto)
	{
		
		if ($_FILES["imagen"]["error"] > 0)
		{

		} else {
				////// Datos
				include 'conexion.php';
				$sentencia= "INSERT INTO allcars (nombre, descrip, precio, 
												tipo, marca, modelo, 
												vendedor, contacto) 
							VALUES ('".$nom."', '".$descrip."', '".$precio."',
									'".$tipo."', '".$marca."', '".$modelo."',
									'".$vendedor."', '".$contacto."') "; 
				$conexion->query($sentencia) or die ("Error al ingresar los datos".mysqli_error($conexion));

				////// Imagen
				$nom_archivo=$_FILES['imagen']['name']; // Para conocer el nombre del archivo
				$ruta="images/".$nom_archivo;  // La ruta del archivo contiene el nuevo nombre y el tipo de extension
				var_dump($ruta);
				$archivo=$_FILES['imagen']['tmp_name']; //el arhivo a subir
				$subir=move_uploaded_file($archivo, $ruta); //se sube el archivo
				include 'conexion.php';
				echo $sentencia_img="UPDATE allcars SET imagen='".$ruta."' WHERE nombre='".$_POST['nombre']."' "; //cambiar productos por PETICIONES
				$conexion->query($sentencia_img) or die ("Error al ingresar los datos".mysqli_error($conexion));

		}
	}
?>

<script type="text/javascript">
	alert("Datos ingresados exitosamente");
	window.location.href='index.php';
</script>