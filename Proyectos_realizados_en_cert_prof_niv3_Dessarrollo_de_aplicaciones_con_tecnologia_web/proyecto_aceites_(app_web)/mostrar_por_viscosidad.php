<?php
session_start();

if (isset($_REQUEST['vis'])){
		$vis = $_REQUEST['vis'];
		$_SESSION["viscos"] = $vis;
	}
		$viscosi = $_SESSION["viscos"];
		//echo $viscosi;
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<html lang="es">
	<script src="jquery-3.3.1.min.js"></script>
	<title>Mostrar aceite <?php echo $viscosi ?></title>
	<link rel="stylesheet" type="text/css" href="estilos_mostrar.css">
	<link rel="stylesheet" type="text/css" href="estilos_boton.css">
	<link rel="stylesheet" href="boton_cantidad/css/style.css">
	<style type="text/css">
		#formulario{
			text-align: center;
			/*margin: auto;*/
			background-color: white /*#FDDB96*/;
			width: 70%;
			margin: auto;
			padding: 5px 0px;
			border-top: 1px dashed grey;
			border-bottom: 1px dashed grey;
			margin-bottom: 16px;
		}
		input[type="checkbox"]:checked + label img {
			border: 2px solid green;
		}
		label img{
			height: 100px;
			border-radius:5px;
			padding: 0px 5px;
			margin: 0px 5px;
			cursor:pointer;
			/*height:100px;*/
		}
	</style>
</head>
<body>
	<div class="contenedor">
	<h1>Mostrar aceite <?php echo $viscosi ?></h1>
	<?php

	include ("conexion.php");

	
	$mostrar_castrol = false;

	$mostrar_comline = false;

	$mostrar_elf = false;

	//$mostrar_ford = false;

	$mostrar_galp = false;

	$mostrar_iada = false;

	//$mostrar_liqui = false;

	//$mostrar_mobil = false;

	//$mostrar_motul = false;

	//$mostrar_opel =  false;

	$mostrar_petronas = false;

	$mostrar_repsol = false;

	//$mostrar_shell = false;

	//$mostrar_toyota = false;

	$mostrar_total = false;

	//$mostrar_valvoline = false;

	$query2 = "SELECT marca FROM aceites_tabla_5 WHERE viscosidad = '$viscosi'";

	$resultado2 = $conexion->query($query2);
		while($row = $resultado2->fetch_assoc()){

			//echo $row['marca'];
			if($row['marca'] == "castrol"){
				//echo "hola4";
				$mostrar_castrol = true;
			}
			if($row['marca'] == "comline"){
				$mostrar_comline = true;
			}
			if($row['marca'] == "elf"){
				$mostrar_elf = true;

			}
			/*if($row['marca'] == "ford"){
				$mostrar_ford = true;
			}*/
			if($row['marca'] == "galp"){
				$mostrar_galp = true;
			}
			if($row['marca'] == "iada"){
				$mostrar_iada = true;
			}
			/*if($row['marca'] == "liqui"){
				$mostrar_liqui = true;
			}*/
			/*if($row['marca'] == "mobil"){
				$mostrar_mobil = true;
			}*/
			/*if($row['marca'] == "motul"){
				$mostrar_motul =  true;
			}*/
			/*if($row['marca'] == "opel"){
				$mostrar_opel = true;
			}*/
			if($row['marca'] == "petronas"){
				$mostrar_petronas = true;
			}
			if($row['marca'] == "repsol"){
				$mostrar_repsol = true;
			}
			/*if($row['marca'] == "shell"){
				$mostrar_shell = true;
			}*/
			/*if($row['marca'] == "toyota"){
				$mostrar_toyota = true;
			}*/
			if($row['marca'] == "total"){
				$mostrar_total = true;
			}
			/*if($row['marca'] == "valvoline"){
				$mostrar_valvoline = true;
			}*/


		}


	$query = "SELECT * FROM aceites_tabla_5 WHERE viscosidad = '$viscosi'AND";

	$marca_castrol = false;

	$marca_comline = false;

	$marca_elf = false;

	//$marca_ford = false;

	$marca_galp = false;

	$marca_iada =  false;

	//$marca_liqui = false;

	//$marca_mobil = false;

	//$marca_motul =  false;

	//$marca_opel = false;

	$marca_petronas = false;

	$marca_repsol = false;

	//$marca_shell = false;

	$marca_total = false;

	//$marca_toyota = false;

	//$marca_valvoline = false;

	if(!(empty($_GET['marca']))){
		foreach($_GET['marca'] as $marca){
			//echo $aceite;

			if($marca == "castrol"){
				//echo "hola";
				$marca_castrol = true;
				$query .= " marca = 'castrol' AND viscosidad = '$viscosi' OR";
				/*executa($servidor,$usuari,$contra,$bd,"
					WHERE tipo=".0W30."
");*/


				//echo $aceite;
			}
			if($marca == "comline"){
				$marca_comline = true;
				$query .= " marca = 'comline' AND viscosidad = '$viscosi' OR";
			}
			if($marca == "elf"){
				$marca_elf = true;
				$query .= " marca = 'elf' AND viscosidad = '$viscosi' OR";
			}
			/*if($marca == "ford"){
				$marca_ford = true;
				$query .= " marca = 'ford' OR";
			}*/
			if($marca == "galp"){
				$marca_galp = true;
				$query .= " marca = 'galp' AND viscosidad = '$viscosi' OR";
			}
			if($marca == "iada"){
				$marca_iada = true;
				$query .= " marca = 'iada' AND viscosidad = '$viscosi' OR";
			}
			/*if($marca == "liqui"){
				$marca_liqui = true;
				$query .= " marca = 'liqui' OR";
			}*/
			/*if($marca == "mobil"){
				$marca_mobil = true;
				$query .= " marca = 'mobil' OR";
			}*/
			/*if($marca == "motul"){
				$marca_motul = true;
				$query .= " marca = 'motul' OR";
			}*/
			/*if($marca == "opel"){
				echo "hola3";
				$marca_opel = true;
				$query .= " marca = 'opel' OR";
			}*/
			if($marca == "petronas"){
				$marca_petronas = true;
				$query .= " marca = 'petronas' OR";
			}
			if($marca == "repsol"){
				$marca_repsol = true;
				$query .= " marca = 'repsol' AND viscosidad = '$viscosi' OR";
			}
			//$query = "SELECT * FROM aceites_tabla_5 WHERE viscosidad = '5w30' AND marca = 'repsol' OR marca = 'total' AND viscosidad = '5w30'";
			/*if($marca == "shell"){
				$marca_shell = true;
				$query .= " marca = 'shell' OR";
			}*/
			if($marca == "total"){
				//echo "hola2";
				$marca_total = true;
				$query .= " marca = 'total' AND viscosidad = '$viscosi' OR";
			}
			/*if($marca == "toyota"){
				$marca_toyota = true;
				$query .= " marca = 'toyota' OR";
			}*/
			/*if($marca == "valvoline"){
				$marca_valvoline = true;
				$query .= " marca = 'valvoline' OR";
			}*/
		}
	}
	$query = substr($query, 0, -3);
	//echo $query;
?>
	<form action="mostrar_por_viscosidad.php" method="get" id="formulario">
		<?php if($mostrar_castrol){ ?>
		<input type="checkbox" name="marca[]" value="castrol" id="c1" <?php if($marca_castrol) echo "checked"?>><label for="c1"><span></span><img src="img/castrol.jpg"></label>
		<?php } ?>
		<?php if($mostrar_comline){ ?>
		<input type="checkbox" name="marca[]" value="comline" id="c2" <?php if($marca_comline) echo "checked"?>><label for="c2"><span></span><img src="img/comline.jpg"></label>
		<?php } ?>
		<?php if($mostrar_elf){ ?>
		<input type="checkbox" name="marca[]" value="elf" id="c3" <?php if($marca_elf) echo "checked"?>><label for="c3"><span></span><img src="img/elf.jpg"></label>
		<?php } ?>
		<!--<?php /*if($mostrar_ford){ ?>
		<input type="checkbox" name="marca[]" value="ford" <?php if($marca_ford) echo "checked*" ?>>Ford
		<?php }*/ ?>-->
		<?php if($mostrar_galp){ ?>
		<input type="checkbox" name="marca[]" value="galp" id="c4" <?php if($marca_galp) echo "checked"?>><label for ="c4"><span></span><img src="img/galp.jpg"></label>
		<?php } ?>
		<?php if($mostrar_iada){ ?>
		<input type="checkbox" name="marca[]" value="iada" id="c5" <?php if($marca_iada) echo "checked"?>><label for="c5"><span></span><img src="img/iada.jpg"></label>
		<?php } ?>
		<!--<?php /*if($mostrar_liqui) { ?>
		<input type="checkbox" name="marca[]" value="liqui" <?php if($marca_liqui) echo "checked"?>>Liqui moly
		<?php }*/ ?>-->
		<!--<?php /*if($mostrar_mobil) { ?>
		<input type="checkbox" name="marca[]" value="mobil" <?php if($marca_mobil) echo "checked" ?>>Mobil
		<?php }*/ ?>-->
		<!--<?php /*if($mostrar_motul) { ?>
		<input type="checkbox" name="marca[]" value="motul" <?php if($marca_motul) echo "checked" ?>>Motul
		<?php }*/ ?>-->
		<!--<?php /*if($mostrar_opel) { ?>
		<input type="checkbox" name="marca[]" value="opel" <?php if($marca_opel) echo "checked" ?>>Opel
		<?php }*/ ?>-->
		<?php if($mostrar_petronas){ ?>
		<input type="checkbox" name="marca[]" value="petronas" id="c6" <?php if($marca_petronas) echo "checked"?>>
		<label for="c6"><span></span><img src= "img/petronas.jpg"></label>
		<?php } ?>
		<?php if($mostrar_repsol) { ?>
		<input type="checkbox" name="marca[]" value="repsol" id="c7" <?php if($marca_repsol) echo "checked"?>><label for="c7"><span></span><img src="img/repsol.jpg"></label>
		<?php } ?>
		<!--<?php /*if($mostrar_shell) { ?>
		<input type="checkbox" name="marca[]" value="shell" <?php if($marca_shell) echo "checked"?>>Shell
		<?php }*/ ?>-->
		<!--<?php /*if($mostrar_toyota) { ?>
		<input type="checkbox" name="marca[]" value="toyota" <?php if($marca_toyota) echo "checked"?>>Toyota
		<?php }*/ ?>-->
		<?php if($mostrar_total) { ?>
		<input type="checkbox" name="marca[]" value="total" id="c8" <?php if($marca_total) echo "checked" ?>><label for="c8"><span></span><img src="img/total.jpg"></label>
		<?php } ?>
		<!--<?php /*if($mostrar_valvoline) { ?>
		<input type="checkbox" name="marca[]" value="valvoline" <?php if($marca_valvoline) echo "checked"?>>Valvoline
		<?php }*/ ?>-->

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
		$query .= " ORDER BY marca ASC";
		//$query = "SELECT * FROM aceites_tabla_5 WHERE viscosidad = '5w30' AND marca = 'repsol' OR marca = 'total' AND viscosidad = '5w30'";
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
		<span><b>Capacidad: </b></span><?php echo $row['capacidad']; ?><span> litros<br>
		<span><b>Clase viscosidad: </b></span><?php echo $row['viscosidad']; ?>
		<br><br>
		<?php echo $row['descripcion']; ?><br>
		<!--<span>Precio: </span>--><br>

		<!--<?php //include ("boton_cantidadv2.php"); ?>-->
<!--<input type="number" name="cantidad">-->
		<?php include ("boton_cantidad/boton_cantidad.php"); ?><?php include ("boton_anadir_al_carrito.php"); ?><span class="precio"><?php echo $row['precio']; ?>€</span>
		<!--<a href="mostrar_aceite_seleccionado.php?id=<?php //echo $row['id']; ?>">Ir</a>-->

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