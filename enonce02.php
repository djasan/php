<?php
/* $personsJson = file_get_contents('./data/persons.json');
$persons = json_decode($personsJson,true); */

$persons = json_decode(file_get_contents('./data/persons.json'),true);
// print_r($persons);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persons</title>
</head>
<body>
    <h3><?=$persons[2]['friends'][1]['name']?></h3>
    <p>
        La couleur des yeux de Ball Shaffer est : 
        <strong>
            <?=$persons[1]['eyeColor']?>
        </strong>.
    </p>
        <?php 
        foreach ($persons as $key => $val) 
        {
        ?>
        <article>
            <img src="<?=$val['picture']?>" alt="<?=$val['name']?>">
            <p>Nom: <?=$val['name']?></p>
            <p>Age: <?=$val['age']?></p>
            <p>Couleur des yeux : <?=$val['eyeColor']?></p>
            <p>Email: email de la personne : <?=$val['email']?></p>
            <p>Fruit favori : <?=$val['favoriteFruit']?></p>

            <p><?=$val['isActive'] ? 'ACTIF' : '' ?></p>
            <?=$val['isActive'] ? '<p>ACTIF</p>' : '' ?>

            <p>
                <?php
                if ($val['isActive'])
                {
                    echo "<p>ACTIF</p>";
                } 
                ?>          
            </p>
            <p>
                Tags:
                <?=implode(",",$val['tags']) ?>
            </p>
            <hr> 
        </article>
        <?php 
        } 
        ?>

</body>
</html>