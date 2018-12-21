<?php
    
	include_once 'models/requete.php';
	var_dump($_FILES);
	die('isma');
    proposition($_GET['titre'],$_GET['description'], $_FILES['icone']['name']);
    move_uploaded_file($_FILES['icone']['name'], "Views/img/");

?>