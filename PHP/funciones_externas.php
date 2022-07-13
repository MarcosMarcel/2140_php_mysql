<?php

function suma($a,$b){

    if(is_numeric($a) && is_numeric($b)){
        $respuesta = $a + $b;


    } else{

        $respuesta = " Error";
    }

    return $respuesta;

}

?>