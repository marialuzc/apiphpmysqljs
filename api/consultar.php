<?php
// 
// http://localhost/GestionEmpleados/api/consultar.php

$conexion = new mysqli("localhost","root","","dbclientes") or die("No se pudo conectar".mysqli_connect_error());

$consulta = "SELECT * FROM `cliente`";

$result = mysqli_query($conexion,$consulta);
$clientes = array();

while($fila = mysqli_fetch_array($result)){
    array_push($clientes,$fila);
}

echo json_encode($clientes);
mysqli_free_result($result);
mysqli_close($conexion);

?>