<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<html lang="es">
	<title>Mostrar todas las fichas</title>
</head>
<body>
	<center>
		<table border="2">
			<thead>
				<tr>
					<th colspan="20"><a href="nueva_ficha.php">Nuevo</a></th>
				</tr>
				<tr>
					<th>id</th>
					<th>Nombre</th>
					<th>Imagen</th>
					<th>Marca</th>
					<th>Referencia</th>
					<th>Tipo aceite</th>
					<th>Capacidad</th>
					<th>Clase viscosidad</th>
					<th>Descripcion</th>
					<th>Precio</th>
					<th>Informacion</th>
					<th>Especificaciones</th>
					<th>Codigo EAN</th>
					<th>Nombre ficha 1</th>
					<th>Ficha 1</th>
					<th>Nombre ficha 2</th>
					<th>Ficha 2</th>
					<th colspan="2">Operaciones</th>
				</tr>
			</thead>
			<tbody>
				<?php
				include ("conexion.php");

				$query = "SELECT * FROM aceites_tabla_5";
				$resultado = $conexion->query($query);
				while($row = $resultado->fetch_assoc()){
				?>

				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['nombre_aceite']; ?></td>
					<td><img height="70px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/></td>
					<td><?php echo $row['marca']; ?></td>
					<td><?php echo $row['referencia']; ?></td>
					<td><?php echo $row['tipo_aceite']; ?></td>
					<td><?php echo $row['capacidad']; ?></td>
					<td><?php echo $row['viscosidad']; ?></td>
					<td><?php echo $row['descripcion']; ?></td>
					<td><?php echo $row['precio']; ?></td>
					<td><?php echo $row['informacion']; ?></td>
					<td><?php echo $row['especificaciones']; ?></td>
					<td><?php echo $row['ean']; ?></td>
					<td><?php echo $row['nombre_ficha_tecnica']; ?></td>
					<td><?php echo $row['ficha_tecnica']; ?></td>
					<td><?php echo $row['nombre_ficha_tecnica2'] ?></td>
					<td><?php echo $row['ficha_tecnica2']; ?></td>


					<th><a href="modificar.php?id=<?php echo $row['id']; ?>">Modificar</a></th>
					<th><a href="eliminar.php?id=<?php echo $row['id']; ?>">Eliminar</a></th>
				</tr>

				<?php
				}


				?>


			</tbody>
		</table>
	</center>

</body>
</html>