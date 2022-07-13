<?php



echo('Conexion a la base de datos');


// PDO
// PDO("String conexion",)

$options =[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_CASE => PDO::CASE_NATURAL,
    PDO::ATTR_ORACLE_NULLS => PDO::NULL_EMPTY_STRING
];

$objConexion = new PDO("mysql:localhost=localhost;dbname=curso_2140","root","",$options);

$sql="select * from profesores";
$preparo = $objConexion->prepare($sql);
$preparo->execute(array());
$lista = $preparo->fetchAll();

print_r($lista);


?>