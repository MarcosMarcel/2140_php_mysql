<?php

$numuno = 4;
$numdos = 6;
$numtres = 9;
$numcuatro = 4;
$textuno = "4";


echo("<h1>Operadores comparacion</h1>");

$resultado = $numuno == $numdos;
var_dump($resultado);
$resultado = $numuno == $numcuatro;
var_dump($resultado);
$resultado = $numuno == $textuno;
var_dump($resultado);
$resultado = $numuno === $textuno;
var_dump($resultado);
echo("<hr>");
$resultado = $numuno != $numdos;
var_dump($resultado);
$resultado = $numuno != $numcuatro;
var_dump($resultado);
$resultado = $numuno !== $numcuatro;
var_dump($resultado);
echo("<hr>");
$resultado = $numuno>$numdos;
var_dump($resultado);
$resultado = $numuno<$numdos;
var_dump($resultado);
$resultado = $numuno>=$numdos;
var_dump($resultado);
$resultado = $numuno<=$numdos;
var_dump($resultado);



?>