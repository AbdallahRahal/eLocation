<?php

function connexion($id,$mdp) {
    include('models/db_connect.php');
    $req = $bdd->prepare("SELECT  pseudo, mail, mdp, statut FROM utilisateur WHERE mail = :identifiant AND mdp = :mdp");
    $req-> execute(array(":identifiant"=> $id, ":mdp" =>$mdp));
    $donnees = $req->fetch(PDO::FETCH_ASSOC);
    if(empty($donnees)) {
        $donnees = NULL;
    }
    return $donnees;
}
    
function name() {
    include('models/db_connect.php');
    $name = $bdd->query('');
    return($name);
}

?>