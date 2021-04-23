<?php

	include 'conexion.php';
	
	$Identificacion = $_POST['Identificacion'];
	$Usuario = $_POST['Usuario'];
	$Pass = $_POST['Pass'];
	$nivel = $_POST['nivel'];

	
	$connect->query("UPDATE usuario SET Usuario='".$Usuario."', Pass='".$Pass."', nivel='".$nivel."' WHERE Identificacion=". $Identificacion);
?>