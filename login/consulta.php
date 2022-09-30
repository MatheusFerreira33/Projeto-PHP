<?php 
include "abrir_banco.php";
?>

<fieldset>
<legend>
<font color="red">
<h1>CONSULTA DE ALUNOS</h1>
</font>
</legend>


<?php
    $executa = "SELECT codigo,nome,email, telefone, ativo FROM alunos order by codigo Desc";

    $query = $mysqli->query($executa);

     echo '<center><table border=1><tr><th>C�DIGO</th><th>NOME</th><th>EMAIL</th><th>TELEFONE</th><th><CENTER>ATIVO ou INATIVO</CENTER></th><th><CENTER>ALTERAR</CENTER></th></tr>';
      while ($dados = $query->fetch_object()) {
		$cod= $dados->codigo;
                $ativo=$dados->ativo;    
		        if ($ativo==true) {
			  echo '<tr><td bgcolor="#FFFFFF"><center>' . $cod .  '</center></td>';
			  echo '<td bgcolor="#FFFFFF">' . $dados->nome .     '</td>';
			  echo '<td bgcolor="#FFFFFF">' . $dados->email .     '</td>';
			  echo '<td bgcolor="#FFFFFF">' . $dados->telefone .  '</td>';
		          if ($dados->ativo==true) {  

			    echo "<td bgcolor=#FFFFFF><center><a href=excluir.php?codigo=$cod><img src=excluir.jpg width=10%></center></td>";

                            }else{
                             echo "<td bgcolor=#FFFFFF><center><a href=excluir.php?codigo=$cod><img src=checked.jpg width=10%></center></td>";
                          } 
			  echo "<td bgcolor=#FFFFFF><center><a href=editar.php?codigo=$cod><img src=editar.jpg width=10%></center></td></tr>";
                        }else{
			echo '<tr><td bgcolor="#B0C4DE"><center>' . $cod .   '</center></td>';
			echo '<td bgcolor="#B0C4DE">' . $dados->nome .     '</td>';
			echo '<td bgcolor="#B0C4DE">' . $dados->email .     '</td>';
			echo '<td bgcolor="#B0C4DE">' . $dados->telefone .  '</td>';
                        if ($dados->ativo==true) { 
                           echo "<td bgcolor=#B0C4DE><center><a href=excluir.php?codigo=$cod><img src=excluir.jpg width=10%></center></td>";

                            }else{
                             echo "<td bgcolor=#B0C4DE><center><a href=excluir.php?codigo=$cod><img src=checked.jpg width=10%></center></td>";
                          } 
			  echo "<td bgcolor=#B0C4DE><center><a href=editar.php?codigo=$cod><img src=editar.jpg width=10%></center></td></tr>";
                        }

			
		
    }
    echo "</table></center>";
    $query->free();
?>
<br><br><br><center><a href="cadastro.html">Novo Aluno</a></center>
</fieldset>
</center>
</body>
</html>