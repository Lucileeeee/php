<?php
include './vehicule.php';

$mercedes = new Vehicule('Mercedes CKL', 4, 250);
$moto = new Vehicule('Honda CBR', 2, 280);


echo 'Nom du Véhicule : '.$mercedes->getNom();
echo "<br>";
echo 'Nom du Véhicule : '.$moto->getNom();
echo "<br><br>";

echo'Type du véhicule: <br>';
$mercedes->detect();
echo "<br><br>";
echo'Type du véhicule: <br>';
$moto->detect();
echo "<br><br>";

echo 'vitesse Max de merco : '.$mercedes->getVitesseMax();
echo "<br>";
$mercedes->boost();
echo "<br>";
echo 'vitesse Max de merco : '. $mercedes->getVitesseMax();
echo "<br><br>";

echo 'vitesse Max de moto : '.$moto->getVitesseMax();
echo "<br>";
//$moto->boost();
echo "<br>";
echo 'vitesse Max de moto : '. $moto->getVitesseMax();
echo "<br>";

echo 'Allé on teste : <br>';
echo 'Véhicule le plus rapide : '. $moto->plusRapide($mercedes) ;