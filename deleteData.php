<?php
	include 'conexion.php';
	$Identificacion=$_POST['Identificacion'];
	$connect->query("DELETE FROM usuario WHERE Identificacion=".$Identificacion);

?>