<?php
require_once("../engiene/client/wsdl_client.php");

if($_POST){
    echo $_POST['carrier'];
    $alumno = array(
                   'apmat'=>$_POST['apmat'],
                   'appat'=>$_POST['appat'],
                    'boleta'=>$_POST['boleta'],
                   'email'=>$_POST['email'],
                   'id_carrera'=>$_POST['carrier'],
                    'nombre'=>$_POST['nombre'],
                    'telefono'=>$_POST['phone']
                   );
    $cliente->insertStudent($alumno);
}

echo '<script language = "javascript">
		location.href = "../index.php";
	</script>';
?>