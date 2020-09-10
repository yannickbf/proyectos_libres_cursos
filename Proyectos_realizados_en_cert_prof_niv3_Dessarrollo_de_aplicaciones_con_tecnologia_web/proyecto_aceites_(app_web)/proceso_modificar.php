<?php

include("conexion.php");

$id = $_REQUEST['id'];

//include_once 'config.inc.php';
include ("conexion.php");
if(isset($_POST['subir'])){
$nombre2 = $_FILES['archivo']['name'];
$tipo = $_FILES['archivo']['type'];
$tamanio = $_FILES['archivo']['size'];
$ruta = $_FILES['archivo']['tmp_name'];
$destino = "archivos/".$nombre2;
	if($nombre2 != ""){
		if(copy($ruta, $destino)){
			echo "exito";
			$titulo = $_POST['titulo'];
			//$db=new Conect_MySql();
			$query = "UPDATE aceites_tabla_5 SET nombre_ficha_tecnica = '$titulo', ficha_tecnica = '$nombre2' WHERE id = '$id'";
			$resultado = $conexion->query($query);
			if($resultado){
				echo "se guardo correctamente";
			}
		}else{
			echo "error";
		}

	}
$nombre3 = $_FILES['archivo2']['name'];
$tipo2 = $_FILES['archivo2']['type'];
$tamanio2 = $_FILES['archivo2']['size'];
$ruta2 = $_FILES['archivo2']['tmp_name'];
$destino2 = "archivos/".$nombre3;
	if($nombre3 != ""){
		if(copy($ruta2, $destino2)){
			echo "exito";
			$titulo2 = $_POST['titulo2'];
			//$db=new Conect_MySql();
			$query = "UPDATE aceites_tabla_5 SET nombre_ficha_tecnica2 = '$titulo2', ficha_tecnica2 = '$nombre3' WHERE id = '$id'";
			$resultado = $conexion->query($query);
			if($resultado){
				echo "se guardo correctamente";
			}
		}else{
			echo "error";
		}

	}

$nombreimg = $_FILES['Imagen']['name'];
$Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));
	if($nombreimg != ""){
		$query = "UPDATE aceites_tabla_5 SET imagen = '$Imagen' WHERE id = '$id'";
		$resultado = $conexion->query($query);
	}
}



$nombre = $_POST['nombre'];
//$Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));
$marca = strtolower($_POST['marca']);
$referencia = $_POST['referencia'];
$tipo_aceite = $_POST['tipo_aceite'];
$capacidad = $_POST['capacidad'];
$tipo_aceite2 = strtolower($_POST['tipo_aceite2']);
//$viscosidad = $_POST['viscosidad'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$informacion = $_POST['informacion'];
$especificaciones = $_POST['especificaciones'];
$ean = $_POST['ean'];

$query = "UPDATE aceites_tabla_5 SET nombre_aceite='$nombre', marca='$marca', referencia = '$referencia', tipo_aceite='$tipo_aceite', capacidad='$capacidad', viscosidad = '$tipo_aceite2', descripcion = '$descripcion', precio='$precio', informacion = '$informacion', especificaciones='$especificaciones', ean='$ean' WHERE id = '$id'";
$resultado = $conexion->query($query);

if($resultado){
	//echo "Si se modifico";
	header("Location: mostrar.php");

}
else{
	echo "No se modifico";
}
?>