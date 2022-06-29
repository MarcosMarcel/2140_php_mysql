<?php

$a = true;
$b = false;
$c = true;
$d = false;

echo("<h1>Operadores logicos</h1>");

var_dump($a);
echo("<hr>");
$resultado = $a && $b;
var_dump($resultado);
echo("<hr>");
$resultado = $a && $c;
var_dump($resultado);
echo("<hr>");
$resultado = $b && $d;
var_dump($resultado);
echo("<hr>");
$resultado = $a || $b;
var_dump($resultado);
echo("<hr>");
$resultado = $a || $c;
var_dump($resultado);
echo("<hr>");
$resultado = $b || $d;
var_dump($resultado);
echo("<hr>");
$resultado = $a xor $b;
var_dump($resultado);
echo("<hr>");
$resultado = $a xor $c;
var_dump($resultado);
echo("<hr>");
$resultado = $b xor $d;
var_dump($resultado);
echo("<hr>");
$resultado = !$a;
var_dump($resultado);
echo("<hr>");
$resultado = !$b;
var_dump($resultado);





?>