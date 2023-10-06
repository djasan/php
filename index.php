<?php
require './fonction.php';

// Tableau indexé


/*
$tab1 = [];
$notes = [12,14,6,10];

$tab1[] = 'Janvier';
$tab1[] = 45;
$tab1[] = true;

array_push($tab1, 'Voiture', 10.5, [45,true,'Truc']);

$tabFusion = array_merge($tab1,$notes);

dbug($tabFusion);

dd($tabFusion[5][2]); */

// Tableaux associatif

$titre = "Tableaux php";

$fruits=[
"banane "=>"jaune",
"pomme"=>"rouge",
"kiwi"=>"vert",

];


/*dd($fruits["pomme"]);  */

/* $fruits["poire"]="vert";
dd($fruits);
 */

/* $chaine =implode(",",$fruits);
$fruits2 =explode(",",$chaine);
dd($fruits2); */

/* $phrase = "une petite, phrase courte,";
$tabPhrase = explode(",",$tabPhrase);
dd($tabPhrase); */
/* ", ou - pour séparer" toujours rester cohérent soit - partout soit , partout
 explode scinde (tableau indexé),la chaine de caractère, implode rassemble */
 $planetes =["mars","terre","uranus","venus","jupiter","mercure"];
/* dd($planetes); */


$planetes2 =[
"m" =>"mars",
"t" =>"terre",
"u" =>"uranus",
"v" =>"venus",
"j" =>"jupiter",
"m" =>"mercure",
];

/* dd($planetes2) */
/* sort($planetes);
 dd($planetes);  */

/* dbug($planetes); */
/*  rsort($planetes);

krsort($planetes);
 */
/* asort($planetes); */
/* arsort($planetes); */
/* krsort($planetes);

 dd($planetes); */
/* 
sort
asort
arsort
rsort 
ksort
krsort*/
$tab =[];

$tab[] =[  "A","B" ,"C" ];

$tab[] =["Q", "R","T"];
$tab[] =["E", "U","P","I"];

$tab[ ]= 


dd($tab[0][2].$tab[2][0].$tab[2][2].$tab[2][2].$tab[2][3].$tab[0][2]);

/*Ecrire le mot ceppic avec les lettres du tableau $tab  */


/* require './index.view.php'; */
?>