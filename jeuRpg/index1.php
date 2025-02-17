<?php
include './AbstractPersonnage/abstractPerso.php';
include './Interface/interfaceArme.php';

include './ComportementArme/arc.php';
include './ComportementArme/epee.php';
include './ComportementArme/projectileMagique.php';

include './Model/guerrier.php';
include './Model/magicien.php';
include './Model/voleur.php';

$guerrier = new Guerrier('Gege le Guerrier', new Arc(), 'guerrier');
$guerrier->afficher();
//(?string $nom, ?InterfaceArme $comportementArme, ?string $type)

