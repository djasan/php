<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>enonce03</title>
</head>

<body>

<?php

$colors = json_decode(file_get_contents('./data/colors.json'),true);

//print_r($colors);

foreach ($colors as $key => $val)
{
    echo '<div style="display:flex;justify-content:center;align-items:center;color:white;width:100px;height:100px;background-color:' . $val['value'] . '">' . $val['color'] . '</div>'; 
} 
?>
</body>
</html>



