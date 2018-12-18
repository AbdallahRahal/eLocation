<?php
function register () {
    include_once 'models/requete.php';
    $erreur = false;
    $liste =  utilisateur($_POST['mail'],$_POST['pseudo']);

    foreach($_POST as $key => $value) {
        if(empty($value)){  
            $erreur=true;
        }
    }
    
    if(!empty($liste)){
        $erreur=true;
    }

    if($erreur==false){
        inscription($_POST);
    }

}

?>