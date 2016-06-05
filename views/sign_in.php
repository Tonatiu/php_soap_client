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
    <?php
        
    ?>
	<div class = "container">
		<div class="col-xs-6 col-sm-3">
		</div>
		<div class="jumbotron col-xs-6 col-sm-6 center-block row">
			<form class="form-horizontal" method="post" action="../sessions/user_sign_in.php">
                <fieldset>

                <!-- Form Name -->
                <legend>Inscríbete</legend>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="appat">Apellido paterno</label>  
                  <div class="col-md-6">
                  <input id="appat" name="appat" placeholder="apellido paterno" class="form-control input-md" required="" type="text">

                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="apmat">Apellido materno</label>  
                  <div class="col-md-6">
                  <input id="apmat" name="apmat" placeholder="apellido aterno" class="form-control input-md" required="" type="text">

                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="nombre">Nombres</label>  
                  <div class="col-md-6">
                  <input id="nombre" name="nombre" placeholder="nombres" class="form-control input-md" required="" type="text">

                  </div>
                </div>
                    
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="nombre">Boleta</label>  
                  <div class="col-md-6">
                  <input id="boleta" name="boleta" placeholder="boleta" class="form-control input-md" required="" type="text">

                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="phone">Teléfono</label>  
                  <div class="col-md-6">
                  <input id="phone" name="phone" placeholder="teléfono" class="form-control input-md" type="text">

                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="email">E-mail</label>  
                  <div class="col-md-6">
                  <input id="email" name="email" placeholder="correo" class="form-control input-md" required="" type="text">

                  </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="carrier"></label>
                  <div class="col-md-12">
                    <select id="carrier" name="carrier" class="form-control">
                        <?php
                            require_once("../engiene/client/wsdl_client.php");
                            $carreras = $cliente->getCarreras();
                            echo '<option selected="selected" value="0">Selecciona tu carrera</option>';
                            for($i = 0; $i < count($carreras); $i++){
                                echo '<option value="'.($i + 1).'">'.$carreras[$i]->nombre.'</option>';
                            }
                        ?>
                    </select>
                  </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="submit"></label>
                  <div class="col-md-4">
                    <button id="submit" name="submit" class="btn btn-primary">Aceptar</button>
                  </div>
                </div>

                </fieldset>
            </form>
		</div>
		<div class="col-xs-6 col-sm-3">
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src = "./engiene/javascript/validator.js"></script>
</body>
