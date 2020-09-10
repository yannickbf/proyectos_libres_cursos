<!DOCTYPE html>
<html>
<head>
	<title>Lista aceites</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<html lang="es">
	<link rel="stylesheet" type="text/css" href="estilos_lista.css">
</head>
<body>

	<table>
		<th>Por viscosidad</th>

	<?php
				include ("conexion.php");

				$query = "SELECT DISTINCT viscosidad FROM aceites_tabla_5";
				$resultado = $conexion->query($query);
				while($row = $resultado->fetch_assoc()){
				?>



				<tr>					
					<td>
						<a href="mostrar_por_viscosidad.php?vis=<?php echo $row['viscosidad']; ?>">
						<h5>Aceite <?php echo $row['viscosidad']; ?></h5>
						</a>
					</td>
				</tr>



				<?php

				}

				?>

			</table>
			<table>

				<th>Por marca</th>

				<?php 
				$query = "SELECT DISTINCT marca FROM aceites_tabla_5 ORDER BY marca ASC";
				$resultado = $conexion->query($query);
				while($row = $resultado->fetch_assoc()){
					//$viscosidad = ucfirst($viscosidad);
				?>
				<tr>
					<td>
						<a href="mostrar_por_marca.php?envmarca=<?php echo $row['marca'];?>">
						<h5>Aceite <?php echo ucfirst($row['marca']); ?></h5>
						</a>
					</td>
				</tr>

				<?php

				}

				?>

				</table>				

</body>
</html>