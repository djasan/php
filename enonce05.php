<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des utilisateurs</title>
</head>
<body>

    <h1>Liste des utilisateurs</h1>
    <?php
    // Récupérer les données JSON de l'URL
    $url = "https://randomuser.me/api/?results=20";
    $json_data = file_get_contents($url);

    // Vérifier si la lecture de l'URL a réussi
    if ($json_data === false) {
        echo "Erreur lors de la récupération des données.";
    } else {
        // Décoder les données JSON
        $data = json_decode($json_data, true);

        // Vérifier si les données ont été correctement décodées
        if (isset($data['results']) && is_array($data['results'])) {
            $users = $data['results'];

            // Parcourir les utilisateurs et afficher les informations
            foreach ($users as $user) {
                $firstName = $user['name']['first'];
                $lastName = $user['name']['last'];
                $email = $user['email'];
                $gender = $user['gender'];
                $image = $user['picture']['large'];

                echo "<div>";
                echo "<img src='{$image}' alt='Image de $firstName $lastName'>";
                if ($gender === 'female') {
                    echo "<p class='female'>$firstName $lastName</p>";
                } else {
                    echo "<p>$firstName $lastName</p>";
                }
                echo "<p>Email : $email</p>";
                echo "</div>";
            }
        } else {
            echo "Les données JSON ne sont pas au format attendu.";
        }
    }
    ?>

</body>
</html>