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
    /* 
$titre = "Tableaux php";

$fruits = [
    "banane " => "jaune",
    "pomme" => "rouge",
    "kiwi" => "vert",

];
 */

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
    /*  $planetes =["mars","terre","uranus","venus","jupiter","mercure"];
/* dd($planetes); */
    /* 

$planetes2 =[
"m" =>"mars",
"t" =>"terre",
"u" =>"uranus",
"v" =>"venus",
"j" =>"jupiter",
"m" =>"mercure",
];
 */
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
krsort*//*
$tab =[];

$tab[] =[  "A","B" ,"C" ];

$tab[] =["Q", "R","T"];
$tab[] =["E", "U","P","I"];

$tab[ ]= 


dd($tab[0][2].$tab[2][0].$tab[2][2].$tab[2][2].$tab[2][3].$tab[0][2]);  */

    /*Ecrire le mot ceppic avec les lettres du tableau $tab  */

    /* $person1 = [
    'nom' => 'Carle',
    'prenom' => 'Awa',
    'email' => 'cawa@wahoo.com'
];

$people = [
    $person1,
    [
        'nom' => 'Mourad',
        'prenom' => 'Michel',
        'email' => 'moumi@caramail.com'
    ],
    [
        'nom' => 'Dupond',
        'prenom' => 'Lucie',
        'email' => 'ludo@gimayle.com'
    ]
];
dbug($people); */
    // unset($people);

    // Afficher les phrases suivantes :
    // Le nom de Lucie est Dupond.
    // L'email de Michel MOURAD est moumi@caramail.com.

    /* dbug('Le nom de '. $people[2]['prenom'] . ' est ' . $people[2]['nom'] . '.');
dbug("L'email de " . $people[1]['prenom'] . ' ' . strtoupper($people[1]['nom']) . ' est ' . $people[1]['email'] . '.');

$jsonPeople = json_encode($people); */

    /* $jsonPerson = '{
"nom" : "Pompaneuf",
"prenom" : "Albert",
"email" : "pontal@free.fr",
"couleur" : ["rouge","vert","jaune"],
"image" :"https://ximg.es/128x128/000/fff"

}'; */

    /* dd($jsonPerson); */

    /* $jsonPersonPersonArrayPhp = json_decode($jsonPerson, true); */

    // dd($jsonPersonPersonArrayPhp);

    /* afficher une card pour cette personne. */





    /* <figure>
    <img src="<?= $jsonPersonPersonArrayPhp["image"] ?>" alt="Image de la personne">
    <figcaption>
        <ul>
            <li>
                <?= $jsonPersonPersonArrayPhp["prenom"] ?> <?= $jsonPersonPersonArrayPhp["nom"] ?>
            </li>
            <li>
                Email: <?= $jsonPersonPersonArrayPhp["email"] ?>
            </li>
        </ul>
    </figcaption>
    Couleur préférée: <?= $jsonPersonPersonArrayPhp["couleur"][0] ?>
</figure> */




$urlApi = 'https://pokeapi.co/api/v2/pokemon/ditto';
$jsonApi = file_get_contents($urlApi);
$jsonApiArray = json_decode($jsonApi,true);

// dd($jsonApiArray);
// dd($jsonApiArray['abilities'][0]['ability']['name']);

// dd($jsonApiArray['sprites']['back_default']);
?>
<img src="<?=$jsonApiArray['sprites']['back_default']?>">


<?php
//require './index.view.php';
?>


<?php










?>