<?php
	require_once('conexion.php');
	$conexion=conectarBD();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Insertar</title>
</head>
<body>

<form method="post" action="">
	Id: <input type="text" name="ii"> <br/>
	Nombre Completo: <input type="text" name="nn"> <br/>
	Cargo: <input type="text" name="cc"> <br/>
	<input type="submit" value="Guardar">
</form>
<a href="mostar.php"><input type="submit" value="Mostrar Tabla"></a><br>
<a href="Eliminar.php"><input type="submit" value="Eliminar Persona"></a>
<?php
	if($_POST)
	{
		$i=$_POST['ii'];
		$n=$_POST['nn'];
		$c=$_POST['cc'];
		pg_query("insert into persona(id, nombreC,cargo) values('$i','$n','$c')");
		echo "<h2>Dato guardado";
	}
?>
</body>
</html>