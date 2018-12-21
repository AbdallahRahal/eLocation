<?php
    
	include_once 'models/requete.php';
	var_dump($_FILES);
	var_dump($_GET);
	//die('isma');   
	move_uploaded_file($_GET['icone'], "Views/img/");
    proposition($_GET['titre'],$_GET['description'], $_GET['icone']);

?>