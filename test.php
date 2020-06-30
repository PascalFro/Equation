<?php

/* Affichage des erreurs php */

ini_set("display_errors",1);
error_reporting(E_ALL);

// Récupérer les données du fichier csv et le stocker dans une variable sous forme de tableau
$users = 'users.csv';
$platform1 = 'platform1.csv';
$platform2 = 'platform2.csv';

require "users.php";
require "platform1.php";
require "platform2.php";

$result = array_merge($arrayPlatform1, $arrayPlatform2);
echo "<pre>";
//var_dump($result);
echo "</pre>";

$tab = array_merge($arrayUsers, $result);
echo "<pre>";
//var_dump($tab);
echo "</pre>";

echo "<pre>";
var_dump(array_values($tab));
echo "</pre>";
