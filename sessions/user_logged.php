<?php

if(!isset($_SESSION))
	session_start();

if(!isset($_SESSION["user"])){
	echo '<script languaje="javascript">
				alert("Usuario no registrado");
				self.location = "../index.php"
			</script>';
}
?>