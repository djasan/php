<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>enonce03</title>
</head>

<body>
    





<?php
// Lire le contenu du fichier JSON
$json_data = file_get_contents('data/user.json');

if ($json_data !== false) {
    // Décoder les données JSON
    $data = json_decode($json_data, true);

    // Vérifier si les données ont été correctement décodées
    if ($data !== null) {
        // Parcourir les données JSON et afficher les clés et les valeurs
        foreach ($data as $key => $value) {
            echo "$key : $value<br>";
        }
    } else {
        echo "Erreur lors du décodage des données JSON.";
    }
} else {
    echo "Erreur lors de la récupération des données depuis le fichier.";
}
?>




</body>
</html>



