<?php
function register () {

foreach($_POST as $key => $value){
	$test = true;
    if(empty($value)){  

        echo" <br> la ligne ".$key." est vide";
        $test=false;

    }
}

if($test==false){

    exit;
}else{
include 'models/requete.php';
inscription($_POST['mail'],$_POST['pseudo'],$_POST['mdp'],$_POST['prenom'],$_POST['nom'],$_POST['adresse'],$_POST['sexe'],$_POST['cp'],$_POST['ville']);
}

}

?>