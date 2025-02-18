<?php
//FICHIER D'EXECUTION, DONC IMPORT DE TOUTES LES RESSOURCES
session_start();

include './env.php';
include './utils/utils.php';
include './interface/interfaceView.php';
include './abstract/abstractController.php';
include './view/viewHeader.php';
include './view/viewAccount.php';
include './view/viewFooter.php';
include './controller/accountController.php';

$home = new AccountController(null,['header'=>new ViewHeader(),'footer'=> new ViewFooter()]);
$home->render();