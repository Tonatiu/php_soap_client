<?php

if(!isset($_SESSION))
	session_start();

if(!isset($_SESSION['alumno'])){
	echo '<script languaje="javascript">
				alert("Usuario no registrado");
				self.location = "../index.php"
			</script>';
}
?>