<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>P�gina Home</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
</head>
<body>
<?php
session_start();
if (!isset($_SESSION['email'])) {
     echo "<h1>Voc� n�o pode acessar a p�gina, fa�a seu login primeiro!!";
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
  <h1> P�gina Home de Funcion�rio</h1>
  </font>
</fieldset>
</center>
</body>
</html>