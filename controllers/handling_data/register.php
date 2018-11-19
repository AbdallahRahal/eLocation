<?php

//include("models/get.php");

foreach($_POST as $key => $value){
    if(empty($value)){  

        echo" <br> la ligne ".$key." est vide";

    }
}


    //$result =  connexion($_POST['identifiant'],$_POST['mdp']);


?>