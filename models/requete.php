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

function locations() {
    include('models/db_connect.php');

    $loc = $bdd->query('SELECT utilisateur.nom as utilisateur, utilisateur.mail as mail, utilisateur.id as uti_id, article.nom as article, louer.action_id as action, article.id as idd FROM utilisateur JOIN action on utilisateur.id = action.utilisateur_id JOIN article ON action.article_id = article.id JOIN louer on action.id = louer.action_id WHERE louer.date_reelle IS NULL');
   $i =1;
    while($ligne = $loc->fetch() ) {

        $result[$i][0] = $ligne['utilisateur'];
        $result[$i][1] = $ligne['article'];
        $result[$i][2] = $ligne['action'];
        $result[$i][3] = $ligne['idd'];
        $result[$i][4] = $ligne['uti_id'];
        $result[$i][5] = $ligne['mail'];

        $i++;
    }

    return $result;
}

function connexion($id, $mdp) {
    include('models/db_connect.php');

    $user = $bdd->prepare('select id, pseudo, mail, mdp, statut from utilisateur where mail = :mail or pseudo = :pseudo');
    $user->execute([':mail' => htmlspecialchars($id), ':pseudo' => htmlspecialchars($id)]);

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

    $validPassword = password_verify(htmlspecialchars($_POST['mdp']), $result['mdp']);
    
    if($validPassword) {
    
        $query= 'UPDATE utilisateur SET mdp = :newmdp WHERE utilisateur.id = :utilisateur';
        $req = $bdd->prepare($query);
        try {
         $req-> execute(array(":newmdp" => htmlspecialchars(password_hash($_POST['newmdp'], PASSWORD_BCRYPT)),
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
    $req-> execute(array(":art" => htmlspecialchars($_GET['art'])));
    $donnees = $req->fetch(PDO::FETCH_ASSOC);
    if(empty($donnees)) {
        $donnees = NULL;
    }
    return $donnees;

}

function commentaire_article($x) {

    include('models/db_connect.php');
    $req = $bdd->prepare("SELECT louer.commentaire as commentaire from article JOIN action on article_id = article.id  JOIN louer on action.id = louer.action_id WHERE article.id = :art AND louer.commentaire IS NOT NULL");
    $req-> execute(array(":art" => htmlspecialchars($x)));
    $donnees = $req->fetchAll(PDO::FETCH_ASSOC);
    if(empty($donnees)) {
        $donnees = NULL;
    }
    return $donnees;

}

function rendre_article($POST) {

    include('models/db_connect.php');

    $req = $bdd->query("SELECT louer.id as id FROM louer WHERE action_id = ".$_POST['action']."  AND date_reelle is NULL");
   // $req-> execute(array(":id" => $_POST['action']));
    $donnees=$req-> fetch();
    $loc_id = $donnees['id'];
    $req = $bdd->prepare("UPDATE louer SET date_reelle = :daten WHERE action_id = :id");
    $req-> execute(array(":daten" => date("Y-m-d"), ":id" => $_POST['action']));
    $request = $bdd->prepare("UPDATE article SET statut = :dispo WHERE id = :id");
    $request-> execute(array(":dispo" => "dispo", ":id" => $_POST['art_id']));
    $requete = $bdd->prepare("SELECT FROM utilisateur where id =");

    include('controllers/handling_data/mailer.php');
    confirmation_rendu($loc_id);

    unset($_SESSION['nom_uti']);
    unset($_SESSION['mail_uti']);
    unset($_SESSION['uti_mail']);
    unset($_SESSION['mail']);
    
}

function mes_categories() {
    include('models/db_connect.php');
    $req = $bdd->query("SELECT id,nom FROM categorie");

    while($ligne = $req->fetch() ) {
    
        $donnees[$ligne['id']] = $ligne['nom'];
    }

    return $donnees;
}

function ajout_cat($x) {
    include('models/db_connect.php');
    $query= "INSERT INTO categorie (`nom`) VALUES (:nom) ";
    $req = $bdd->prepare($query);
    $req-> execute(array(":nom" => htmlspecialchars($x)));
}

function suppr_cat($x) {
    include('models/db_connect.php');
    
    $query= "DELETE FROM appartenir WHERE categorie_id = :id";
    $req = $bdd->prepare($query);
    $req-> execute(array(":id" => htmlspecialchars($x)));
    
    $query= "DELETE FROM categorie WHERE categorie.id = :id";
    $req = $bdd->prepare($query);
    $req-> execute(array(":id" => htmlspecialchars($x)));
}

function valid_modif_cat($POST) {
    include('models/db_connect.php');
    $query= 'UPDATE categorie SET nom = :nom WHERE categorie.id = :id';
    $req = $bdd->prepare($query);
    $req-> execute(array(":id" => $_POST['valid_modif_cat'],
                         ":nom" => $_POST['nom']));

}



function point_relais() {
    include('models/db_connect.php');
    $req = $bdd->query("SELECT * FROM point_relais");

    $donnees = $req -> fetchAll();

    return $donnees;}
function donnees_relais() {
    include('models/db_connect.php');
    $donnees_relais = $bdd->query("SELECT * FROM point_relais");
    return($donnees_relais);
}

function ajout_relais ($POST) {
    include("models/db_connect.php");
    $query = "INSERT INTO point_relais (`nom`, `adresse`, `ouverture`, `fermeture`, `cp`, `ville`) VALUES (:nom, :adresse, :ouverture, :fermeture, :cp, :ville) ";
    $req = $bdd->prepare($query);
    try {

    $req-> execute(array(":nom" => htmlspecialchars($_POST['nom']),
                         ":adresse" => htmlspecialchars($_POST['adresse']),
                         ":ouverture" => htmlspecialchars($_POST['ouverture']),
                         ":fermeture" => htmlspecialchars($_POST['fermeture']),
                         ":cp" => htmlspecialchars($_POST['cp']),
                         ":ville" => htmlspecialchars($_POST['ville'])));
    
    } catch (Exception $e) {
        echo 'Exception reçue : ',  $e->getMessage(), "\n";
        die("erreur");
    }
}

function suppr_relais($x) {
    include('models/db_connect.php');
    
    $query= "DELETE FROM louer WHERE point_relais_id = :id";
    $req = $bdd->prepare($query);
    $req-> execute(array(":id" => htmlspecialchars($x)));
    
    $query= "DELETE FROM point_relais WHERE point_relais.id = :id";
    $req = $bdd->prepare($query);
    $req-> execute(array(":id" => htmlspecialchars($x)));
    
}

function valid_modif_relais($POST) {
    
    include('models/db_connect.php');
    
    $query= 'UPDATE point_relais SET nom = :nom, adresse = :adresse, ouverture = :ouverture, fermeture = :fermeture, cp = :cp, ville = :ville WHERE point_relais.id = :id';
    $req = $bdd->prepare($query);
    $req-> execute(array(":id" => $_POST['valid_modif_relais'],
                         ":nom" => $_POST['nom'],
                         ":adresse" => $_POST['adresse'],
                         ":ouverture" => $_POST['ouverture'].":00",
                         ":fermeture" => $_POST['fermeture'].":00",
                         ":cp" => $_POST['cp'],
                         ":ville" => $_POST['ville']));

}

function mes_articles_de_ma_cat () {
    include('models/db_connect.php');

    $req = $bdd->prepare("SELECT article.nom as nono, description, prix_journee, article.statut, article.id as id, lien_photo, categorie.id AS categorie  FROM article join appartenir on article.id = appartenir.article_id join categorie on categorie.id = appartenir.categorie_id WHERE categorie.id = :cat_id");
    $req-> execute(array(":cat_id"=> htmlspecialchars($_GET['cat'])));

    $i =0;
    while($ligne = $req->fetch() ) {
    
        $donnees[$i][0] = $ligne['nono'];
        $donnees[$i][1] = $ligne['description'];
        $donnees[$i][2] = $ligne['prix_journee'];
        $donnees[$i][3] = $ligne['id'];
        $donnees[$i][4] = $ligne['lien_photo'];
        $donnees[$i][5] = $ligne['statut'];
        $donnees[$i][6] = $ligne['categorie'];

        $i++;
    }

    if(empty($donnees)) {
        $donnees = NULL;
    }
    return $donnees;
}

function afficher_art_toute_categorie() {
    include('models/db_connect.php');
    $req = $bdd->query("SELECT article.nom AS nom, description, prix_journee, article.id as id, lien_photo, statut, categorie.id AS categorie FROM article  join appartenir on article.id = appartenir.article_id join categorie on categorie.id = appartenir.categorie_id GROUP BY article.id");
    $i =0;
    while($ligne = $req->fetch() ) {
    
        $donnees[$i][0] = $ligne['nom'];
        $donnees[$i][1] = $ligne['description'];
        $donnees[$i][2] = $ligne['prix_journee'];
        $donnees[$i][3] = $ligne['id'];
        $donnees[$i][4] = $ligne['lien_photo'];
        $donnees[$i][5] = $ligne['statut'];
        $donnees[$i][6] = $ligne['categorie'];
        

        $i++;
    }

    if(empty($donnees)) {
        $donnees = NULL;
    }
    return $donnees;
}


function louer ($GET) {
    include("models/db_connect.php");

    $query = "INSERT INTO action (`article_id`, `utilisateur_id`) VALUES (:article, :utilisateur) ";
    $req = $bdd->prepare($query);
    $req-> execute(array(":article" => $_GET['louer_article'],
                         ":utilisateur" => $_SESSION['id'] ));
    
    $last_id = $bdd->lastInsertId();
    
        $query = "INSERT INTO louer (`date_location`,`date_butoire`,`action_id`, `point_relais_id`) VALUES (:date_actu, :date_butoire , :action , :point_relais_id) ";
    $req = $bdd->prepare($query);
    $req-> execute(array(":date_actu" => date("Y\/m\/d"),
                            ":date_butoire" => $_GET['date_butoire'],
                            ":action" => $last_id,
                            ":point_relais_id" => $_GET['point_relais'] ));

    
        $query = "UPDATE article SET statut = 'reserve' WHERE id = :id  "  ;        
        $req = $bdd->prepare($query);
        $req-> execute(array(":id" => $_GET['louer_article']));
       
}


function inscription ($POST) {
    include("models/db_connect.php");
    $query = "INSERT INTO utilisateur (`pseudo`, `mdp`, `nom`, `prenom`, `adresse`, `sexe`, `mail`, `cp`, `ville`, `statut`, `etat`) VALUES (:pseudo, :mdp, :nom, :prenom, :adresse, :sexe, :mail, :cp, :ville, :statut, :etat) ";
    $req = $bdd->prepare($query);
    try {

    $req-> execute(array(":pseudo" => htmlspecialchars($_POST['pseudo']),
                         ":mdp" => htmlspecialchars(password_hash($_POST['mdp'], PASSWORD_BCRYPT)),
                         ":nom" => htmlspecialchars( $_POST['nom']),
                         ":prenom" => htmlspecialchars( $_POST['prenom']),
                         ":adresse" => htmlspecialchars($_POST['adresse']),
                         ":sexe" => htmlspecialchars($_POST['sexe']),                       
                         ":mail"=> htmlspecialchars( $_POST['mail']),
                         ":cp" => htmlspecialchars( $_POST['cp']),
                         ":ville" => htmlspecialchars( $_POST['ville']),
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
    $req-> execute(array(":mail"=> htmlspecialchars($mail), ":pseudo" => htmlspecialchars($pseudo)));
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
    $affichage_reprise = $bdd->query("SELECT proposition.id as ID,proposition.titre as Nom,proposition.prix as Prix,proposition.description as Description,proposition.photo1 as Photo,proposition.stade as Stade, proposition.date_propo as Date FROM `proposition` ORDER BY Stade");
    return($affichage_reprise);
}

function affichage_ajout() {
    include('models/db_connect.php');
    $affichage_ajout = $bdd->query("SELECT utilisateur_id as Utilisateur , proposition.id as ID,proposition.titre as Nom,proposition.prix as Prix,proposition.description as Description,proposition.photo1 as Photo,proposition.stade as Stade, proposition.date_propo as Date FROM `proposition` WHERE proposition.id = ".$_GET['ajout_rep']."");
    return($affichage_ajout);
}

function affichage_location() {
    include('models/db_connect.php');
    $affichage_location = $bdd->query("SELECT article.nom as Nom, article.prix_journee as Prix, article.lien_photo as Photo, article.description as Description, louer.date_location as Date_de_location, louer.date_butoire as Date_butoire FROM article JOIN action ON article.id = action.article_id JOIN louer ON action.id = louer.action_id JOIN utilisateur ON action.utilisateur_id = utilisateur.id WHERE utilisateur.id = ".$_SESSION['id']." AND louer.date_reelle IS NULL ");
    return($affichage_location);
}

function proposition($titre,$description, $nom_photo) {
    include("models/db_connect.php");
    $query = "INSERT INTO proposition (`titre`, `description`, `photo1`, `stade`, `date_propo`, `utilisateur_id`) VALUES (:titre, :descri, :photo1, 'proposition', CURRENT_TIMESTAMP(), :id) ";
    $req = $bdd->prepare($query);    
    try {

    $req-> execute(array(":titre" => htmlspecialchars($titre),
                         ":descri" => htmlspecialchars($description),
                         ":photo1" => $nom_photo ,
                         ":id" => $_SESSION['id']
                        ));
    
    } catch (Exception $e) {
        echo 'Exception reçue : ',  $e->getMessage(), "\n";
        die("raterr");
    }
}

function info_user() {
    include('models/db_connect.php');
    $info_user = $bdd->query("SELECT * FROM `utilisateur` WHERE utilisateur.id = ".htmlspecialchars($_GET['modif'])." ");
    return($info_user);
}

function update_user_mdp() {
    include('models/db_connect.php');
    $update_user_mdp = $bdd->query("UPDATE `utilisateur` SET `pseudo`=".htmlspecialchars($_GET['pseudo']).",`mdp`=".htmlspecialchars(password_hash($_GET['mdp'], PASSWORD_BCRYPT)).",`nom`=".htmlspecialchars($_GET['nom']).",`prenom`=".htmlspecialchars($_GET['prenom']).",`adresse`=".htmlspecialchars($_GET['adresse']).",`mail`=".htmlspecialchars($_GET['mail']).",`cp`=".htmlspecialchars($_GET['cp']).",`ville`=".htmlspecialchars($_GET['ville'])." WHERE utilisateur.id = ".htmlspecialchars($_GET['id']).";");
        include('controllers/handling_data/mailer.php');
        mail_user_mdp();
        return($update_user_mdp);
}

function update_user() {
    include('models/db_connect.php');
    $update_user = $bdd->query("UPDATE `utilisateur` SET `pseudo`=".htmlspecialchars($_GET['pseudo']).",`nom`=".htmlspecialchars($_GET['nom']).",`prenom`=".htmlspecialchars($_GET['prenom']).",`adresse`=".htmlspecialchars($_GET['adresse']).",`mail`=".htmlspecialchars($_GET['mail']).",`cp`=".htmlspecialchars($_GET['cp']).",`ville`=".htmlspecialchars($_GET['ville'])." WHERE utilisateur.id = ".htmlspecialchars($_GET['id']).";");
}

function update_prix() {
    include('models/db_connect.php');
    $update_prix = $bdd->query("UPDATE `proposition` SET `prix`=".htmlspecialchars($_GET['prix_proposer']).",`stade`='offre' WHERE id=".htmlspecialchars($_GET['produit']).";");
    unset($_SESSION["id_reprise"]);
}

function delete_user() {
    include('models/db_connect.php');
    $delete_user = $bdd->query("DELETE FROM `utilisateur` WHERE utilisateur.id = ".htmlspecialchars($_GET['supp'])." ");
}

function delete_rep() {
    include('models/db_connect.php');
    $delete_rep = $bdd->query("DELETE FROM `proposition` WHERE id= ".htmlspecialchars($_GET['supp_rep'])."");
}

function update_rep_valide() {
    include('models/db_connect.php');
    $update_rep_valide = $bdd->query("UPDATE `proposition` SET `stade`='valide' WHERE id= ".htmlspecialchars($_GET['accepter']).";");
}

function update_rep() {
    include('models/db_connect.php');
    $update_rep = $bdd->query("UPDATE `proposition` SET `stade`='proposition' WHERE id= ".htmlspecialchars($_GET['reprop']).";");
}
function ajout_article($GET) {
    $cat = $_GET['cat'];
    include('models/db_connect.php');
    $query = "INSERT INTO article (`nom`, `description`, `prix_journee`, `lien_photo`, `statut`, `etat`) VALUES (:nom, :description, :prix_journee,:photo, 'dispo', 'neuf') ";
    $req = $bdd->prepare($query);    
    try {

    $req-> execute(array(":nom" => htmlspecialchars($_GET['titre']),
                         ":description" => htmlspecialchars($_GET['description']),
                         ":prix_journee" => htmlspecialchars($_GET['prix']),
                         ":photo" => htmlspecialchars($_GET['photo']),
                        ));
    
    } catch (Exception $e) {
        echo 'Exception reçue : ',  $e->getMessage(), "\n";
        die("raterr");
    }

    $last_id = $bdd->lastInsertId();
///////////////////////////
    foreach($cat as $key => $value){
        
        $query = "INSERT INTO appartenir (`categorie_id`,`article_id`) VALUES (:cat, :art) ";
        $req = $bdd->prepare($query);    
        try {

        $req-> execute(array(":cat" => $value,
                            ":art" => $last_id
                            ));
        
        } catch (Exception $e) {
            echo 'Exception reçue : ',  $e->getMessage(), "\n";
            die("raterr");
        }
    }

//////////////////////////////////////
    $query = "DELETE FROM proposition WHERE `proposition`.`id` = :id";
    $req = $bdd->prepare($query);    
    try {

    $req-> execute(array(":id" => htmlspecialchars($_GET['ajout_article'])));
    
    } catch (Exception $e) {
        echo 'Exception reçue : ',  $e->getMessage(), "\n";
        die("raterr");
    }
//////////////////////////////////
    $query = "INSERT INTO action (`utilisateur_id`,`article_id`) VALUES (:uti, :art) ";
    $req = $bdd->prepare($query);    
    try {

    $req-> execute(array(":uti" =>htmlspecialchars($_GET['uti']),
                        ":art" => $last_id
                        ));
    
    } catch (Exception $e) {
        echo 'Exception reçue : ',  $e->getMessage(), "\n";
        die("raterr");
    }

    $action_id = $bdd->lastInsertId();
/////////////////////////////////////
    $query = "INSERT INTO vendre (`date_vente`,`action_id`) VALUES (:dat, :art) ";
        $req = $bdd->prepare($query);    
        try {

        $req-> execute(array(":dat" => date("Y-m-d"),
                            ":art" => $action_id
                            ));
        
        } catch (Exception $e) {
            echo 'Exception reçue : ',  $e->getMessage(), "\n";
            die("raterr");
        }

}
function avis($GET){
    include('models/db_connect.php');
    $req = $bdd->prepare("UPDATE louer SET note = :note, commentaire = :com WHERE id  = :id");
    $req-> execute(array(":note" => $_GET['note'],
                         ":com" => $_GET['commentaire'],
                         ":id" => $_GET['idloue'],
                        ));

}
//------------------Template Fonction------------------//
function name() {
    include('models/db_connect.php');
    $name = $bdd->query('');
    return($name);
}
//-----------------------------------------------------//
function verif_article_dispo($id) {
    include('models/db_connect.php');
    $statut = $bdd->prepare('Select statut from article where id=:id');
    $statut-> execute(array(":id" => htmlspecialchars($id)));
    $donnees = $statut->fetch(PDO::FETCH_ASSOC);
    if($donnees["statut"] == "dispo"){
        return true;
    }else{
        return false;
    }
}

?>