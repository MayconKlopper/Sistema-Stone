<?php
  include('conexaodb.php');
  session_start();
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
    <h3><img src="imagens/stone.png"/></html></h3><br>
    <h1>Log-in</h1><br>  
  <form action="login.php">
    <input type="text" name="usuario" placeholder="Usuário" required>
    <input type="password" name="senha" placeholder="Senha" required>
    <input type="submit" name="login" class="login login-submit" value="Logar">
  </form>

  <form action="index.php">
    <input type="submit" name="Voltar" class="login login-submit" value="Voltar">
  </form>  
</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

  <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>

</body>

</html>