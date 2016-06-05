<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../styles/home_student.css">
</head>

<body>
	<?php
		require_once("../sessions/user_logged.php");        
		$alumno = $_SESSION['alumno'];
        require_once("../engiene/client/examen_alumno.php");
	?>
	<div class = "container">
		<div id="head_menu" class="row">
			<nav class="navbar navbar-default" role="navigation">
			  <!-- El logotipo y el icono que despliega el menú se agrupan
				   para mostrarlos mejor en los dispositivos móviles -->
			  <div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
						data-target=".navbar-ex1-collapse">
				  <span class="sr-only">Desplegar navegación</span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">
					<img class="img-responsive" src="../images/escom.png" alt="person" width="80" height="80">
				</a>
			  </div>
			 
			  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
				   otro elemento que se pueda ocultar al minimizar la barra -->
			  <div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a data-toggle="tab" href="#Home">Home</a></li>
					<li><a data-toggle="tab" href="#Exams">Examenes Inscritos</a></li>
					<li><a data-toggle="tab" href="#Signs">Calificaciones</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a class="content_cleaner" href="../sessions/user_logout.php">Logout</a></li>
				</ul>
			  </div>
			</nav>
		</div>
		<div id="content" class="row">
			<div id="student_info" class="col-xs-6 col-sm-3">
				<div id="photo">
					<img class="img-responsive" src="../images/person-flat.png" alt="person" width="100" height="100">
					<h2><?php echo $alumno->nombre." ".$alumno->appat." ".$alumno->apmat;?></h2>
				</div>
				<div class="personal_info">
                    <h3>Datos personales</h3>
                    <p>Carrera: <?php echo $alumno->carrera;?></p>
                    <p>Boleta: <?php echo $alumno->boleta;?></p>
					<p>E-mail: <?php echo $alumno->email;?></p>
				</div>
			</div>
			<div class="tab-content">
				<div id="Home" class="col-xs-6 col-sm-9 tab-pane fade in active">
					<h1>Hola</h1>
				</div>
				<div id="Exams" class="col-xs-6 col-sm-9 tab-pane fade">
					<div class="list-group">
						<li class="list-group-item"><div id="Header"><h3>Exámenes inscritos</h3></div>                            </li>
							<?php
							     fillExams();
							?>
						<li class="list-group-item"><div id="Footpage">
                            <div class="btn-group-vertical col-xs-12 col-sm-12">
                                <button type="button" class="btn btn-primary btn-block btn-md" data-toggle="collapse" data-target="#exams_add">Inscribir</button>
                                <div id="exams_add" class="collapse">
                                    <label for="sel2">Exames disponibles</label>
                                      <select multiple class="form-control" id="sel2">
                                            <?php
                                                fillExamByCarrier();
                                            ?>
                                      </select>
                                    <form class="form-horizontal" role="form" method="post">
                                        <div class="form-group">
                                            <button id = "validate_btn" type="submit" class="btn btn-primary">Agregar exámenes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
						</div></li>
					</div>
				</div>
				<div id="Signs" class="col-xs-6 col-sm-9 tab-pane fade">
					<div class="list-group">
						<li class="list-group-item"><div id="Header">Calificaciones</div></li>
						<li class="list-group-item"><div id="tabla_calif">
							<table class="table">
								<thead>
								  <tr>
									<th>Examen</th>
									<th>Fecha</th>
									<th>Calificación</th>
								  </tr>
								</thead>
								<tbody>
								  <?php
                                        fillCalifications();
								    ?>
								</tbody>
							</table>
						</div></li>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src = "../engiene/javascript/cleaner.js"></script>
</body>
