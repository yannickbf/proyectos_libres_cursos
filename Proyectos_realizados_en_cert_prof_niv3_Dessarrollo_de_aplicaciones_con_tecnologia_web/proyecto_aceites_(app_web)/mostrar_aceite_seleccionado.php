<!DOCTYPE html>
<html>
<head>
	<title>Mostrar la ficha del aceite</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<link rel="stylesheet" type="text/css" href="estilos_boton.css">
	<link rel="stylesheet" href="boton_cantidad/css/style.css">
	<style type="text/css">
		*{
			font-family: "arial";
			color: #1B2631;
		}
		table{
			width:70%;
			border:1px dashed grey;
			padding: 10px;
		}
		.timagen{
			width:30%;
			text-align: center;
		}
		h5{
			font-size:18px;
			color:#3a3939;
			margin-top: 5px;
			/*padding-bottom: 3px;*/
			margin-block-start: 0;
    		margin-block-end: 0;
		}
		h4{
			padding: 5px;
			background-color: #FBD280 /*#FCC351*/;
			border-radius: 5px;
		}
		.descargas{
			width:200px;
			height: 40px;
			margin-top: 0px;
		}
		.precio{
			font-size:40px;
			text-align: right;
			display: inline;
			float: right;
		}
		.referencia{
			font-size:12px;
			color:blue;
		}
		.imglogo{
			height: 70px;
		}
		
	</style>
</head>
<body>
	<center>
		<table>
			<tbody>
				<?php
				include ("conexion.php");

				$id = $_REQUEST['id'];

				$query = "SELECT * FROM aceites_tabla_5 WHERE id = '$id'";
				$resultado = $conexion->query($query);
				$row = $resultado->fetch_assoc();
				?>

				<tr>
					<td class="timagen"><img height="270px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/></td>
					<td><h5><?php echo $row['nombre_aceite']; ?><span class="referencia"><?php echo " ". $row['referencia']; ?></span></h5>
						<img class="imglogo" src="img/<?php echo $row['marca']; ?>.jpg"><br>
						<span><b>Referencia :</b></span><?php echo $row['referencia']; ?><br>
						<span><b>Aceite: </b></span><?php echo $row['tipo_aceite']; ?><br>
						<span><b>Capacidad: </b><span><?php echo $row['capacidad']; ?><span> litros</span><br>
						<span><b>Clase viscosidad: </b></span><?php echo $row['viscosidad']; ?>
						<br><br>
						<?php echo $row['descripcion']; ?><br><br>
						<?php include ("boton_cantidad/boton_cantidad.php"); ?>

						<?php include ("boton_anadir_al_carrito.php"); ?>
						<!--<span>Precio: </span>--><span class="precio"><?php echo $row['precio']; ?>€</span>
						<!--<a href="mostrar_aceite_seleccionado.php?id=<?php //echo $row['id']; ?>">Ir</a>-->

					</td>
				</tr>
				<tr>
					<td colspan="2">
						<h4>Información: </h4>
						<?php echo $row['informacion'];?>
						<!--/*<h4>Caracteristicas: </h4>
						<span>Aceite: </span><?php //echo $row['tipo_aceite']; ?><br>
						<span>Capacidad[litros]: </span><?php //echo $row['capacidad']; ?><br>
						<span>Clase viscosidad SAE: </span><?php //echo $row['viscosidad']; ?>
						<br><br>*/-->
						<h4>Especificaciones</h4>
						<?php echo $row['especificaciones']; ?>
						<h4>Codigo EAN: </h4>
						<?php echo $row['ean'];?>
						<h4>Archivos informativos: </h4>
						<div class="descargas"><a href="archivos/<?php echo $row['ficha_tecnica'] ?>"><?php echo $row['nombre_ficha_tecnica']; ?></a><br><br>

						<!--<a href="img/<?php //echo $row['ficha_tecnica']; ?>.pdf">Descargar</a></div>--></div>


						
						<?php 
						if($row['nombre_ficha_tecnica2']!=''){?>
							<a href="archivos/<?php echo $row['ficha_tecnica2'] ?>"><?php echo $row['nombre_ficha_tecnica2']; ?></a><br><br>
							<?php
						}

						?>

					
						
					


						<!--<?php //echo $row['nombre_ficha_tecnica2']; ?>-->
						<!--<?php //header('Content-Type: application/pdf'); ?>-->
						

					</td>
				</tr>

				


			</tbody>
		</table>
	</center>

</body>
</html>