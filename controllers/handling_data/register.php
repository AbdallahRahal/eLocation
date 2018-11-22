<?php
function register () {
    include 'models/requete.php';
    $erreur = true;
    $liste =  utilisateur();
    var_dump($liste);

    foreach($_POST as $key => $value){
        if(empty($value)){  
            $erreur=false;
        }
    }
    
    for($x=0;$x<count($liste);$x++){
        if($_POST['mail'] == $liste[$x]['mail']){
            $erreur= false;
        }elseif($_POST['pseudo'] == $liste[$x]['pseudo']){
            $erreur= false;
        }
    }

    if($erreur==true){
        inscription($_POST);
    }

}

?>