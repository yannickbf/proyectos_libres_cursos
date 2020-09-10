<?php

include("conexion.php");

$id = $_REQUEST['id'];



$query = "DELETE FROM aceites_tabla_5 WHERE id = '$id'";
$resultado = $conexion->query($query);

if($resultado){
	//echo "Si se elimino";
	header("Location: mostrar.php");

}
else{
	echo "No se elimino";
}
?>