<?php

/* Affichage des erreurs php */

ini_set("display_errors",1);
error_reporting(E_ALL);




// Récupérer les données du fichier csv et le stocker dans une variable sous forme de tableau
$users = 'users.csv';
$platform1 = 'platform1.csv';


function viewPlatform1($file) {
  $result=[];
  if (($csvFile = fopen($file, "r")) !== FALSE) {
    while (($data = fgetcsv($csvFile, 1000, ";", " ")) !== FALSE) {
      $num = count($data);
      $tab=[];
      for ($i=0; $i < $num; $i=$i+3) {
        $tab['start_at']=$data[$i];
        $tab["end_at"]= $data[$i+1];
        $tab["tel"]=$data[$i+2];
        $result[]=$tab;
      }
    }
    //echo "<pre>";
    //var_dump($result);
    //echo "</pre>";
  }
  return $result;
}

$arrayPlatform1 = viewPlatform1($platform1);

?>









