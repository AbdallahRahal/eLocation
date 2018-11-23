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

function affichage_utilisateur() {
    include('models/db_connect.php');
    $affichage_utilisateur = $bdd->query("SELECT * FROM `utilisateur` WHERE statut LIKE 'utilisateur'");
    return($affichage_utilisateur);
}

function affichage_reprise() {
    include('models/db_connect.php');
    $affichage_reprise = $bdd->query("SELECT ligne_proposition.id as ID,ligne_proposition.nom as Nom,ligne_proposition.prix as Prix,ligne_proposition.description as Description,ligne_proposition.photo as Photo,ligne_proposition.stade as Stade, num_proposition.date_propo as Date FROM `ligne_proposition` JOIN num_proposition ON ligne_proposition.num_proposition_id = num_proposition.id GROUP BY ligne_proposition.stade;");
    return($affichage_reprise);
}

function name() {
    include('models/db_connect.php');
    $name = $bdd->query('');
    return($name);
}
?>