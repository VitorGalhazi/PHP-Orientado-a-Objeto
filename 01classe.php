<?php

    class caneta{
        var $modelo;
        var $cor;
        var $ponta;
        var $tampada;
        var $carga;

        function rabiscar(){

            if($this->tampada == FALSE){
                echo "Estou rabiscando";
            }else{
                echo "Destampe a caneta";
            }

        }
        function tampar(){

            $this->tampada = TRUE;
        
        }
        function destampar(){

            $this->tampada = FALSE;
            
        }
    }

?>