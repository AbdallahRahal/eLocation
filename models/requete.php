<?php

/*
function connexion($id,$mdp) {
    include('models/db_connect.php');
    $hashreq = $bdd->query("SELECT id, mdp, mail FROM utilisateur WHERE id = 26");
    $hash = $hashreq->fetch();
    $req = $bdd->prepare("SELECT id, pseudo, mail, mdp, statut FROM utilisateur WHERE mail = :identifiant AND mdp = :mdp");
    echo var_dump(password_verify($mdp, $hash['mdp']));
    $req->execute(array(":identifiant"=> $id, ":mdp" => password_verify($mdp, $hash['mdp'])));
    $donnees = $req->fetch(PDO::FETCH_ASSOC);
    if(empty($donnees)) {
        $donnees = NULL;
    }
    return $donnees;
}
*/

function connexion($id, $mdp) {
    include('models/db_connect.php');

    $user = $bdd->prepare('select id, pseudo, mail, mdp, statut from utilisateur where mail = :mail or pseudo = :pseudo');
    $user->execute([':mail' => $id, ':pseudo' => $id]);

    $result = $user->fetch(PDO::FETCH_ASSOC);

    if($result === null) {
        return null;
    } else {
        
        $validPassword = password_verify($mdp, $result['mdp']);
        if($validPassword) {
            return $result;
        } else {
            return null;
        }
    }
}

function modification ($POST) {
    include('models/db_connect.php');

   $user = $bdd->prepare('select id, mdp from utilisateur where id = :id');
    $user->execute([':id' => $_SESSION['id']]);

    $result = $user->fetch(PDO::FETCH_ASSOC);

    $validPassword = password_verify($_POST['mdp'], $result['mdp']);
    
    if($validPassword) {
    
        $query= 'UPDATE utilisateur SET mdp = :newmdp WHERE utilisateur.id = :utilisateur';
        $req = $bdd->prepare($query);
        try {
         $req-> execute(array(":newmdp" => password_hash($_POST['newmdp'], PASSWORD_BCRYPT),
                              ":utilisateur" => $_SESSION['id']));
        } catch (Exception $e) {
            echo 'Exception reçue : ',  $e->getMessage(), "\n";
            die("raterr");
        }

    } else { 
        
        require_once 'views/template/settings_form.php'; ?>
        ?>
    
        <script> 
            $('#SettingsModal').modal('show');
            $('#alerterror').show();
        </script>    <?php
    }


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
    $mes_categories = $bdd->query('SELECT `id` as ID, `nom` as Nom FROM `categorie`');
    return($mes_categories);
}

function mes_articles_de_ma_cat () {
    include('models/db_connect.php');

    $req = $bdd->prepare("SELECT article.nom as nono, description, prix_journee, article.id as id, lien_photo  FROM article join appartenir on article.id = appartenir.article_id join categorie on categorie.id = appartenir.categorie_id WHERE categorie.id = :cat_id");
    $req-> execute(array(":cat_id"=> $_GET['cat']));

    $i =0;
    while($ligne = $req->fetch() ) {
    
        $donnees[$i][0] = $ligne['nono'];
        $donnees[$i][1] = $ligne['description'];
        $donnees[$i][2] = $ligne['prix_journee'];
        $donnees[$i][3] = $ligne['id'];
        $donnees[$i][4] = $ligne['lien_photo'];

        $i++;
    }

    if(empty($donnees)) {
        $donnees = NULL;
    }
    return $donnees;
}

function afficher_art_toute_categorie() {
    include('models/db_connect.php');
    $req = $bdd->query("SELECT nom, description, prix_journee, id, lien_photo FROM article");
    $i =0;
    while($ligne = $req->fetch() ) {
    
        $donnees[$i][0] = $ligne['nom'];
        $donnees[$i][1] = $ligne['description'];
        $donnees[$i][2] = $ligne['prix_journee'];
        $donnees[$i][3] = $ligne['id'];
        $donnees[$i][4] = $ligne['lien_photo'];
        

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
                         ":mdp" => password_hash($_POST['mdp'], PASSWORD_BCRYPT),
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


   
function affichage_utilisateur() {
    include('models/db_connect.php');
    $affichage_utilisateur = $bdd->query("SELECT * FROM `utilisateur` WHERE statut LIKE 'utilisateur'");
    return($affichage_utilisateur);
}

function affichage_reprise() {
    include('models/db_connect.php');
    $affichage_reprise = $bdd->query("SELECT proposition.id as ID,proposition.titre as Nom,proposition.prix as Prix,proposition.description as Description,proposition.photo1 as Photo,proposition.stade as Stade, proposition.date_propo as Date FROM `proposition` ");
    return($affichage_reprise);
}

function affichage_location() {
    include('models/db_connect.php');
    $affichage_location = $bdd->query("SELECT article.nom as Nom, article.prix_journee as Prix, article.lien_photo as Photo, article.description as Description, louer.date_location as Date FROM article JOIN action ON article.id = action.article_id JOIN louer ON action.id = louer.action_id JOIN utilisateur ON action.utilisateur_id = utilisateur.id WHERE utilisateur.id = ".$_SESSION['id'].";");
    return($affichage_location);
}

function proposition($titre,$description) {
    include("models/db_connect.php");
    $query = "INSERT INTO proposition (`titre`, `description`, `stade`, `date_propo`, `utilisateur_id`) VALUES (:titre, :descri, 'proposition', :dat, :id) ";
    $req = $bdd->prepare($query);    
    try {

    $req-> execute(array(":titre" => $titre,
                         ":descri" => $description,
                         ":dat" => date("d\/m\/Y"),
                         ":id" => $_SESSION['id']
                        ));
    
    } catch (Exception $e) {
        echo 'Exception reçue : ',  $e->getMessage(), "\n";
        die("raterr");
    }
}

function info_user() {
    include('models/db_connect.php');
    $info_user = $bdd->query("SELECT * FROM `utilisateur` WHERE utilisateur.id = ".$_GET['modif']." ");
    return($info_user);
}

function update_user_mdp() {
    include('models/db_connect.php');
    $update_user_mdp = $bdd->query("UPDATE `utilisateur` SET `pseudo`='".$_GET['pseudo']."',`mdp`='".password_hash($_GET['mdp'], PASSWORD_BCRYPT)."',`nom`='".$_GET['nom']."',`prenom`='".$_GET['prenom']."',`adresse`='".$_GET['adresse']."',`mail`='".$_GET['mail']."',`cp`='".$_GET['cp']."',`ville`='".$_GET['ville']."' WHERE utilisateur.id = ".$_GET['id'].";");

    include('controllers/handling_data/mailer.php');
    return($update_user_mdp);
}

function update_user() {
    include('models/db_connect.php');
    $update_user = $bdd->query("UPDATE `utilisateur` SET `pseudo`='".$_GET['pseudo']."',`nom`='".$_GET['nom']."',`prenom`='".$_GET['prenom']."',`adresse`='".$_GET['adresse']."',`mail`='".$_GET['mail']."',`cp`='".$_GET['cp']."',`ville`='".$_GET['ville']."' WHERE utilisateur.id = ".$_GET['id'].";");
    return($update_user);
}

function delete_user() {
    include('models/db_connect.php');
    $delete_user = $bdd->query("DELETE FROM `utilisateur` WHERE utilisateur.id = ".$_GET['supp']." ");
    return($delete_user);
}

//------------------Template Fonction------------------//
function name() {
    include('models/db_connect.php');
    $name = $bdd->query('');
    return($name);
}
//-----------------------------------------------------//

?>