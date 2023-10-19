<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <title>Conversion Celsius en Fahrenheit</title>
</head>
<body>
    <h1>Tableau de Conversion Celsius en Fahrenheit</h1>
    <table border="1">
        <thead>
            <tr>
                <th>°C</th>
                <th>°F</th>
            </tr>
        </thead>
        <tbody>
            <?php
            function celsiusToFahrenheit($celsius) {
                $fahrenheit = ($celsius * 9/5) + 32;
                return round($fahrenheit);
            }

            $conversions = array(
                array(25, celsiusToFahrenheit(25)),
                array(3, celsiusToFahrenheit(3)),
                array(35, celsiusToFahrenheit(35)),
                array(11, celsiusToFahrenheit(11))
            );

            foreach ($conversions as $conversion) {
                echo "<tr><td>{$conversion[0]}</td><td>{$conversion[1]}</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>