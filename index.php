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
		<div class="col-xs-6 col-sm-3">
		</div>
		<div class="jumbotron col-xs-6 col-sm-6 center-block row">
			<img class="img-responsive" src="./images/escom.png" alt="escom" width="150" height="150"> 
			<form class="form-horizontal" action="./sessions/user_loggin.php" role="form" method="post">
			  <div class="form-group">
				<label for="usuario_boleta" class="col-lg-2 control-label">Boleta</label>
				<div class="col-lg-10">
				  <input type="text" class="form-control" id="student_boleta" 
				  placeholder="Boleta" name="user_name">
				</div>
			  </div>
			  <div class="form-group">
				<label for="password" class="col-lg-2 control-label">Contraseña</label>
				<div class="col-lg-10">
				  <input type="password" class="form-control" id="student_passwd" 
						 placeholder="Contraseña" name="user_pasw">
				</div>
			  </div>

			  <div class="form-group">
				<div class="col-lg-offset-2 col-lg-10 login_button">
				  <button id = "validate_btn" type="submit" class="btn btn-default">Entrar</button>
				</div>
			  </div>
			</form>
		</div>
		<div class="col-xs-6 col-sm-3">
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src = "./engiene/javascript/validator.js"></script>
</body>