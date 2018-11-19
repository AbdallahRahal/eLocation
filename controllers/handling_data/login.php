<?php

if(empty($_POST['identifiant'])){ 

}elseif(empty($_POST['mdp'])){ 

}else{
    $result =  connexion($_POST['identifiant'],$_POST['mdp']);
    if($result != NULL){
        $_SESSION['compte']= $result['statut'];
        $_SESSION['pseudo'] = $_SESSION['pseudo'];
        exit(); 
    }else{
        echo"erreur le compte n'existe pas";
    }
}

?>