<?php
/**
 * @method ajouter un compte en BDD
 * @param PDO $bdd
 * @param array $account [pseudo, email, password]
 * @return void
 */
function addAccount(PDO $bdd, array $account): void {
    try{
        $requete = "INSERT INTO utilisateur(pseudo, email, mdp)
        VALUE(?,?,?)";
        $req = $bdd->prepare($requete);
        $req->bindParam(1,$account[0], PDO::PARAM_STR);
        $req->bindParam(2,$account[1], PDO::PARAM_STR);
        $req->bindParam(3,$account[2], PDO::PARAM_STR);
        $req->execute();
    }
    catch(Exception $e) {
        echo "Erreur : " . $e->getMessage();
    }
}

/**
 * @method modifier un compte en BDD
 * @param PDO $bdd
 * @param array $account [firstname, lastname, ancien-email, nouvel-mail]
 * @return void
 */
function updateAccount(PDO $bdd, array $account): void {
    try {
        $requete = "UPDATE utilisateur SET pseudo=?, email=?, mdp=? 
        WHERE email=?";
        $req = $bdd->prepare($requete);
        $req->bindParam(1,$account[0], PDO::PARAM_STR);
        $req->bindParam(2,$account[1], PDO::PARAM_STR);
        $req->bindParam(3,$account[3], PDO::PARAM_STR);
        $req->bindParam(4,$account[1], PDO::PARAM_STR);
        $req->execute();
    } catch (Exception $e) {
        echo "Erreur : " . $e->getMessage();
    }
}

/**
 * @method Supprimer un compte en BDD
 * @param PDO $bdd
 * @param string $email
 * @return void
 */
function deleteAccount(PDO $bdd, string $email): void {
    try{
        $requete = "DELETE FROM utilisateur WHERE email=?";
        $req = $bdd->prepare($requete);
        $req->bindParam(1,$email, PDO::PARAM_STR);
        $req->execute();
    } catch(Exception $e) {
        echo "Erreur : " . $e->getMessage();
    }
}
/**
 * @method afficher un compte depuis son email
 * @param PDO $bdd
 * @param string $email
 * @return ?array acount [id, firstname, lastname, email]
 */
function getAccountByEmail(PDO $bdd, string $email): array|null|string {
    try {
        $requete = "SELECT id_util, pseudo, email FROM utilisateur
        WHERE email = ?";
        $req = $bdd->prepare($requete);
        $req->bindParam(1,$email, PDO::PARAM_STR);
        $req->execute();
        $data = $req->fetch(PDO::FETCH_ASSOC);
        return $data;
    } catch (Exception $e) {
        echo "Erreur : " . $e->getMessage();
    }
}

/**
 * @method afficher tous les comptes
 * @param PDO $bdd
 * @return ?array acount [id, firstname, lastname, email]
 */
function getAllAccount(PDO $bdd): array|null|string{
    try {
        $requete = "SELECT id_util, pseudo, email FROM utilisateur";
        $req = $bdd->prepare($requete);
        $req->execute();
        $data = $req->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    } catch (Exception $e) {
        echo "Erreur : " . $e->getMessage();
    }
}
