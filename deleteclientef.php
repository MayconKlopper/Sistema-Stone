<?php
  include('conexaodb.php');
  session_start();
  include('verificalogin.php');
  $id=$_REQUEST['id'];
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
    <h1>Listagem de Clientes</h1><br>  
    <h1>Deletar Cliente</h1>
    <h3>Tem Certeza?</h3><br>
    <h4><?php echo $_SESSION['msg']; ?></h4>

  <form action="deletecliente.php">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <input type="submit" name="Voltar" class="login login-submit" value="Sim">
  </form> 

  <form action="tabela_clientes.php">
    <input type="submit" name="Voltar" class="login login-submit" value="Não">
  </form> 
</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

  <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>

</body>

</html>