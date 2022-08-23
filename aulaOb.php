<?php

  class aula{
    var $local;
    var $turno;
    var $professor;
    var $sala;
    var $cancelamento;
    var $adiar;

    function cancelar(){
        if($this->cancelamento==TRUE){
            echo "Aula cancelada";
        }else{
            echo "Aula marcada";
        }
    }

    function adiar(){
        if($this->cancelamento == FALSE &&  $this->adiar == TRUE){
            echo "Aula adiada";
        }else{
            echo "Aula marcada";
        }
    }
  }  

?>