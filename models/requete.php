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


function inscription ($POST) {
    include("models/db_connect.php");
    $query = "INSERT INTO utilisateur (`pseudo`, `mdp`, `nom`, `prenom`, `adresse`, `sexe`, `mail`, `cp`, `ville`, `statut`, `etat`) VALUES (:pseudo, :mdp, :nom, :prenom, :adresse, :sexe, :mail, :cp, :ville, :statut, :etat) ";
    $req = $bdd->prepare($query);    
    try {

    $req-> execute(array(":pseudo" => $_POST['pseudo'],
                         ":mdp" => $_POST['mdp'],
                         ":nom" => $_POST['nom'],
                         ":prenom" => $_POST['prenom'],
                         ":adresse" => $_POST['adresse'],
                         ":sexe" => $_POST['sexe'],                       
                         ":mail"=> $_POST['mail'],
                         ":cp" => $_POST['cp'],
                         ":ville" => $_POST['ville'],
                         ":statut" => "utilisateur",
                         ":etat" => "lambda"));
    
    } catch (Exception $e) {
        echo 'Exception reçue : ',  $e->getMessage(), "\n";
        die("raterr");
    }
    

}

function utilisateur() {
    include('models/db_connect.php');
    $req = $bdd->exec("SELECT  pseudo, mail FROM utilisateur ");
    $donnees = $req->fetchALL;
    if(empty($donnees)) {
        $donnees = NULL;
    }
    return $donnees;
}

?>