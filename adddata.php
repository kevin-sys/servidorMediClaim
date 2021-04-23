<?php

	include 'conexion.php';

	$Identificacion = $_POST['Identificacion'];
	$Usuario = $_POST['Usuario'];
	$TipoUsuario = $_POST['TipoUsuario'];
	$Pass = $_POST['Pass'];
	
	$connect->query("INSERT INTO usuario (Identificacion,Usuario,TipoUsuario, Pass) VALUES ('".$Identificacion."','".$Usuario."','".$TipoUsuario."','".$Pass."')")

?>