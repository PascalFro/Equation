<?php

/* Affichage des erreurs php */

ini_set("display_errors",1);
error_reporting(E_ALL);




// Récupérer les données du fichier csv et le stocker dans une variable sous forme de tableau
$users = 'users.csv';

function viewUsers($file) {
  $result=[];
  if (($csvFile = fopen($file, "r")) !== FALSE) {
    while (($data = fgetcsv($csvFile, 1000, ";", " ")) !== FALSE) {
        $num = count($data);
        $tab=[];
        for ($i=0; $i < $num; $i=$i+3) {
          $tab['tel']=$data[$i];
          $tab["prenom"]= $data[$i+1];
          $tab["nom"]=$data[$i+2];
          $result[]=$tab;
        }
      }
    //echo "<pre>";
    //var_dump($result);
    //echo "</pre>";
  }
  return $result;
}

$arrayUsers = viewUsers($users);

?>







