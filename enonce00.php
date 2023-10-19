<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>enonce00</title>
</head>

    



<body>
    <h1>Liste des nombres Pair et Impair</h1>
    <ul>
        <?php
        $nombres = array(27, 15, 34, 379, 248, 5643, 81, 211, 999, 142, 300, 572);

        foreach ($nombres as $nombre) {
            $resultat = ($nombre % 2 == 0) ? 'pair' : 'impair';
            echo "<li>{$nombre} : {$resultat}</li>";
        }
        ?>
    </ul>
</body>

</html>