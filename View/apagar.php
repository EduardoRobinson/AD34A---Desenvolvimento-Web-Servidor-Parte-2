<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../CSS/main.css" type="text/css" media="screen">
	<title>Apagar Registro</title>
</head>
<body>
<?php
require('../Controller/apagar.php');
?>
<h1>Digite qual registro voce deseja apagar</h1>
<div id="apagar">
	<form id="Apagar" method="POST">
	<label>Qual registro voce deseja apagar:</label>
	<input type="search" name="id">
	<br>
	<button type="submit" name="botao" value="enviar">Apagar</button>
	</form>
</div>

</body>
</html>