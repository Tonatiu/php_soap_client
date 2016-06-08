<?php
require_once("wsdl_client.php");

$exams = $cliente->exam_student($alumno->id);

for($i = 0; $i < count($exams); $i++){
    
    if(!empty($exams[$i]->id_calificacion)){
        $exams[$i]->calificacion = $cliente->exam_signature($exams[$i]->id_calificacion);
        $curr_exam = $cliente->getExam($exams[$i]->id_examen);
        $signature = $cliente->getSignature($curr_exam->idAsignatura);
        
        $exams[$i]->fecha = substr(($curr_exam)->fecha, 0, 10);
        $exams[$i]->Asignatura = $signature->nombre;
    }        
    else
        $exams[$i]->calificacion = "-";
    
}

$exams_by_carrier = $cliente->getExamsByCarrier($alumno->id_carrera);

for($i = 0; $i < count($exams_by_carrier); $i++){
    $exams_by_carrier[$i]->Asignatura = $cliente->getSignature($exams_by_carrier[$i]->idAsignatura)->nombre;
}

function fillCalifications(){
    $exams = $GLOBALS['exams'];
    for($i = 0; $i < count($exams); $i++){
        if($exams[$i]->calificacion != "-"){
            echo '<tr>
                <td>'.$exams[$i]->Asignatura.'</td>
                <td>'.$exams[$i]->fecha.'</td>
                <td>'.$exams[$i]->calificacion.'</td>
              </tr>';
        }
    }
}

function fillExams(){
    $exams = $GLOBALS['exams'];
    
    for($i = 0; $i < count($exams); $i++){
        $sign_status;
        $date_status;
        $aply_button;
        
        if($exams[$i]->calificacion >= 6.0){
            $sign_status = "Aprobado";
        }
        elseif($exams[$i]->calificacion < 6.0){
            $sign_status = "Reprobado";
        }
        else{
            $sign_status = "No presentado";
        }
        
        $current_date = strtotime(date('Y-m-d'));
        $compare_date = strtotime($exams[$i]->fecha);
        
        if($current_date > $compare_date || $exams[$i]->calificacion === "-"){
            $date_status = "El examen ya ha pasado";
        }
        else{
            $today = date_create(date('Y-m-d'));
            $exam_date = date_create($exams[$i]->fecha);
            $interval = date_diff($today, $exam_date);
            $date_status = "Faltan ".$interval->format('%R%a días');
        }
        
        if($date_status != "El examen ya ha pasado"){
            $aply_button = '<button type="button" class="btn btn-primary btn-xs" onclick="location.href=\'../views/aply.php?examen='.$exams[$i]->id_examen.'\'">Aplicar</button>';
        }
        else{
            $aply_button = '';
        }
        echo '<li class="list-group-item">
							<div class="panel panel-info">
								<div class="panel-heading">'.$exams[$i]->Asignatura.'</div>
								<div class="panel-body">
                                    <div id="exam_info">
                                        Fecha del examen: '.$exams[$i]->fecha.'    '.$date_status.
                                        '<br>
                                        Status del examen: '.$sign_status.'
                                    </div>
									<div class="btn-group-horizontal">
									  <button type="button" class="btn btn-danger btn-xs">Dar de baja</button>
									  '.$aply_button.'
									</div>
								</div>
							</div>
						</li>';
    }
    
}

function fillExamByCarrier(){
    $exams = $GLOBALS['exams_by_carrier'];
    for($i = 0; $i < count($exams); $i++){
        echo '<option> Examen: '.$exams[$i]->Asignatura.', Fecha: '.substr($exams[$i]->fecha, 0, 10).'</option>';
    }
}

function addExam($exam_reg){
    
}
?>
