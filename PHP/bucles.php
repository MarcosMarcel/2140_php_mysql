<?php


$i=0;

while($i<5){
echo("<h1> $i </h1>");
$i++;
}
echo("<hr>");
$j=0;
$sigo=true;

while($sigo){
    echo("<h1> $j </h1>");
    $j++;
    if($j>=5){
        $sigo=false;
    }
}

echo("<hr>");
echo("<hr>");
for($k=0; $k<5;$k++){
    echo("<h1> $k </h1>");
}

echo("<hr>");
echo("<hr>");
echo("<hr>");

$varuno=true;

for($l=0; $varuno; $l++){
    if($l>=5){
        $varuno = false;
    }
}

echo("<hr>");
echo("<hr>");

$h=0;
do{
    echo("<h1> $h </h1>");
    $h++;

}while($h<5);




?>