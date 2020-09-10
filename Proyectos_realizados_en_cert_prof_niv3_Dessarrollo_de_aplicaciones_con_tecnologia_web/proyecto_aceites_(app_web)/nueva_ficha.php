<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<html lang="es">
	<title>Crear una nueva ficha</title>
</head>
<body>
	<center><br/><br/><br/>
		<form action="proceso_guardar.php" method="POST" enctype="multipart/form-data">
			<input type="text" REQUIRED name="nombre" placeholder="Nombre aceite..." value=""/><br/><br/>
			<input type="file" REQUIRED name="Imagen" /><br/><br/>
			<input type="text" REQUIRED name="marca" placeholder="Marca..." /><br/><br/>
			<input type="text" REQUIRED name="referencia" placeholder="Referencia..." /><br/><br/>
			<input type="text" REQUIRED  name="tipo_aceite" placeholder="Tipo aceite ej. Aceite sintetico" value="" /><br/><br/>
			<input type="text" REQUIRED name="capacidad" placeholder="Capacidad en litros" value="" /><br/><br/>
			<input type="text" name="tipo_aceite2" placeholder="viscosidad" /><br><br>
			<textarea name="descripcion" placeholder="Descripcion..."></textarea><br/><br/>
			<input type="text" name="precio" placeholder="Precio" /><br><br>
			<textarea name="informacion" placeholder="Informacion"/></textarea><br><br>
			<textarea name="especificaciones" placeholder="Especificaciones" /></textarea><br><br>
			<input type="text" name="ean" placeholder="EAN" /><br><br>
			
			<input type="text" name="titulo" placeholder="Titulo archivo ficha 1">
			<br><br>
			<input type="file" name="archivo">
			<br><br>
			<input type="text" name="titulo2" placeholder="Titulo archivo ficha 2">
			<br><br>
			<input type="file" name="archivo2">
			<br><br>
			<a href="https://wordtohtml.net/" target="_blank">Editor de texto</a>
			<br><br>
			<input type="submit" value="Aceptar" name="subir">
			<!--solo se muestra, envia si es un numero mysql-->
		</form>
	</center>

</body>
</html>