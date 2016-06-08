<?php
require_once("wsdl_client.php");

$preguntas = $cliente->getAswerQuestion(1);
$preguntas_count = count($preguntas);
$_SESSION['count'] = $preguntas_count;

function setQuestio($possition){
    $cliente = $GLOBALS['cliente'];
    $id_pregunta = $GLOBALS['preguntas'][$possition]->id_pregunta;
    echo $cliente->getQuestion($id_pregunta);
}

function setAnswer($possition){
    $cliente = $GLOBALS['cliente'];
    $preguntas = $cliente->getAswerQuestion($GLOBALS['id_examen']);
    $id_respuesta = $GLOBALS['preguntas'][$possition]->id_respuesta;
    
    echo '<div class="radio">
            <label><input type="radio" name="answer" value="1">'.$cliente->getAnswer($id_respuesta).'</label>
          </div>';
}

?>
