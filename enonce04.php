<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des utilisateurs</title>
</head>
<body>
<body>
    <h1>Liste des utilisateurs</h1>
    <?php
    // Récupérer les données JSON de l'URL
    $url = "https://dummyjson.com/user";
    $json_data = file_get_contents($url);

    // Vérifier si la lecture de l'URL a réussi
    if ($json_data === false) {
        echo "Erreur lors de la récupération des données.";
    } else {
        // Décoder les données JSON
        $users = json_decode($json_data, true);

        // Parcourir les utilisateurs et afficher les informations
        foreach ($users as $user) {
            echo "<div>";
            echo "<img src='{$user['image']}' alt='Image de {$user['firstName']} {$user['lastName']}'>";
            echo "<p>Prénom : {$user['firstName']}</p>";
            echo "<p>Nom : {$user['lastName']}</p>";
            echo "<p>Email : {$user['email']}</p>";
            echo "</div>";
        }
    }
    ?>
</body>
</html>
</body>
</html>