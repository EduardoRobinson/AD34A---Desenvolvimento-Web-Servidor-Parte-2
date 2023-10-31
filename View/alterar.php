<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../CSS/main.css" type="text/css" media="screen">
	<title>Alterar Registro</title>
</head>
<body>
<h1>Digite qual registro voce deseja alterar</h1>
<div id="alterar">
	<form id="alterar" method="POST">
	<label>Qual registro voce deseja alterar:</label>
	<input type="number" name="id">
	<br>
	<br>
	<label>Digite o novo valor do registro:</label>
	<input type="number" name="valor">
	<br>
	<label>Digite a nova data do registro:</label>
	<input type="date" name="data">
	<br>
	<label>Digite a nova descrição do registro:</label>
	<input type="text" name="descricao">
	<br>
	<button type="submit" name="botao" value="enviar">Alterar</button>
	</form>
</div>
<?php require_once('../Controller/alterar.php');?>
</body>
</html>