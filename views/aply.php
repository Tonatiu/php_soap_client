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
        $id_examen = $_GET['examen'];
        $alumno = $_SESSION['alumno'];
        $_SESSION['id_examen'] = $id_examen;
        require_once("../engiene/client/examen_pregunta.php");
        
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
					<li class="active"><a data-toggle="tab" href="../home.php">Home</a></li>
					<li><a data-toggle="tab" href="#Exams">Examenes Inscritos</a></li>
					<li><a data-toggle="tab" href="#Signs">Calificaciones</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a class="content_cleaner" href="../../sessions/user_logout.php">Logout</a></li>
				</ul>
			  </div>
			</nav>
		</div>
		<div id="content" class="row">
            <div class="col-xs-6 col-sm-3">
		    </div>
			<div class="jumbotron col-xs-6 col-sm-6 center-block row" id="questions">
                <?php
                    if($preguntas_count > $alumno->pregunta){
                        setQuestio($alumno->pregunta);    
                    }
                    
                ?>
                <form class="form-horizontal" method="post" action="../exams/next_question.php">
                    <div id="answers">
                         <?php
                            if($preguntas_count > $alumno->pregunta){
                                setAnswer($alumno->pregunta);
                                echo '<div class="radio">
                                        <label><input type="radio" name="answer" value="0">Respuesta 2</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="answer" value="0">Respuesta 3</label>
                                    </div>
                                    </div>
                                    <div id="next_button" >
                                        <button id="next" type="submit" name="next" class="btn btn-primary">Siguiente</button>
                                    </div>';
                            }
                            else{
                                $signature = $alumno->correctas / $preguntas_count * 100;
                                $_SESSION['calificacion'] = $signature;
                                echo 'Tu calificación es: '.$signature.'<br><div id="next_button" >
                                        <button id="next" type="button" name="next" class="btn btn-primary" onclick="location.href=\'../views/home.php\'">Calificar</button>
                                    </div>';
                            }
                        ?>
                        
                </form>
            </div>
            
            <div class="col-xs-6 col-sm-3">
		  </div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src = "../engiene/javascript/cleaner.js"></script>
</body>
