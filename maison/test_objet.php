<?php
include './maison.php';

$villa = new Maison("Villa Gracias", 200, 400, 5);


echo "Nom : ". $villa->getNom();
echo "<br><br>";
echo "Largeur : ". $villa->getLargeur();
echo "<br><br>";
echo "Longueur : ". $villa->getLongueur();
echo "<br><br>";
echo "Nombre d'étages : ". $villa->getNbrEtage();
echo "<br><br>";
$villa->surface();
