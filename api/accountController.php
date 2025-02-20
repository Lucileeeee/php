<?php
/* include './model/account.php'; */


/*
*@method Créer un nouveau compte utilisateur
*@param PDO $bdd
*@return string
*/
function signUp($bdd, $account):string{
    //Vérifier qu'on reçoit le formulaire
   // if(isset($_POST['submitSignUp'])){
        if(empty($account->pseudo) || empty($account->email) || empty($account->mdp)){
            return "Veuillez remplir les champs !";
        }
        //Vérifier le format des données : ici l'email
        if(!filter_var($account->email,FILTER_VALIDATE_EMAIL)){
            return "Email pas au bon format !";
        }

        //Nettoyer les données
        $pseudo = sanitize($account->pseudo);
        $email = sanitize($account->email);
        $mdp = sanitize($account->mdp);

        //Hasher le mot de passe
        $mdp = password_hash($mdp, PASSWORD_BCRYPT);

        //Vérifier que l'utilisateur n'existe pas déjà en bdd
        if(!empty(getAccountByEmail($bdd, $email))){
            return "Cet email existe déjà !";
        }

        //J'enregistre mon utilisateur en bdd
        $account = [$pseudo, $email, $mdp];
        addAccount($bdd, $account);
    
        return "Utilisateur a été enregistré avec succès !";
    }
    return '';
//}

/* function displayAccounts(PDO $bdd){
    //Récupération de la liste des utilisateurs
    $data = getAllAccount($bdd);

    $listUsers = "";
    foreach($data as $account){
        $listUsers = $listUsers."<li><h2>".$account['firstname'] ." ". $account['lastname']."</h2>      <p>".$account['email']."</p></li>";
    }
    return $listUsers;
}

function renderAccounts(PDO $bdd){
    $message = signUp($bdd);
    $listUsers = displayAccounts($bdd);
    include "./vue/account.php";
} */