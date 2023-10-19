<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations sur les personnes</title>
</head>


<body>


<h1>Informations sur les personnes</h1>
    <?php
    // Lire le contenu du fichier JSON
    $json_data = file_get_contents('data/persons.json');
    $data = json_decode($json_data, true);

    // Récupérer la deuxième amie de Raymond Jimenez
    $raymond_jimenez_friends = $data['Raymond Jimenez']['friends'];
    $deuxieme_amie = $raymond_jimenez_friends[1];

    // Afficher le nom du deuxième ami de Raymond Jimenez dans un titre h3
    echo "<h3>{$deuxieme_amie}</h3>";

    // Récupérer la couleur des yeux de Ball Shaffer
    $ball_shaffer = $data['Ball Shaffer'];
    $couleur_des_yeux = $ball_shaffer['eyeColor'];

    // Afficher la couleur des yeux de Ball Shaffer en gras
    echo "<p>La couleur des yeux de Ball Shaffer est : <strong>{$couleur_des_yeux}</strong></p>";

    // Afficher les informations sur chaque personne
    foreach ($data as $person) {
        echo "<article>";
        echo "<img src='{$person['picture']}' alt='Image de {$person['name']}'>";
        echo "<p>Nom : {$person['name']}</p>";
        echo "<p>Age : {$person['age']}</p>";
        echo "<p>Couleur des yeux : {$person['eyeColor']}</p>";
        echo "<p>Email : {$person['email']}</p>";
        echo "<p>Fruit favori : {$person['favoriteFruit']}</p>";
        echo $person['isActive'] ? "<p>ACTIF</p>" : "<p>INACTIF</p>";
        echo "<p>Tags : " . implode(', ', $person['tags']) . "</p>";
        echo "</article>";
        echo "<hr>";
    }
    ?>
</body>
</html>