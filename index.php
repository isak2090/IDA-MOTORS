<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IDA Motors - Home</title>
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/estilo.css">
  <script src="SweetAlert/dist/sweetalert2.all.min.js"></script>

</head>
<body id="pedidos">
  <header style="height: 70px">
	</header>

  <div style="height: 30px"></div>

  <div class="container">
    <h2>Pedidos</h2>
  	<table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Nombre</th>
          <th scope="col">Descripcion</th>
          <th scope="col">Precio</th>
          <th scope="col">Imagen</th>
          <th scope="col">Tipo</th>
          <th scope="col">Marca</th>
          <th scope="col">Modelo</th>
          <th scope="col">Vendedor</th>
          <th scope="col">Contacto(Num.)</th>
          <th scope="col"> <a href="nuevo_prod1.php"> <button type="button" class="btn btn-info">Nuevo</button> </a> </th>
  		  </tr>
      </thead>

      <?php
        include "conexion.php";
        $sentecia="SELECT * FROM allcars";
        $resultado= $conexion->query($sentecia) or die (mysqli_error($conexion));
        while($fila=$resultado->fetch_assoc())
        {
          echo "<tr class='table-warning'>";
            echo "<td>"; echo $fila['id']; echo "</td>";
            echo "<td>"; echo $fila['nombre']; echo "</td>";
            echo "<td>"; echo $fila['descrip']; echo "</td>";
            echo "<td>"; echo $fila['precio']; echo "</td>";
            echo "<td>"; echo "<img src='".$fila['imagen']."' width='70' >"; echo "</td>";
            echo "<td>"; echo $fila['tipo']; echo "</td>";
            echo "<td>"; echo $fila['marca']; echo "</td>";
            echo "<td>"; echo $fila['modelo']; echo "</td>";
            echo "<td>"; echo $fila['vendedor']; echo "</td>";
            echo "<td>"; echo $fila['contacto']; echo "</td>";
            echo "<td> <a href='aceptar_prod.php?id=".$fila['id']."'> <button type='button' class='btn btn-success'>Aceptar</button> </a></td>";
            echo "<td><a href='eliminar_prod.php?id=".$fila['id']."'> <button type='button' class='btn btn-danger'>Eliminar</button> </a></td>";
          echo "</tr>";
        }
      ?>

  	</table>
  </div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>
</html>