<?php
session_start();

	if (isset($_REQUEST['envmarca'])){
		$mar = $_REQUEST['envmarca'];
		$_SESSION["marc"] = $mar;
	}

		$marca = $_SESSION["marc"];
		//echo $marca;

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<html lang="es">
	<script src="jquery-3.3.1.min.js"></script>
	<title>Mostrar aceite <?php echo ucfirst($marca) ?></title>
	<link rel="stylesheet" type="text/css" href="estilos_mostrar.css">
	<link rel="stylesheet" type="text/css" href="estilos_boton.css">
	<link rel="stylesheet" href="boton_cantidad/css/style.css">
	<style type="text/css">

		#formulario{
			text-align: center;
			/*margin: auto;*/
			/*background-color: #E5E7E9;*/
			background-color: #FDDB96;
			width: 70%;
			margin: auto;
			padding: 5px 0px;
			border-top: 1px dashed grey;
			border-bottom: 1px dashed grey;
			font-size: 20px;
			margin-bottom: 16px;
		}
		#formulario label{
			margin-right: 40px;
			width: 25px;
			/*cursor: pointer;*/
			cursor: pointer;
			/*border:2px solid grey;
			border-radius: 5px;
			padding: 5px;*/
		}
		input[type="checkbox"]:checked + label {
			background:#FEF5E7;
			padding: 2px;
			border-radius:5px;
    		/*background:url(check_radio_sheet.png) -19px top no-repeat;*/
		}
		/*label{
			width: 500px;
		}*/
		#c1{
			background-color: blue;
		}
	</style>
</head>
<body>
	<div class="contenedor">
	<h1>Mostrar aceite <?php echo ucfirst($marca) ?></h1>
	<?php

	include ("conexion.php");


	$mostrar_5w30 = false;

	$mostrar_5w40 = false;

	$mostrar_10w40 = false;

	$mostrar_15w40 = false;

	$mostrar_0w30 = false;

	$mostrar_0w40 = false;

	$mostrar_5w20 = false;

	$mostrar_5w50 = false;

	$mostrar_10w60 = false;

	$mostrar_10w30 = false;

	$mostrar_0w20 = false;

	$query2 = "SELECT viscosidad FROM aceites_tabla_5 WHERE marca = '$marca'";

	$resultado2 = $conexion->query($query2);
	while ($row = $resultado2->fetch_assoc()) {
		//echo $row['viscosidad'];
		if($row['viscosidad'] == "5w30"){
			//echo "hola3";
			$mostrar_5w30 = true;

		}
		if($row['viscosidad'] == "5w40"){
			$mostrar_5w40 = true;
		}
		if($row['viscosidad'] == "10w40"){
			$mostrar_10w40 = true;
		}
		if($row['viscosidad'] == "15w40"){
			$mostrar_15w40 = true;
		}
		if($row['viscosidad'] == "0w30"){
			$mostrar_0w30 = true;
		}
		if($row['viscosidad'] == "0w40"){
			$mostrar_0w40 = true;
		}
		if($row['viscosidad'] == "5w20"){
			$mostrar_5w20 = true;
		}
		if($row['viscosidad'] == "5w50"){
			$mostrar_5w50 = true;
		}
		if($row['viscosidad'] == "10w60"){
			$mostrar_10w60 = true;
		}
		if($row['viscosidad'] == "10w30"){
			$mostrar_10w30 = true;
		}
		if($row['viscosidad'] == "0w20"){
			$mostrar_0w20 = true;
		}
	}

	$query = "SELECT * FROM aceites_tabla_5 WHERE marca = '$marca'AND";

	$viscosidad_5w30 = false;

	$viscosidad_5w40 = false;

	$viscosidad_10w40 = false;

	$viscosidad_15w40 = false;

	$viscosidad_0w30 = false;

	$viscosidad_0w40 = false;

	$viscosidad_5w20 = false;

	$viscosidad_5w50 = false;

	$viscosidad_10w60 = false;

	$viscosidad_10w30 = false;

	$viscosidad_0w20 = false;

	/*$marca_motul =  false;

	$marca_opel = false;

	$marca_repsol = false;

	$marca_shell = false;

	$marca_total = false;

	$marca_toyota = false;

	$marca_valvoline = false;*/

	if(!(empty($_GET['viscosidad']))){
		foreach($_GET['viscosidad'] as $viscosidad){
			//echo $aceite;

			if($viscosidad == "5w30"){
				//echo "hola";
				$viscosidad_5w30 = true;
				$query .= " viscosidad = '5w30' AND marca = '$marca' OR";
				/*executa($servidor,$usuari,$contra,$bd,"
					WHERE tipo=".0W30."
");*/


				//echo $aceite;
			}
			if($viscosidad == "5w40"){
				$viscosidad_5w40 = true;
				$query .= " viscosidad = '5w40' AND marca = '$marca' OR";
			}
			if($viscosidad == "10w40"){
				$viscosidad_10w40 = true;
				$query .= " viscosidad = '10w40' AND marca = '$marca' OR";
			}
			if($viscosidad == "15w40"){
				$viscosidad_15w40 = true;
				$query .= " viscosidad = '15w40' AND marca = '$marca' OR";
			}
			if($viscosidad == "0w30"){
				$viscosidad_0w30 = true;
				$query .= " viscosidad = '0w30' AND marca = '$marca' OR";
			}
			if($viscosidad == "0w40"){
				$viscosidad_0w40 = true;
				$query .= " viscosidad = '0w40' AND marca = '$marca' OR";
			}
			if($viscosidad == "5w20"){
				$viscosidad_5w20 = true;
				$query .= " viscosidad = '5w20' AND marca = '$marca' OR";
			}
			if($viscosidad == "5w50"){
				$viscosidad_5w50 = true;
				$query .= " viscosidad = '5w50' AND marca = '$marca' OR";
			}
			if($viscosidad == "10w60"){
				$viscosidad_10w60 =  true;
				$query .= " viscosidad = '10w60' AND marca = '$marca' OR";
			}
			if($viscosidad == "10w30"){
				$viscosidad_10w30 = true;
				$query .= " viscosidad = '10w30' AND marca = '$marca' OR";
			}
			if($viscosidad == "0w20"){
				$viscosidad_0w20 = true;
				$query .= " viscosidad = '0w20' AND marca = '$marca' OR";
			}
			/*if($marca == "motul"){
				$marca_motul = true;
				$query .= " marca = 'motul' OR";
			}

			if($marca == "opel"){
				echo "hola3";
				$marca_opel = true;
				$query .= " marca = 'opel' OR";
			}
			/*if($marca == "repsol"){
				$marca_repsol = true;
				$query .= " marca = 'repsol' OR";
			}*/
			/*if($marca == "shell"){
				$marca_shell = true;
				$query .= " marca = 'shell' OR";
			}*/
			/*if($marca == "total"){
				echo "hola2";
				$marca_total = true;
				$query .= " marca = 'total' OR";
			}*/
			/*if($marca == "toyota"){
				$marca_toyota = true;
				$query .= " marca = 'toyota' OR";
			}
			if($marca == "valvoline"){
				$marca_valvoline = true;
				$query .= " marca = 'valvoline' OR";
			}*/
		}
	}
	$query = substr($query, 0, -3);
	//echo $query;
?>
	<form action="mostrar_por_marca.php" method="get" id="formulario">
		<?php if($mostrar_5w30) { ?>
		<input type="checkbox" name="viscosidad[]" value="5w30" id="c1" <?php if($viscosidad_5w30) echo "checked"?>><label for="c1"><span></span> Viscosidad 5w30</label>
		<?php } ?>
		<?php if($mostrar_5w40) { ?>
		<input type="checkbox" name="viscosidad[]" value="5w40" id="c2" <?php if($viscosidad_5w40) echo "checked" ?>><label for="c2"><span></span> Viscosidad 5w40</label>
		<?php } ?>
		<?php if($mostrar_10w40) { ?>
		<input type="checkbox" name="viscosidad[]" value="10w40" id="c3" <?php if($viscosidad_10w40) echo "checked"?>><label for="c3"><span></span> Viscosidad 10w40</label>
		<?php } ?>
		<?php if($mostrar_15w40) { ?>
		<input type="checkbox" name="viscosidad[]" value="15w40" id="c4" <?php if($viscosidad_15w40) echo "checked"?>><label for="c4"><span></span> Viscosidad 15w40</label>
		<?php } ?>
		<?php if($mostrar_0w30) { ?>
		<input type="checkbox" name="viscosidad[]" value="0w30" id="c5" <?php if($viscosidad_0w30) echo "checked"?>><label for="c5"><span></span> Viscosidad 0w30</label>
		<?php } ?>
		<?php if($mostrar_0w40) { ?>
		<input type="checkbox" name="viscosidad[]" value="0w40" id="c6" <?php if($viscosidad_0w40) echo "checked"?>><label for="c6"><span></span> Viscosidad 0w40</label>
		<?php } ?>
		<?php if($mostrar_5w20) { ?>
		<input type="checkbox" name="viscosidad[]" value="5w20" id="c7" <?php if($viscosidad_5w20) echo "checked"?>><label for="c7"><span></span> Viscosidad 5w20</label>
		<?php } ?>
		<?php if($mostrar_5w50) { ?>
		<input type="checkbox" name="viscosidad[]" value="5w50" id="c8" <?php if($viscosidad_5w50) echo "checked"?>><label for="c8"><span></span> Viscosidad 5w50</label>
		<?php } ?>
		<?php if($mostrar_10w60) { ?>
		<input type="checkbox" name="viscosidad[]" value="10w60" id="c9" <?php if($viscosidad_10w60) echo "checked"?>><label for="c9"><span></span> Viscosidad 10w60</label>
		<?php } ?>
		<?php if($mostrar_10w30) { ?>
		<input type="checkbox" name="viscosidad[]" value="10w30" id="c10" <?php if($viscosidad_10w30) echo "checked"?>><label for="c10"><span></span> Viscosidad 10w30</label>
		<?php } ?>
		<?php if($mostrar_0w20) { ?>
		<input type="checkbox" name="viscosidad[]" value="0w20" id="c11" <?php if($viscosidad_0w20) echo "checked"?>><label for="c11"><span></span> Viscosidad 0w20</label>
		<?php } ?>



	</form>

	<script type="text/javascript">
		$(document).ready(function(){
			$("#formulario").on("change", "input:checkbox", function(){
					$("#formulario").submit();
						});
					});
	</script>

	<?php
		include ("conexion.php");

		//$query = "SELECT * FROM aceites_tabla_5";
		$query .= " ORDER BY viscosidad ASC";
		$resultado = $conexion->query($query);
		while($row = $resultado->fetch_assoc()){
	?>

	<table>
	<tr>
		<td class="timagen"><a target="_blank" href="mostrar_aceite_seleccionado.php?id=<?php echo $row['id']; ?>"><img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/></a></td>
		<td><h5><a target="_blank" href="mostrar_aceite_seleccionado.php?id=<?php echo $row['id']; ?>"><?php echo $row['nombre_aceite']; ?></a><span class="referencia"><?php echo " ". $row['referencia']; ?></span></h5>
			<img class="imglogo" src="img/<?php echo $row['marca']; ?>.jpg"><br>
			<span><b>Referencia :</b></span><?php echo $row['referencia']; ?><br>
		<span><b>Aceite: </b></span><?php echo $row['tipo_aceite']; ?><br>
		<span><b>Capacidad: </b><span><?php echo $row['capacidad']; ?><span> litros</span><br>
		<span><b>Clase viscosidad: </b></span><?php echo $row['viscosidad']; ?>
		<br><br>
		<?php echo $row['descripcion']; ?><br><br>
		<?php include ("boton_cantidad/boton_cantidad.php"); ?>
		<?php include ("boton_anadir_al_carrito.php");?>
		<span class="precio"><?php echo $row['precio']; ?>€</span>

		</td>
	</tr>
	
			</table>

				<?php
				}


				?>

	<!--<div style="width: 100px; height: 2000px; background: :yellow">
	</div>-->
	
	</div>

	<script>
window.onload=function(){
var pos=window.name || 0;
window.scrollTo(0,pos);
}
window.onunload=function(){
window.name=self.pageYOffset || (document.documentElement.scrollTop+document.body.scrollTop);
}
</script>

</body>
</html>