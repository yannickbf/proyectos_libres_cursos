<?php

$query = "";
$queryinsert = "INSERT INTO aceites_tabla_5 (";
$queryvalues = "VALUES (";

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
			$queryinsert .= "nombre_ficha_tecnica, ficha_tecnica, ";
			$queryvalues .= "'$titulo', '$nombre2', ";
			/*$resultado = $conexion->query($query);
			if($resultado){
				echo "se guardo correctamente";
			}
		}else{
			echo "error";
		}*/

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
			$queryinsert .= "nombre_ficha_tecnica2, ficha_tecnica2, ";
			$queryvalues .= "'$titulo2', '$nombre3', ";
			/*$resultado = $conexion->query($query);
			if($resultado){
				echo "se guardo correctamente";
			}
		}else{
			echo "error";
		}*/

	}
}

}

//si existe la imagen enviarla, sino no

$nombre = $_POST['nombre'];
$Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));
$marca = strtolower($_POST['marca']);
$referencia = $_POST['referencia'];
$tipo_aceite = $_POST['tipo_aceite'];
//$viscosi = $_POST['viscosi'];
$capacidad = $_POST['capacidad'];
//$viscosidad = $_POST['viscosidad'];
//$viscosidad = $_POST['viscosidad'];
//$descripcion = $_POST['descripcion'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$informacion = $_POST['informacion'];
$especificaciones = $_POST['especificaciones'];
$ean = $_POST['ean'];
//$clase = $_POST['clase2'];
$tipo_aceite2 = strtolower($_POST['tipo_aceite2']);


$queryinsert .= "nombre_aceite, imagen, marca, referencia, tipo_aceite, capacidad, descripcion, precio, informacion, especificaciones, ean, viscosidad)";
$queryvalues .= "'$nombre','$Imagen', '$marca', '$referencia', '$tipo_aceite', '$capacidad', '$descripcion', '$precio', '$informacion', '$especificaciones', '$ean', '$tipo_aceite2')";
$query = $queryinsert." ".$queryvalues;

$resultado = $conexion->query($query);

if($resultado){
	header("Location: mostrar.php");

}
else{
	echo "No se inserto";
}
?>