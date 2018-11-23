<?php

function connexion($id,$mdp) {
    include('models/db_connect.php');
    $req = $bdd->prepare("SELECT  id, pseudo, mail, mdp, statut FROM utilisateur WHERE mail = :identifiant AND mdp = :mdp");
    $req-> execute(array(":identifiant"=> $id, ":mdp" =>$mdp));
    $donnees = $req->fetch(PDO::FETCH_ASSOC);
    if(empty($donnees)) {
        $donnees = NULL;
    }
    return $donnees;
}

function mes_articles() {
    include('models/db_connect.php');
    $req = $bdd->query("SELECT nom FROM categorie");
    $i =0;
    while($ligne = $req->fetch() ) {
    
        $donnees[$i] = $ligne['nom'];
        $i++;
    }

    if(empty($donnees)) {
        $donnees = NULL;
    }
    return $donnees;
}

function mes_articles_de_ma_cat () {
    include('models/db_connect.php');

    $req = $bdd->prepare("SELECT article.nom as nono, description, prix_journee FROM article join appartenir on article.id = appartenir.article_id join categorie on categorie.id = appartenir.categorie_id WHERE categorie.nom = :cat");
    $req-> execute(array(":cat"=> $_GET['cat']));

    $i =0;
    while($ligne = $req->fetch() ) {
    
        $donnees[$i][0] = $ligne['nono'];
        $donnees[$i][1] = $ligne['description'];
        $donnees[$i][2] = $ligne['prix_journee'];
        $i++;
    }

    if(empty($donnees)) {
        $donnees = NULL;
    }
    return $donnees;
}

function afficher_art_toute_categorie() {
    include('models/db_connect.php');
    $req = $bdd->query("SELECT nom, description, prix_journee FROM article");
    $i =0;
    while($ligne = $req->fetch() ) {
    
        $donnees[$i][0] = $ligne['nom'];
        $donnees[$i][1] = $ligne['description'];
        $donnees[$i][2] = $ligne['prix_journee'];
        $i++;
    }

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

function utilisateur($mail,$pseudo) {
    include('models/db_connect.php');
    $req = $bdd->prepare("SELECT  pseudo, mail FROM utilisateur WHERE  mail = :mail or pseudo = :pseudo  ");
    $req-> execute(array(":mail"=> $mail, ":pseudo" =>$pseudo));
    $donnees = $req->fetch(PDO::FETCH_ASSOC);
    if(empty($donnees)) {
        $donnees = NULL;
    }
    return $donnees;
}

function modification ($POST) {
    include('models/db_connect.php');
    $query= 'UPDATE utilisateur SET mdp = :newmdp WHERE utilisateur.id = :utilisateur and utilisateur.mdp = :mdp';
    $req = $bdd->prepare($query);
    try {
     $req-> execute(array(":mdp" => $_POST['mdp'],
                          ":newmdp" => $_POST['newmdp'],
                          ":utilisateur" => $_SESSION['id']));
    } catch (Exception $e) {
        echo 'Exception reçue : ',  $e->getMessage(), "\n";
        die("raterr");
    }
    
}
?>