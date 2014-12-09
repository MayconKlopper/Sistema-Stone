<?php
	
	session_start();
?>
<html>
	<head>
		<title>Stone - Soluçoes em pagamentos</title>
		<link rel="stylesheet" href="css/forms.css" type="text/css" />
		<meta charset="utf8">
	</head>
	<body>
		<div class="login-card">
			<img class="logo" src="imagens/stone.png"> 
		    <h1>Deletar Listagem de Clientes</h1>
		    <h3>Será deletada TODA a listagem com TODOS os clientes cadastrados<br>Tem Certeza?</h3><br>
		    <h4><?php echo $_SESSION['msg']; ?></h4>

		  <form action="delete_tabela.php">
		    <input type="submit" class="login login-submit" value="Sim">
		  </form> 

		  <form action="tabela_clientes.php">
		    <input type="submit" class="login login-submit" value="Não">
		  </form>
		</div>	
	</body>	
</html>