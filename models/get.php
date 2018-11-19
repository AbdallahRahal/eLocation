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