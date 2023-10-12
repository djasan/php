






<?php
require './fonction.php';
// dd($_SERVER);
// dd($_SERVER["REQUEST_URI"] );

$url = 'http://http://localhost/php/contact.php';

dd(parse_url ($_SERVER["REQUEST_URI"]))["path"];
if($url==="php");


?>














