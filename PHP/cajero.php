<?php

$totalPlata = 100000;
$maximoSacar = 15000;
$respuesta="";

$plataRetirar = 14900;
$plataGuardada=100000;

$recibo = true;
$prestamo = 3;

if($plataRetirar>$totalPlata){
    $respuesta="No hay tanta plata";
}elseif($plataRetirar>=$maximoSacar){
    $respuesta = "Supera el maximo";
}elseif($plataRetirar>$plataGuardada){
    $respuesta = "Supera el saldo";

}else{
    $respuesta = "Proceso realizado";
    if($recibo){
        $respuesta .="<br> Imprimiendo recibo";
    }else{
        $respuesta .="<br> usted cuida el planeta";
    }
    switch($prestamo){
        case 1:
            $respuesta .="<br> Usted saco 10000";
            break;
        case 2:
            $respuesta .="<br> Usted saco 20000";
            break;
        case 3:
            $respuesta .="<br> Usted saco 30000";
            break;
        default:
            $respuesta .="<br> Usted saco 200000";
            break;
        
    
    }

}

?>
<html>
    <head>
    </head>
    <body>
        <h1><?=$respuesta?></h1>
    </body>
</html>
