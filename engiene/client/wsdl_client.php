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
        
        return $responce->return->alumno;
	}
    
    function exam_student($idAlumno){
        $responce = $this->cliente->obtenerCalificacionAlumno(array('idAlumno'=>$idAlumno));
        return $responce->return;
    }
    
    function exam_signature($id_signature){
        $responce = $this->cliente->obtenerCalificacion(array('id'=>$id_signature));
        
        return $responce->return->valor;
    }
    
    function getExam($id_examen){
        $responce = $this->cliente->obtenerExamen(array('idExamen'=>$id_examen));
        return $responce->return;
    }
    
    function getCarrera($id_carrera){
        $responce = $this->cliente->obtenerCarrera(array('id'=>$id_carrera));
        return $responce->return->nombre;
    }
    
    function getCarreras(){
        $responce = $this->cliente->obtenerCarreras();
        return $responce->return;
    }
    
    function insertStudent($alumno){
        $this->cliente->insertarAlumno(array('alumno'=>$alumno));
    }
    
    function getExamsByCarrier($id_carrier){
        $responce = $this->cliente->obtenerExamenesPorCarrera(array('id_carrera'=>$id_carrier));
        return $responce->return;
    }
}

//$cliente = new Client("http://192.168.1.100:8080/Schoolsaes?wsdl");
$cliente = new Client("http://localhost:8080/Schoolsaes?wsdl");

?>
