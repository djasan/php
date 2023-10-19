<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des utilisateurs</title>
</head>
<body>

    <h1>Liste des utilisateurs</h1>
  

36 changes: 36 additions & 0 deletions 36
enonce-04.php
@@ -0,0 +1,36 @@
<?php
$users = json_decode(file_get_contents('https://dummyjson.com/user'),true);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dummyjson</title>
    <style>
        main {
            display: flex;
            flex-wrap: wrap;
            min-width: 800px;
            margin:0 auto;
        }
    </style>
</head>
<body>
    <main>
    <?php foreach($users['users'] as $key => $val)
    {
    ?>
        <figure>
            <img src="<?=$val['image']?>">
            <figcaption>
                <p><?=$val['firstName']?> <?=$val['lastName']?></p>
                <p><?=$val['email']?></p>
            </figcaption>
        </figure>
    <?php
    }
    ?>
    </main>
</body>
</html>