<?php

$numuno = 5;
$numdos = 4;
$numtres = 6;
$numcuatro = 2;
$numNegativo = -3;

$resultado = $numuno + $numdos;
echo("<h1>Operadores de arismeticos</h1>");
var_dump($resultado);
echo("-");
print_r($resultado);
echo("-");
echo($resultado);
echo("<hr>");

$resultado = -$numuno;
print_r($resultado);
echo("|");
print_r($numNegativo);
echo("|");
$resultado = -$numNegativo;
print_r($resultado);
echo("<hr>");
$resultado = $numtres - $numdos;
print_r($resultado);
echo("<hr>");
$resultado = $numtres * $numdos;
print_r($resultado);
echo("<hr>");
$resultado = $numtres / $numdos;
print_r($resultado);
echo("<hr>");
$resultado = $numcuatro % $numdos;
print_r($resultado);
echo("<hr>");
$resultado = $numcuatro ** $numdos;
print_r($resultado);
echo("<hr>");
$resultado = ($numcuatro + $numdos)/2;
print_r($resultado);
echo("<hr>");
echo("<hr>");
echo("<h1>Operadores de asignacion</h1>");
$numero = 7;
print_r($numero);
echo("<hr>");
$numero +=2;
print_r($numero);
echo("<hr>");
$numero -=4;
print_r($numero);

echo("<hr>");
$texto = "Hola soy texto";
print_r($texto);
echo("<hr>");
$texto = "Hola soy texto" ." mas texto ".$numero;
var_dump($texto);
echo("<hr>");
$varConcateno = "Primera parte";
print_r($varConcateno);
echo("|");
$varConcateno .=" Soy la segunda parte";
print_r($varConcateno);

?>

