<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./styles/Backgroud_style.css">
	<link rel="stylesheet" type="text/css" href="./styles/image_center.css">
</head>

<body>
	<div class = "container">
		<?php
			require_once("./engiene/client/wsdl_client.php");
			//$cliente->sumar(485,1);
			$cliente->validar("2012630537", "Trejo");
		?>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src = "./engiene/javascript/validator.js"></script>
</body>
