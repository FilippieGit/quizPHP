<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pergunta dois</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

	<?php

		session_start();

		$cont=0;

		if(isset($_POST["Patrick"])){
		     $cont++;
		}

		$_SESSION['contador']=$cont;
	 ?>

</head>
<body style="margin: 37px;">
	<form name="quiz" method="post" action="quiz3.php">
		<label>Segunda pergunta:</label>
		<br><br>
		<label>Qual é o sonho de Bob Esponja?</label>
		<br><br>
		<input type="submit" class="btn btn-dark" name="certa" value="Ser um grande chef">
		<input type="submit" class="btn btn-dark" name="erro1" value="Ter um carro novo">
		<input type="submit" class="btn btn-dark" name="erro2" value="Viajar pelo mundo">
		<input type="submit" class="btn btn-dark" name="erro3" value="Abertura de um restaurante">
	</form>

</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
