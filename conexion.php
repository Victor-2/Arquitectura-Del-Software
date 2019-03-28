<?php
function conectarBD()
{
	$host="host=localhost";
	$port="port=5432";
	$dbname="dbname=prueba";
	$user="user=postgres";
	$password="password=holaquease";

	$db=pg_connect("$host $port $dbname $user $password");
	if(!$db)
	{
		echo"Error:". pg_last_error();
	}
	else
	{
		return $db;
	}
}

?>