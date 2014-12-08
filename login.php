<?php
session_start();

include('conexaodb.php');

$usuario   =$_REQUEST['usuario'];
$senha     =$_REQUEST['senha'];

$query="SELECT usuario
		FROM administrador
		WHERE usuario='$usuario' AND senha='$senha'";

$recordset=mysql_query($query,$conn);

	mysql_num_rows($recordset);

if(mysql_num_rows($recordset)==1)
{
	$_SESSION['login']=1;
	$_SESSION['msg']="Administrador: $usuario";
	include('logincerto.php');
}	
else
{
	include('loginerrado.php');
} 	
?>


