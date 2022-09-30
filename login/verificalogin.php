<?php 
include "abrir_banco.php";

$login = $_POST["txtemail"];
$senha = $_POST["txtsenha"];

if ((empty($login)) or (empty($senha))) {
   echo "<h1>Preencha os dados corretamente, para poder acessar o sistema!!!";
   echo "<br><br><br><a href='login.html'>Voltar</a></h1>";
   die();
}


$executa = "SELECT email, senha, tipo FROM usuarios where email='$login' and senha='$senha'";

$query = $mysqli->query($executa);

$resultado = $query->fetch_object();
		
if (isset($resultado)) {

	$tipo = $resultado->tipo;


        session_start();
        $_SESSION['email'] = $login;
        $_SESSION['tipo'] = $tipo;

        if ($tipo=="adm") {
           header('location:homeadm.php');
        }else{
           header('location:homefun.php');
        }        
}else{
   echo "<h1>Usuário ou senha não conferem, por favor verifique!!!";
   echo "<br><br><br><a href='login.html'>Voltar</a></h1>";
}
?>
</body>
</html>