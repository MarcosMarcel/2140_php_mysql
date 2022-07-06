<?php

echo("soy array");
echo("<br>");
$arrayColoresUno = array("Verde","Naranja","Rojo","Violeta");
print_r($arrayColoresUno);
echo("<br>");
$arrayColoresUno[]="Amarillo";
$arrayColoresUno[]="Marron";
$arrayColoresUno[6]="Azul";
$arrayColoresUno[]="Celeste";
$arrayColoresUno[10]="Gris";
$arrayColoresUno[]="Negro";
$arrayColoresUno[8]="Fuxia";

print_r($arrayColoresUno);

echo("<br>");
echo("<hr>");

$arrayColoresDos = array("Amarillo"=>"#f3fa7f","Rojo"=>"#d3221a","Verde"=>"#18e22d");
print_r($arrayColoresDos);
echo("<br>");

$arrayColoresDos['Azul']="#0b2383";
$arrayColoresDos[] = "#a9abb3";
$arrayColoresDos[] = "#6e4f67";
$arrayColoresDos['Blanco'] = "#ffffff";
$arrayColoresDos['Negro'] = "#bb1c97";
$arrayColoresDos['Negro'] = "#020001";
print_r($arrayColoresDos);
echo("<br>");
var_dump($arrayColoresDos);
echo("<br>");
print_r($arrayColoresDos['Blanco']);
echo("<br>");
if($arrayColoresDos['Blanco']=="#ffffff")
{
    echo("Soy Blanco");
}


foreach($arrayColoresDos as $valor){
    echo("<br>");
    print_r("Color Hex:".$valor);
    if($valor=="#ffffff"){
        echo(" - Soy el blanco");
    }
}

echo("<br>");
echo("<hr>");

foreach($arrayColoresDos as $clave =>$valor){
    echo("<br>");
    print_r("Color :".$clave ."Hex:".$valor);
    if($valor=="#ffffff"){
        echo(" - Soy el blanco");
    }
}


echo("<br>");
echo("<hr>");

$arrayDesordenado = array(5,7,2,3,9,1);
$arrayOrdenado = array();
$numeroMenor = 0;
$posicionNumero=0;

print_r($arrayDesordenado);
echo("<br>");
print_r(count($arrayDesordenado));



echo("<br>");
echo("<hr>");
$totalArray = count($arrayDesordenado);

for($k=0; $k<$totalArray;$k++){

    for($i = 0; $i<$totalArray;$i++){
        print_r("<br>".$arrayDesordenado[$i]);
        if($arrayDesordenado[$i]!=null && $arrayDesordenado[$i]<$numeroMenor || $numeroMenor==0){
            $numeroMenor = $arrayDesordenado[$i];
            $posicionNumero=$i;


        }

    }
    $arrayOrdenando[]=$numeroMenor;
    $arrayDesordenado[$posicionNumero]=null;
    $numeroMenor=0;
}
echo("<br>Mi array ordenado:");
print_r($arrayOrdenado);


echo("<br>");
echo("<hr>");

$arrayTextoInverso=array();
$arrayTextoFinal=array();

$strTexto = "Soy el texto";
$arrayTexto = str_split($strTexto);

$final = 0;
$i=0;

print_r($arrayTexto);


foreach($arrayTexto as $letra){

    $final = count($arrayTexto) - $i;
    $arrayTextoInverso [$final] = $letra;
    $i++;

}


echo("<br> Inverso:");
print_r($arrayTextoInverso);

for($k=0;$k<=count($arrayTextoInverso);$k++){

    $final = $k;
    if(isset($arrayTextoInverso[$final])){
    $arrayTextoFinal[$k] = $arrayTextoInverso[$final];
    }
}
echo("<br> Final:");
print_r($arrayTextoFinal);
$textofinal = implode("",$arrayTextoFinal);
print_r($textofinal);











?>