<?php
include './Interface/interfaceArme.php';
include './AbstractPersonnage/abstractPerso.php';


include './ComportementArme/arc.php';
include './ComportementArme/epee.php';
include './ComportementArme/projectileMagique.php';

include './Model/guerrier.php';
include './Model/magicien.php';
include './Model/voleur.php';

$guerrier = new Guerrier('Gege le Guerrier', $arc1 = new Arc(), 'guerrier');
$guerrier->afficher();
$guerrier->attaquer() ;


echo '<br><br><br>';

$magicien = new Magicien ('Merlin', $batton = new ProjectileMagique(), 'magicien');
$magicien->afficher();
echo $arc1->getType();
//(?string $nom, ?InterfaceArme $comportementArme, ?string $type)


