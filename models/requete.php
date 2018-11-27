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

function info_article($GET) {
    include('models/db_connect.php');
    $req = $bdd->prepare("SELECT  * from article WHERE article.id = :art");
    $req-> execute(array(":art" => $_GET['art']));
    $donnees = $req->fetch(PDO::FETCH_ASSOC);
    if(empty($donnees)) {
        $donnees = NULL;
    }
    return $donnees;
}

function mes_categories() {
    include('models/db_connect.php');
    $req = $bdd->query("SELECT id,nom FROM categorie");

    while($ligne = $req->fetch() ) {
    
        $donnees[$ligne['id']] = $ligne['nom'];
    }

    return $donnees;
}

function mes_articles_de_ma_cat () {
    include('models/db_connect.php');

    $req = $bdd->prepare("SELECT article.nom as nono, description, prix_journee, article.id as id  FROM article join appartenir on article.id = appartenir.article_id join categorie on categorie.id = appartenir.categorie_id WHERE categorie.id = :cat_id");
    $req-> execute(array(":cat_id"=> $_GET['cat']));

    $i =0;
    while($ligne = $req->fetch() ) {
    
        $donnees[$i][0] = $ligne['nono'];
        $donnees[$i][1] = $ligne['description'];
        $donnees[$i][2] = $ligne['prix_journee'];
        $donnees[$i][3] = $ligne['id'];
        $i++;
    }

    if(empty($donnees)) {
        $donnees = NULL;
    }
    return $donnees;
}

function afficher_art_toute_categorie() {
    include('models/db_connect.php');
    $req = $bdd->query("SELECT nom, description, prix_journee, id FROM article");
    $i =0;
    while($ligne = $req->fetch() ) {
    
        $donnees[$i][0] = $ligne['nom'];
        $donnees[$i][1] = $ligne['description'];
        $donnees[$i][2] = $ligne['prix_journee'];

        $donnees[$i][3] = $ligne['id'];
        

        $i++;
    }

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

function affichage_location() {
    include('models/db_connect.php');
    $affichage_location = $bdd->query("SELECT article.nom as Nom, article.prix_journee as Prix, article.lien_photo as Photo, article.description as Description, louer.date_location as Date FROM article JOIN action ON article.id = action.article_id JOIN louer ON action.id = louer.action_id JOIN utilisateur ON action.utilisateur_id = utilisateur.id WHERE utilisateur.id = ".$_SESSION['id'].";");
    return($affichage_location);
}

function name() {
    include('models/db_connect.php');
    $name = $bdd->query('');
    return($name);
}


function proposition($titre,$description) {
    include("models/db_connect.php");
    $query = "INSERT INTO proposition (`titre`, `description`, `stade`, `date_propo`, `utilisateur_id`) VALUES (:titre, :descri, 'proposition', :dat, :id) ";
    $req = $bdd->prepare($query);    
    try {

    $req-> execute(array(":titre" => $titre,
                         ":descri" => $description,
                         ":dat" => date("Y\/m\/d"),
                         ":id" => $_SESSION['id']
                        ));
    
    } catch (Exception $e) {
        echo 'Exception reçue : ',  $e->getMessage(), "\n";
        die("raterr");
    }
}

?>