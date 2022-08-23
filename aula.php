<?php

    require_once 'aulaOb.php';

    $aula = new aula;
    $aula->local = "SCS";
    $aula->turno = "matutino";
    $aula->sala = "113";
    $aula->professor = "Marcos";
    $aula->cancelamento = FALSE;
    $aula->adiar = TRUE;

    $aula->cancelar();
    $aula ->adiar();
    

?>