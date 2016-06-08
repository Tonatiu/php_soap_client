<?php
require_once("../engiene/client/wsdl_client.php");

if(!isset($_SESSION))
	session_start();

if($_POST){
	$apellido = $_POST['user_lastname'];
	$boleta = $_POST['user_name'];
	
	try
	{
		$responce = $cliente->validar($boleta, $apellido);
		if(!empty($responce)){
            $responce->carrera = $cliente->getCarrera($responce->id_carrera);
            $responce->pregunta = 1;
            $responce->correctas = 0;
			$_SESSION['alumno'] = $responce;
			echo '<script languaje="javascript">
					self.location = "../views/home.php";
				</script>';
		}
		else{
			echo '<script languaje="javascript">
					alert("Datos no válidos");
					self.location = "../index.php"
				</script>';
		}
	}
	catch(Esception $e)
	{
		echo '<script languaje="javascript">
					alert("Error al validar");
					self.location = "../index.php"
				</script>';
	}
		
	
}
?>
