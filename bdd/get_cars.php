<?php

include('conex.php');
$response = new stdClass();


$datos = array();
$i=0;

$sql = "SELECT * FROM all_cars WHERE estado=1";

$result = mysqli_query($conex,$sql);



while($row = mysqli_fetch_array($result)){
    $obj = new stdClass();

    $obj->id= $row[0];
    $obj->nombre = $row[1];
    $obj->descrip = $row['descrip'];
    $obj->precio = $row['precio'];
    $obj->rutimg = $row['rutimg'];
    $obj->tipo = $row['tipo'];
    $obj->marca = $row['marca'];
    $obj->modelo = $row['modelo'];
    $obj->vendedor = $row['vendedor'];
    $obj->contacto = $row['contacto'];

    $datos[$i]= $obj;
    $i++;
    
}
//var_dump($result);  
$response->datos = $datos;



mysqli_close($conex);
header('Content-Type: application/json');
echo json_encode($response);    

?>