<?php


include "abrir_banco.php";

$cod = $_GET["codigo"];


 $executa = "SELECT ativo FROM alunos order by codigo";

    $query = $mysqli->query($executa);

        while ($dados = $query->fetch_object()) {
		$ativo= $dados->ativo;
        }
 //     $executa = "delete from alunos Where codigo = $cod";

      if ($ativo==true) {
          $executa = "update alunos set ativo=false where codigo = $cod";
      }else{
          $executa = "update alunos set ativo=true where codigo = $cod";
      }
      $query = $mysqli->query($executa);


      echo "<fieldset>";
   
      echo "<br><br><br>";
      echo "<font color='red'>";
      echo "<h1> Exclusão realizada com sucesso<br>";
      echo "<br><br>";
      echo "<a href=consulta.php>voltar</a></h1>";
      echo "</font></center>";        
      echo "</fieldset>";


?>