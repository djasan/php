
<?php


$x = 5;
$y = 3;
function calcul($x)

{

    global $y;
    $y = 7;
    return $x + $y;
}


echo calcul(5);
dd($y);




?>





