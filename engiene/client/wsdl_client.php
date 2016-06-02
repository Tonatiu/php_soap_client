<?php

class Client{
	private $cliente;
	
	function __construct($wsdl){
		$this->cliente = new SoapClient($wsdl);
	}
	
	function sumar($param_1, $param_2){
		$responce = $this->cliente->suma(array('a'=>$param_1, 'b'=>$param_2));
		echo "<div class=\"alert alert-success\">".
				"<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>".
				"<strong> The result is: ".$responce->return."</strong>".
			"</div>";
	}

	function validar($boleta, $apellido){
		$responce = $this->cliente->validarAlumno(array('boleta'=>$boleta, 'apellido'=>$apellido));
		echo "<div class=\"alert alert-success\">".
				"<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>".
				"<strong> The result is: ".$responce->return->alumno->nombre."</strong>".
			"</div>";
	}
}

//$cliente = new Client("http://localhost:8080/PruebaWebService?wsdl");
$cliente = new Client("http://localhost:8080/Schoolsaes?wsdl");

?>
