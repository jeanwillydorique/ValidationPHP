<?php

require_once('./Template/header.php');
require_once('./Function/Cookie.php');
require_once('./Function/Auth.php');



$uri = $_SERVER["REQUEST_URI"];
$decoupe = explode('/',$uri);

if ( $decoupe[1] === "page" ) {
    $decoupe[2]();
} else {
    $url = "./page" . $uri . ".php";
    header("Location: $url"); 
}

require_once('./Template/footer.php');

