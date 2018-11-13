<?php 
session_start();
$_SESSION['compte'] = "admin";

include 'Views/template/nav.php';
include 'Views/template/rubrique.php';

//si l'user est un prof
if( !isset($_SESSION['compte']) || $_SESSION['compte'] == 'utilisateur' ) {

	//la navbar s'affiche
	
	
	$rubrique=array("cat"=>"Catégorie","loc"=>"Mes Locations","vendre"=>"Vendre");
	rubriques($rubrique);
	//la page d'accueil s'affiche
	
	if($_GET['rub'] == 'cat' ) {

		echo "Ici, on affiche les catégories";

	//affichage de la rubique creer qcm
	} elseif ($_GET['rub'] == 'loc') {

		echo "ici, seront visible nos loc";
	//affichage de la rubique profil
	}elseif ($_GET['rub'] == 'vendre') {
		
		echo "ici on peut vendre des articless";

	}

/* //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////*/



} else if($_SESSION['compte'] == 'admin') {

	$rubrique=array("cat"=>"Catégorie","reprises"=>"Mes Reprises","uti"=>"Mes Utilisateurs");
	rubriques($rubrique);
	//la page d'accueil s'affiche
	
	if($_GET['rub'] == 'cat' ) {

		echo "Ici, on affiche les catégories";

	//affichage de la rubique creer qcm
	} elseif ($_GET['rub'] == 'reprises') {

		echo "Ici, seront visible nos reprises";
	//affichage de la rubique profil
	}elseif ($_GET['rub'] == 'uti') {
		
		echo "Ici, seront visible nos utilisateurs";

	}
}
?>