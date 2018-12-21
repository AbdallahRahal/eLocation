<?php
    
	include_once 'models/requete.php';
	//var_dump($_FILES);
	//var_dump($_POST);
    $new = str_replace(" ", "-", $_FILES['icone']['name']);
	$return = move_uploaded_file($_FILES['icone']['tmp_name'], "Views/img/".$new);
    proposition($_POST['titre'],$_POST['description'], $new);

?>