<?php
require "./fonction.php";

$titre = "Boucles php";
/* 
$planetes = ['mars', 'terre', 'uranus', 'venus', 'jupiter', 'mercure'];
$planetes2 = [
    'm' => 'mars',
    't' => 'terre',
    'u' => 'uranus',
    'v' => 'venus',
    'j' => 'jupiter',
]; */

/* dbug($planetes2); */
$user =[
    'nom' => 'Doucet Lucien',
    'email' => 'ldoupet@yaya.com',
    'competence'=> ['php','react','python']
];

  foreach($user as $ket => $value):
    echo $key . '.' . $value;
 endforeach;

dbug($user);


 require './index.view.php'; 