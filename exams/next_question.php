<?php
if(!isset($_SESSION))
	session_start();

if($_POST && isset($_SESSION['alumno'])){
    $alumno = $_SESSION['alumno'];
    $alumno->correctas += $_POST['answer'];
    $alumno->pregunta++;
    $id_examen = $_SESSION['id_examen'];
    echo '<script languaje="javascript">
             self.location = "../views/aply.php/?examen='.$id_examen.'";
         </script>';
}
?>