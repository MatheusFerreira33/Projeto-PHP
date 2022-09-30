<?php
session_start();

	
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CSV</title>		
	</head>
	<body>
		<h1> CSV</h1>



		<form method="POST" action="importar.php" enctype="multipart/form-data">
			<input type="file" name="file">
			<input type="submit" name="enviar">
		</form>

<br>
<br>
<br>

<h1> Higienização </h1>
<br>
<br>

		<form method="POST" action="importar2.php" enctype="multipart/form-data">
			<input type="file" name="file">
			<input type="submit" name="enviar">

		</form>

	</body>
</html>