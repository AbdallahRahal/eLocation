<?php

include('../../models/get.php');

if(empty($_POST['identifiant'])){ 

}elseif(empty($_POST['mdp'])){ 

}else{
    $result =  connexion($_POST['identifiant'],$_POST['mdp']);
    if($result != NULL){
        session_start();
        $_SESSION['compte']= $result;
        header("Location: ../../index.php?page=".$_POST['page']."&rub=".$_POST['page']." ");
        exit(); 
    }else{
        echo"erreur le compte n'existe pas";
    }
}

?>