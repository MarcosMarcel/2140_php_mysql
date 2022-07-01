<?php

$a=11;
$b=6;

if ($a>$b){
    echo("<h1>A es mayor que B</h1>");
}
else{
    echo("<h1>A es menor que B</h1>");
}

if (($a>$b) && ($a>10))
{
    echo('<h1> $a es mayor a $b y $a es mayor a 10</h1>');
   
}
else{
    echo('<h1> $a es menor a $b y $a es menor a 10</h1>');

}

echo("<hr>");
$a=15;
$b=15;
if($a>$b)
{
    echo('<h1> $a es mayor a $b </h1>');
}elseif($a===$b)
    {
        echo('<h1> $a es identico a $b </h1>');

    }elseif($a==$b)
        {
        echo('<h1> $a es igual a $b </h1>');
        }
        else
            {
                echo('<h1> $a es menor a $b </h1>');
            }
echo("<hr>");

$i=4;

switch($i){
    case 0:
        echo('<h1> $i vale 0 </h1>');
        break;
    case 1:
        echo('<h1> $i vale 1 </h1>');
        break;
    case 2:
        echo('<h1> $i vale 2 </h1>');
        break;
    case 3:
        echo('<h1> $i vale 3 </h1>');
        break;
    default:
        echo('<h1> $i vale mas de 3 </h1>');
}

?>