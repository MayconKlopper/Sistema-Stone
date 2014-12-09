<?php 
  session_start();
  include('conexaodb.php');
  include('javascript/mascara.js');
  $id =$_REQUEST['id'];

  $query="SELECT id,nome,sobrenome, estado, cidade, genero,cep,rua,complemento,fixo,celular 
          FROM clientes
          WHERE id='$id' ";

  $recordset = mysql_query($query,$conn);
  
  $vetor = mysql_fetch_assoc($recordset);      
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
    <h1>Atualização de cliente</h1><br>
  <form action="updatecliente.php">

    <input type="hidden" name="id" maxlength="4" value="<?php echo $vetor['id']; ?>" />
    <input type="text" name="nome" maxlength="15" value="<?php echo $vetor['nome']; ?>" />
    <input type="text" name="sobrenome" maxlength="15" value="<?php echo $vetor['sobrenome']; ?>" />
    <select class="select" name="genero">
        <option CHECKED><?php echo $vetor['genero']; ?></option>
        <option>M</option>
        <option>F</option>
    </select><br><br>
    <h3>Endereço</h3>
    <select class="select" name="estado">
        <option CHECKED><?php echo $vetor['estado']; ?></option>
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
    <input type="text" name="cidade" maxlength="20" placeholder="Cidade" value="<?php echo $vetor['cidade']; ?>" />
    <input type="text" name="cep" maxlength="9" onkeypress="Mascara(This, Cep)" placeholder="CEP:00000-000" value="<?php echo $vetor['cep']; ?>" />
    <input type="text" name="rua" maxlength="25" placeholder="EX:Rua Martins Cunha" value="<?php echo $vetor['rua']; ?>" />
    <input type="text" name="complemento" maxlength="30" placeholder="EX:Numero:15, APT:801, Bloco:8" value="<?php echo $vetor['complemento']; ?>"/><br><br>
    <h3>Telefones</h3>
    <input type="text" name="fixo" maxlength="14" onkeypress="Mascara(This, Telefone)" placeholder="Fixo:(00)0000-0000" value="<?php echo $vetor['fixo']; ?>" />
    <input type="text" name="celular" maxlength="15" onkeypress="Mascara(This, Celular)" placeholder="Celular:(00)00000-0000" value="<?php echo $vetor['celular']; ?>" />

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