<?php
  include "conexion.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Alta de Producto</title>
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="css/estilo.css">
	</head>
	<body>
		<header style="height: 70px">
		</header>
			<div style="height: 30px"></div>
  			<div class="container">
			  	<div class="row">
            		<div class="col-lg-12">
						<div class="card shadow-lg p-4 mb-4 bg-white">
							<div class="card-header"><span> Alta de nuevo auto </span> </div>
							<div class="card-body">
								<form action="nuevo_prod2.php" method="POST" class="needs-validation" enctype="multipart/form-data" novalidate>
									<div class="form-row">
										<div class="col-md-4 mb-3">
											<label>Nombre</label>
											<input type="text" id="nombre" name="nombre" class="form-control" value="" required>
											<div class="valid-feedback">Bien</div>
											<div class="invalid-feedback">Este campo es obligatorio</div>  
											<br>					
										</div>
										<div class="col-md-4 mb-3">
											<label>Tipo:</label>
											<input type="text" class="form-control" id="tipo" name="tipo">
											<div class="valid-feedback">Bien</div>
											<div class="invalid-feedback">Este campo es obligatorio</div> 
											<br>
										</div>
										<div class="col-md-4 mb-3">
											<label>Marca:</label>
											<input type="text" class="form-control" id="marca" name="marca">
											<div class="valid-feedback">Bien</div>
											<div class="invalid-feedback">Este campo es obligatorio</div> 
											<br>
										</div>
									</div>
									<div class="form-row">
										<div class="col-md-4 mb-3">
											<label>Modelo:</label>
											<input type="text" class="form-control" id="modelo" name="modelo">
											<div class="valid-feedback">Bien</div>
											<div class="invalid-feedback">Este campo es obligatorio</div> 
											<br>
										</div>
										<div class="col-md-4 mb-3">
											<label>Precio:</label>
											<input type="text" class="form-control" id="precio" name="precio">
											<div class="valid-feedback">Bien</div>
											<div class="invalid-feedback">Este campo es obligatorio</div> 
											<br>
										</div>
										<div class="col-md-4 mb-3">
											<label>Descripcion:</label><br>
											<textarea class="form-control" style="border-radius: 10px;" rows="3" cols="50" name="descrip" id="descrip" ></textarea>
											<div class="valid-feedback">Bien</div>
											<div class="invalid-feedback">Este campo es obligatorio</div> 
											<br>
										</div>
									</div>
									<div class="form-row">
										<div class="col-md-4 mb-3">
											<label>Vendedor:</label>
											<input type="text" class="form-control" id="vendedor" name="vendedor">
											<div class="valid-feedback">Bien</div>
											<div class="invalid-feedback">Este campo es obligatorio</div> 
											<br>
										</div>
										<div class="col-md-4 mb-3">
											<label>Contacto:</label>
											<input type="text" class="form-control" id="contacto" name="contacto">
											<div class="valid-feedback">Bien</div>
											<div class="invalid-feedback">Este campo es obligatorio</div> 
											<br>
										</div>
									</div>
									<label>Imagen:</label>
										<input type="file" name="imagen" id="imagen"> <br><br>
									<button type="submit" class="btn btn-primary">Guardar</button>
								</form>
							</div>
						</div>
        			</div>
				</div>
    		</div>	

		</div>

	</body>
</html>
<script>
$("#file-1").fileinput({
showCaption: false,
browseClass: "btn btn-primary btn-lg",
fileType: "any"
});
</script>