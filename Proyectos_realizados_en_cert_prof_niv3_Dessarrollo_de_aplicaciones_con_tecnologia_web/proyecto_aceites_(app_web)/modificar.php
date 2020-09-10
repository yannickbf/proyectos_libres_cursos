<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<html lang="es">
	<title>Modificar ficha</title>
</head>
<body>
	<?php
				include ("conexion.php");

				$id = $_REQUEST['id'];

				$query = "SELECT * FROM aceites_tabla_5 WHERE id = '$id'";
				$resultado = $conexion->query($query);
				$row = $resultado->fetch_assoc();
				?>
	<center><br/><br/><br/>
		<form action="proceso_modificar.php?id=<?php echo $row['id'];?>" method="POST" enctype="multipart/form-data">
			<input type="text" REQUIRED name="nombre" placeholder="Nombre..." value="<?php echo $row['nombre_aceite']; ?>"/><br/><br/>
			<img height="100px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/><br/><br/>
			<input type="file" name="Imagen"/><br/><br/>
			<input type="text" REQUIRED name="marca" placeholder="Marca..." value="<?php echo $row['marca']; ?>"><br/><br/>
			<input type="text" REQUIRED name="referencia" placeholder="Referencia..." value="<?php echo $row['referencia']; ?>"><br/><br/>
			<input type="text" REQUIRED  name="tipo_aceite" placeholder="Tipo aceite ej. Aceite sintetico" value="<?php echo $row['tipo_aceite']; ?>" /><br/><br/>
			<input type="text" REQUIRED name="capacidad" placeholder="Capacidad en litros" value="<?php echo $row['capacidad']; ?>" /><br/><br/>
			<input type="text" REQUIRED name="tipo_aceite2" placeholder="Viscosidad..." value="<?php echo $row['viscosidad']; ?>"><br/><br/>
			<!--<input type="text" REQUIRED name="viscosidad" placeholder="Clase viscosidad" value="<?php //echo $row['viscosidad']; ?>" /><br/><br/>-->
			<textarea name="descripcion" placeholder="Descripcion del producto"><?php echo $row['descripcion']; ?></textarea><br/><br/>
			<input type="text" name="precio" placeholder="Precio..." value="<?php echo $row['precio']; ?>"><br/><br/>
			<textarea type="text" name="informacion" placeholder="Informacion..." ><?php echo $row['informacion']; ?></textarea><br/><br/>
			<textarea type="text" name="especificaciones" placeholder="Especificaciones..."><?php echo $row['especificaciones']; ?></textarea><br/><br/>
			<input type="ean" name="ean" placeholder="EAN..." value="<?php echo $row['ean']; ?>"><br/><br/>
			<input type="text" name="titulo" placeholder="Titulo archivo ficha 1" value="<?php echo $row['nombre_ficha_tecnica']; ?>">
			<br><br>
			<input type="file" name="archivo">
			<br><br>
			<input type="text" name="titulo2" placeholder="Titulo archivo ficha 2" value="<?php echo $row['nombre_ficha_tecnica2']; ?>">
			<br><br>
			<input type="file" name="archivo2">
			<br><br>
			<a href="https://wordtohtml.net/" target="_blank">Editor de texto</a>
			<br><br>
			<input type="submit" value="Aceptar" name="subir">
		</form>
	</center>

</body>
</html>