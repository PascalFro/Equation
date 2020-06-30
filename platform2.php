<?php

/* Affichage des erreurs php */

ini_set("display_errors",1);
error_reporting(E_ALL);




// Récupérer les données du fichier csv et le stocker dans une variable sous forme de tableau
$platform2 = 'platform2.csv';


function viewPlatform2($file) {
  $result=[];
  if (($csvFile = fopen($file, "r")) !== FALSE) {
      while (($data = fgetcsv($csvFile, 1000, ";", " ")) !== FALSE) {
          $num = count($data);
$tab=[];
          for ($i=0; $i < $num; $i=$i+3) {

    //ici faudrai pas fair un i++ mais un i=i+3
    $tab['tel']=$data[$i];
    $tab["timestamp"]= $data[$i+1];
    $tab["duration"]=$data[$i+2];
    $result[]=$tab;
          }
      }
    //echo "<pre>";
    //var_dump($result);
    //echo "</pre>";
  }
  return $result;
}

$arrayPlatform2 = viewPlatform2($platform2);
?>









