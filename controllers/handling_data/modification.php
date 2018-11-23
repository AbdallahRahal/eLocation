<?php

if(empty($_POST['mdp'])){ 

}elseif(empty($_POST['newmdp'])){ 

}else{

    include_once 'models/requete.php';
    modification($_POST['newmdp'], $_POST['mdp']);
	
}

?>