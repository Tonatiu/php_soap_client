<?php
require_once("../engiene/client/wsdl_client.php");

if(!isset($_SESSION))
	session_start();

if($_POST && isset($_SESSION['alumno'])){
    $_SESSION['alumno']->correctas += $_POST['answer'];
    $_SESSION['alumno']->pregunta++;
    $id_examen = $_SESSION['id_examen'];
    print_r($id_examen);
    echo '<script languaje="javascript">
             self.location = "../views/aply.php?examen='.$id_examen.'"</script>';
}
?>