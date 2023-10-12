<?php
/* require "./fonction.php"; */

/* $titre = "structure de contrôle bis"; */


/* $age = 20;
if ($age >= 18) :
    echo 'peut voter.';else : 
    echo 'ne peut pas voter!!!';
endif; */
/* 
$heure =15;
if($heure>=12):
echo'on est le matin'; 
elseif($heure<=18):
    echo'on est le soir'; 
else : 


    echo'on est l apres-midi.';
endif;
 */

 ?>
 
 
 <?php
/* 
 $a = 20;
 $b = "5";
 
 if ($b == 3):
     echo "la variable \$b est égale à 3";
 endif;

 

 echo$vrai ? "vrai": "faux"; 
$votes=7500;
dbug($votes);

$votesPrecedents=1254;
($votes>$votesPrecedents) ? $votes --:$votes++;
 */


/* 
 $couleur>"vert";
 switch ("$couleur"){
    case "vert";
echo"Votre couleur favorite est le vert";
break;
case "bleue":

echo"Votre couleur favorite est le bleu";
break;

case" rouge";
echo "votre couleur favorite est le rouge";
break;

default;

echo"votre couleur favorite est ni le rouge, ni le bleu,ni le vert";
 } */
 ?>



<!--  <?php
 $food = 'cake';
 
 $return_value = match ($food) {
     'apple' => 'This food is an apple',
     'bar' => 'This food is a bar',
     'cake' => 'This food is a cake',
 };
 
 var_dump($return_value);
 ?> -->
 

 <?php

$age = 23;

$result = match (true) {
    $age >= 65 => 'senior',
    $age >= 25 => 'adult',
    $age >= 18 => 'young adult',
    default => 'kid',
};

var_dump($result);
?>




<!--  require './index.view.php';  -->