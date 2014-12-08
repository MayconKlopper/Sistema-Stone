<?php
session_start();
include('conexaodb.php');
include('verificalogin.php');

        $id             = $_REQUEST['id'];
        $nome	        = $_REQUEST['nome'];
		$sobrenome	    = $_REQUEST['sobrenome'];
		$estado         = $_REQUEST['estado'];
		$cidade         = $_REQUEST['cidade'];
		$genero	        = $_REQUEST['genero'];
		$cep	        = $_REQUEST['cep'];
		$rua	        = $_REQUEST['rua'];
		$complemento	= $_REQUEST['complemento'];
		$fixo	        = $_REQUEST['fixo'];
		$celular	    = $_REQUEST['celular'];

$query="UPDATE clientes SET nome='$nome',sobrenome='$sobrenome',estado='$estado',cidade='$cidade',genero='$genero',

                            cep='$cep',rua='$rua',complemento='$complemento',fixo='$fixo',celular='$celular'
        WHERE id='$id'";

$recordset = mysql_query($query,$conn);
header('Location:tabela_clientes.php');
?>
