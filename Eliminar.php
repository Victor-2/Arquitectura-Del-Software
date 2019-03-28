<?php
	require_once('conexion.php');
	$conexion=conectarBD();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Eliminar</title>
</head>
<body>
	<form method="post" action="">
		incertar Id a eliminar: <input type="text" name="ii">	
		<input type="submit" value="Eliminar">
	</form>
	<a href="mostar.php"><input type="submit" value="Mostrar Tabla"></a>
	<a href="insertar.php"><input type="submit" value="Volver"></a>
	<?php
		if($_POST)
		{
			$i=$_POST['ii'];
			pg_query("delete from persona where id=$i");
		}
	?>
</body>
</html>