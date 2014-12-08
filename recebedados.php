
	<?php 
	session_start();
	include('conexaodb.php');

		$nome	        = $_REQUEST['nome'];
		$sobrenome	    = $_REQUEST['sobrenome'];
		$genero	        = $_REQUEST['genero'];
		$estado	        = $_REQUEST['estado'];
		$cidade	        = $_REQUEST['cidade'];
		$cep	        = $_REQUEST['cep'];
		$rua	        = $_REQUEST['rua'];
		$complemento	= $_REQUEST['complemento'];
		$fixo	        = $_REQUEST['fixo'];
		$celular	    = $_REQUEST['celular'];


		$query = "	    INSERT INTO clientes		
						(nome,sobrenome,genero,estado,cidade,cep,rua,complemento,fixo,celular)
						VALUES 
						('$nome','$sobrenome','$genero','$estado','$cidade','$cep','$rua','$complemento','$fixo','$celular')";	

        mysql_query($query,$conn);
include('cadastrofeito.php');
	?>