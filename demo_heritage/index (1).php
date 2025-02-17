<?php
include './vehicule.php';
include './moto.php';

$mercedes = new Vehicule(4);
$moto = new Moto("Mon super Guidon");


echo $mercedes->getCouleur();
echo "<br><br>";
//Moto hérite de la classe Vehicule, donc elle a accès au Getter et Setter de Vehicule
$moto->setCouleur("Rouge")->setNbrRoue(2);
echo "<br><br>";
echo $moto->getVitesseMax();
echo "<br><br>";
echo "<br><br>";
echo "Nbr Roue : ".$moto->getNbrRoue()."<br><br>";
$moto->accelerer(100);

$mercedes->setNbrRoue(8);
$mercedes->setCouleur("Verte");
echo $mercedes->getNbrRoue()." ".$mercedes->getCouleur();

echo "<br><br>";
echo "<br><br>";

//Avantage du return $this dans les Setter : on peut chaîner les méthode. Ce qui est visuellement plus élégant
$mercedes->setNbrRoue(6)->setCouleur("Rose");
echo $mercedes->getNbrRoue()." ".$mercedes->getCouleur();

$mercedes->accelerer(50);

