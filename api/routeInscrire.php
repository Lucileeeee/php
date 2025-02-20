<?php
include './util/connexion.php';
include './model/account.php';
/* include './vue/account.php'; */
include 'accountController.php';

//ROUTE POUR ENREGISTRER UN UTILISATEURS
//METTRE EN PLACE LES HEADERS DE CONTROLE
// Accès depuis n'importe quel site ou appareil (*)
header("Access-Control-Allow-Origin: *");
// Format des données envoyées
header("Content-Type: application/json; charset=UTF-8");
// Méthode autorisée, ici POST, mais ça peut être GET, PUT ou DELETE
header("Access-Control-Allow-Methods: POST");
// Durée de vie de la requête
header("Access-Control-Max-Age: 3600");
// Entêtes autorisées
header("Access-Control-Allow-Headers: Content-Type, Access-Control-AllowHeaders, Authorization, X-Requested-With");
//VERIFIER LA METHOD $_REQUEST
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    http_response_code(405);
    echo json_encode(['message' => "Method non autorisée", 'code response' => 405]);
    return;
}
//RECUPERER MES DONNEES
//Method POST, donc je dois accéder au body de la requête reçue grâce à file_get_contents()
$data = file_get_contents('php://input');
//Decode le json reçu pour le lire correctement
$data = json_decode($data);
//Je fais ce que je veux de mes $data (inscription d'un utilisateur)
//...

$bdd = connexion();
signUp($bdd, $data);



//REPONSE AU SYSTEME EXTERNE
//1) Encode de la réponse
http_response_code(200);
//2) Transformation de la réponse en json
$response = json_encode(['message' => "Tout s'est bien passé", 'code response' => 200]);
//3) Envoyer ma réponse, grâce à echo
echo $response;