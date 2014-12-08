<html>
	<head>
		<title>Stone - Soluçoes em pagamentos</title>

		<link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>

    	<link rel="stylesheet" href="css/tabela_clientes.css" media="screen" type="text/css" />
	</head>		
	<body>
		<meta charset="utf8">
		<script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>

<?php
include('conexaodb.php');
session_start();
include('verificalogin.php');

$query="SELECT id,nome,sobrenome, estado, cidade, genero,cep,rua,complemento,fixo,celular 
		FROM clientes ";	

$recordset = mysql_query($query,$conn);
		
	echo"<div class='login-card'>";
	echo"<img class='logo' src='imagens/stone.png'/>";
	echo"<h1>LISTAGEM DE CLIENTES</h1>";
	echo"<div class='login-card3'>";
	echo"<div class='login-card1'> <h3>ID</h3> </div>";
	echo"<div class='login-card2'> <h3>DEL</h3> </div>";
	echo"<div class='login-card2'> <h3>EDIT</h3> </div>";
	echo"<div class='login-card4'> <h3>NOME</h3> </div>";
	echo"<div class='login-card4'> <h3>SOBRENOME</h3> </div>";
	echo"<div class='login-card4'> <h3>ESTADO</h3> </div>";
	echo"<div class='login-card4'> <h3>CIDADE</h3> </div>";
	echo"<div class='login-card5'> <h3>CEP</h3> </div>";
	echo"<div class='login-card4'> <h3>RUA</h3> </div>";
	echo"<div class='login-card6'> <h3>COMPLEMENTO</h3> </div>";
	echo"<div class='login-card4'> <h3>FIXO</h3> </div>";
	echo"<div class='login-card4'> <h3>CELULAR</h3> </div>";
	echo"<div class='login-card5'> <h3>GÊNERO</h3> </div>";
	echo"</div>";


while($linha = mysql_fetch_assoc($recordset))
{
	echo"<div class='login-card3'>";
	echo "<div class='login-card1'>".$linha['id']."</div>";
	echo "<div class='login-card2'>	
			<a href='deleteclientef.php?id=".$linha['id']."'>
				<img src='imagens/delete.png' width='19px'>
			</a>
		  </div>";
	echo "<div class='login-card2'>	
			<a href='updateclientef.php?id=".$linha['id']."'>
				<img src='imagens/edit.png' width='19px'>
			</a>
		  </div>";

		echo "<div class='login-card4'>".$linha['nome']."</div>";
		echo "<div  class='login-card4'>".$linha['sobrenome']."</div>";
		echo "<div  class='login-card4'>".$linha['estado']."</div>";
		echo "<div  class='login-card4'>".$linha['cidade']."</div>";
		echo "<div class='login-card5'>".$linha['cep']."</div>";
		echo "<div class='login-card4'>".$linha['rua']."</div>";
		echo "<div class='login-card6'>".$linha['complemento']."</div>";
		echo "<div class='login-card4'>".$linha['fixo']."</div>";
		echo "<div class='login-card4'>".$linha['celular']."</div>";
		echo "<div class='login-card5'>".$linha['genero']."</div>";
		echo"</div>";
}
echo"<br><br><form action='delete_tabelaf.php'>
    			<input type='submit' name='Voltar' class='login login-submit' value='Deletar lista de clientes'>
  			</form>";

echo"<br><br><form action='indexlogado.php'>
    			<input type='submit' name='Voltar' class='login login-submit' value='Voltar'>
  			</form>";
?>
  </body>
</html>