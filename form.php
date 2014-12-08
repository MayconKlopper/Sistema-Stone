<?php 
  session_start();
  include('conexaodb.php');
  include('verificalogin.php');
  include('javascript/mascara.js');
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
    <h3><html><img src="imagens/stone.png"/></html></h3><br>
    <h1>Cadastro</h1><br>
  <form action="recebedados.php">

    <input type="text" name="nome" placeholder="Nome" maxlength="15" required />
    <input type="text" name="sobrenome" placeholder="Sobrenome" maxlength="15" required />
    <select class="select" name="genero">
        <option CHECKED>Gênero</option>
        <option>M</option>
        <option>F</option>
    </select><br><br>
    <h3>Endereço</h3>
    <select class="select" name="estado">
        <option CHECKED>Estado</option>
        <option>AC</option>
        <option>AL</option>
        <option>AP</option>
        <option>AM</option>
        <option>BA</option>
        <option>CE</option>
        <option>DF</option>
        <option>ES</option>
        <option>GO</option>
        <option>MA</option>
        <option>MT</option>
        <option>MS</option>
        <option>MG</option>
        <option>PA</option>
        <option>PB</option>
        <option>PR</option>
        <option>PE</option>
        <option>PI</option>
        <option>RJ</option>
        <option>RN</option>
        <option>RS</option>
        <option>RO</option>
        <option>RR</option>
        <option>SC</option>
        <option>SP</option>
        <option>SE</option>
        <option>TO</option>
    </select>
    <input type="text" name="cidade" placeholder="Cidade" maxlength="20" required />
    <input type="text" name="cep" placeholder="CEP:00000-000" maxlength="9" onkeypress="Mascara(this, Cep)" required />
    <input type="text" name="rua" placeholder="EX:Rua Martins Cunha" maxlength="25" required />
    <input type="text" name="complemento" placeholder="EX:Numero:15, APT:801, Bloco:8" maxlength="30" required /><br><br>
    <h3>Telefones</h3>
    <input type="text" name="fixo" placeholder="Fixo:(00)0000-0000" maxlength="14" onkeypress="Mascara(this, Telefone)" />
    <input type="text" name="celular" placeholder="Celular:(00)00000-0000" maxlength="15" onkeypress="Mascara(this, Celular)" required />

    <h5></h5>
    <input type="submit" name="Enviar" class="login login-submit" value="Enviar">
  </form>

  <form action="indexlogado.php">
    <input type="submit" name="Enviar" class="login login-submit" value="Voltar">
  </form>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

  <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>

</body>

</html>