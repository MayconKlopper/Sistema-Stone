<?php
	include('conexaodb.php');
	session_start();
	include('verificalogin.php');
	$id=$_REQUEST['id'];
?>

<html>
	<head>
		<meta charset="utf-8"> 
	</head>

	<body>
	<?php	
		$query="DELETE FROM clientes WHERE id=$id";
		mysql_query($query,$conn);
		header('Location:tabela_clientes.php');
		
	?>
	</body>
	
</html>