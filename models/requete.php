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


function inscription($mail,$pseudo,$mdp,$prenom,$nom,$adresse_post,$sexe,$cp,$ville) {
    include("../../models/db_connect.php");
    $req = $bdd->prepare("INSERT INTO utilisateur (mail,pseudo,mdp,prenom,nom,adresse,sexe,cp,ville,statut,etat) Values(:mail,:pseudo,:mdp,:prenom,:nom,:adresse_post,:sexe,:cp,:ville,utilisateur,lambda) ");
    $req-> execute(array(":mail"=> $mail, ":pseudo" =>$pseudo, ":mdp" =>$mdp, ":prenom" =>$prenom, ":nom" =>$nom, ":adresse_post" =>$adresse_post, ":sexe" =>$sexe, ":cp" =>$cp, ":ville" =>$ville) );

}

?>