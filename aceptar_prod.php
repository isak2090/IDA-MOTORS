<?php

	agregarAuto($_GET['id']);

	function agregarAuto($id)
	{
		include 'conexion.php';
		$sentencia="INSERT INTO pedidos 
						 SELECT * FROM allcars WHERE id=".$id."";
		$conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));

		$sentencia_del="DELETE FROM allcars WHERE id='".$id."' ";
		$conexion->query($sentencia_del) or die ("Error al eliminar".mysqli_error($conexion));
	}

	
?>

<script type="text/javascript">
	alert("Venta aceptada exitosamente");
	window.location.href='index.php';
</script>