<?php

function connexion($id,$mdp) {
    include("../../models/db_connect.php");
    $req = $bdd->prepare("SELECT  mail, mdp, statut FROM utilisateur WHERE mail = :identifiant AND mdp = :mdp");
    $req-> execute(array(":identifiant"=> $id, ":mdp" =>$mdp));
    $donnees = $req->fetchALL();
    if(empty($donnees)){
        $donnees = NULL;
    }else{
        $donnees =  $donnees[0]['statut'];
    }
    return $donnees;
}


function inscription($mail,$pseudo,$mdp,$prenom,$nom,$adresse_post,$sexe,$cp,$ville) {
    include("../../models/db_connect.php");
    $req = $bdd->prepare("INSERT INTO utilisateur (mail,pseudo,mdp,prenom,nom,adresse,sexe,cp,ville) Values(:mail,:pseudo,:mdp,:prenom,:nom,:adresse_post,:sexe,:cp,:ville) ");
    $req-> execute(array(":mail"=> $mail, ":pseudo" =>$pseudo, ":mdp" =>$mdp, ":prenom" =>$prenom, ":nom" =>$nom, ":adresse_post" =>$adresse_post, ":sexe" =>$sexe, ":cp" =>$cp, ":ville" =>$ville) );
 
    return $donnees;
}

?>
