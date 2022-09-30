<?php 
include "abrir_banco.php";
?>

<fieldset>
<legend>
<font color="red">
<h1>ALTERAÇÃO DE ALUNOS</h1>
</font>
</legend>


<?php
    $cod = $_GET["codigo"];
    $executa = "SELECT codigo,nome,email, telefone FROM alunos where codigo = $cod";

    $query = $mysqli->query($executa);

      while ($dados = $query->fetch_object()) {
		$cod      = $dados->codigo;
		$nome     = $dados->nome;
                $email    = $dados->email;
                $telefone = $dados->telefone;
					
    }
    $query->free();
?>
 <form method="POST" action="exec_alteracao.php">
        
	<input type="hidden" name="txtcodigo" value="<?php  echo $cod; ?>" maxlength="50" size="50">
	<table>
	<tr>
	  <th>NOME:</th>
	  <td><input type="text" name="txtnome" value="<?php  echo $nome; ?>"maxlength="50" size="50"></td>
	</tr>
	<tr>
	  <th>EMAIL: </th>
	  <td><input type="text" name="txtemail" value="<?php  echo $email; ?>" maxlength="50" size="50"></td>
	</tr>
	<tr>
	  <th>TELEFONE: </th>
	  <td><input type="text" name="txttelefone" value="<?php  echo $telefone; ?>"maxlength="20" size="20"></td>
	</tr>
    	</table>
	<br>
	<input type="submit" value="Alterar" name="alterar">
        <br><br><br>
        <a href ='consulta.php'>voltar</a>
        </form>
</fieldset>
</center>
</body>
</html>