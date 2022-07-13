<?php
// Si no pasa parametro fecha pone ese texto

include("funciones_externas.php"); // incluye todo (si no existe no pasa nada)

//include_once("funciones_externas.php"); // solo una vez se puede llamar

//require("funciones_externas.php"); // incluye todo (si no existe explota)

//require_once("funciones_externas.php"); // incluye solo una vez (si no existe explota)



    function miFuncion($s, $fe = "No trajo fecha", $colores = array()){

        echo($s."<br>");
        echo("Fecha".$fe."<br>");

        var_dump($colores);

    }


    


    $strTexto="Hola yo viajo por parametro";
    $fecha=date("d-m-Y");
    

    miFuncion($strTexto,$fecha,$strTexto);
    echo("<br>");


    $va = 10;
    $vb = 40;

    $respuesta = suma($va,$vb);
    print_r("El total es:".$respuesta);


    function darVueltaTexto($valorA){

    }

    



?>