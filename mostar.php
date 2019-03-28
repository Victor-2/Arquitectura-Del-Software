<?php
require_once('conexion.php');
$conexion=conectarBD();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tarea</title>
</head>
<body>
	<?php
		$query="select *from persona";
		$res=pg_query($conexion,$query);
		$nr=pg_num_rows($res);
		if($nr>0)
		{	
			echo"<table border=1>";
			echo"<tr>";
			echo"<td><b>Id</td>";
			echo"<td><b>Nombre Completo</td>";
			echo"<td><b>Cargo</td>";
			echo"</tr>";
			while($filas=pg_fetch_array($res))
			{
				echo"<tr>";
				echo "<td>".$filas["id"]."</td>";
				echo "<td>".$filas["nombrec"]."</td>";
				echo "<td>".$filas["cargo"]."</td>";
				echo"</tr>";
			}

			echo"</table>";
		}
	?>
	<a href="insertar.php"><input type="submit" value="Volver"></a>
</body>
</html>