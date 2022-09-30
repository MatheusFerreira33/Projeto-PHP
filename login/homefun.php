<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Página Home</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
</head>
<body>
<?php
session_start();
if (!isset($_SESSION['email'])) {
     echo "<h1>Você não pode acessar a página, faça seu login primeiro!!";
     echo "<br><br><a href='login.html'>Voltar</a></h1>";
     die();   
}
$email = $_SESSION['email'];
$tipo = $_SESSION['tipo'];
?>

<fieldset>
  <legend>
  Bem vindo : <?php echo $email; ?>
  </legend>
  <font color="red">
  <h1> Página Home de Funcionário</h1>
  </font>
</fieldset>
</center>
</body>
</html>