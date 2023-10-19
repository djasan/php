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
$json_data = file_get_contents('data/colors.json');
$data = json_decode($json_data, true);

// Vérifier si la lecture du fichier JSON a réussi
if ($data === null) {
    echo "Erreur lors de la lecture du fichier JSON.";
} else {
    // Parcourir le tableau associatif obtenu à partir du JSON avec une boucle foreach
    echo "<ul>";
    foreach ($data as $key => $value) {
        echo "<li>$key : $value</li>";
    }
    echo "</ul>";
}
?>


</body>
</html>



