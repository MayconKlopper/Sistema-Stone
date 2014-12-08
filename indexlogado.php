<?php
  include('conexaodb.php');
  session_start();
  include('verificalogin.php');
?>

<html>

<head>

  <meta charset="UTF-8">

  <title>Stone - Soluçoes em pagamentos</title>

  <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>

    <link rel="stylesheet" href="css/forms.css" media="screen" type="text/css" />

</head>

<body>

  <div class="login-card">
    <h1><html><img src="imagens/stone.png"/></html></h1><br>  
    <h4><?php echo $_SESSION['msg']; ?></h4>

      <form action="form.php">
        <input type="submit" class="login login-submit" name="Voltar" class="login login-submit" value=" Cadastrar cliente ">
      </form>

    <form action="arquivo.php">
      <input type="submit" name="Voltar" class="login login-submit" value=" Gerar arquivo ">
    </form>

    <form action="tabela_clientes.php">
      <input type="submit" name="Voltar" class="login login-submit" value=" Listar clientes ">
    </form>

		<form action="deslogar.php">
			<input type="submit" name="Voltar" class="login login-submit" value="Deslogar">
		</form>

</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

  <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>

</body>

</html>