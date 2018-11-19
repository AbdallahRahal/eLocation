<?php



foreach($_POST as $key => $value){
    if(empty($value)){  

        echo" <br> la ligne ".$key." est vide";
        $test=false;

    }
}

if($test==false){

    exit;
}

inscription($_POST['mail'],$_POST['pseudo'],$_POST['mdp'],$_POST['prenom'],$_POST['nom'],$_POST['adresse'],$_POST['sexe'],$_POST['cp'],$_POST['ville']);


?>