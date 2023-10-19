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

if ($json_data !== false) {
    // Décoder les données JSON
    $data = json_decode($json_data, true);

    // Vérifier si les données ont été correctement décodées
    if ($data !== null) {
        // Parcourir les personnes et afficher les informations
        foreach ($data['personnes'] as $personne) {
            echo "<p>Nom : " . $personne['nom'] . "</p>";
            echo "<p>Âge : " . $personne['age'] . "</p>";
            echo "<p>Email : " . $personne['email'] . "</p>";
            echo "<hr>";
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