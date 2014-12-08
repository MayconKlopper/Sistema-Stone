<?php

	include('verificalogin.php');
	include('conexaodb.php');

	$query = " DELETE FROM clientes";

	mysql_query($query,$conn);

	header('location:indexlogado.php');
?>