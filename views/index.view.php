

<?php
require './fonction.php';
// dd($_SERVER);
// dd($_SERVER["REQUEST_URI"] );



dd(parse_url($_SERVER["REQUEST_URI"]))["path"];
if ($url === "php");
$routes = [
    '/php =>', 'controller/index.php',
    '/contact =>', 'controller/index.php',
    '/notes =>', 'controller/index.php',
];



?>