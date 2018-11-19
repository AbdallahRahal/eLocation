<?php 
session_start();

include 'views/template/nav.php';
include 'views/template/rubrique.php';
include('models/requete.php');
if(isset($_POST['connexion'])){
	include('controllers/handling_data/login.php');
}
if(isset($_POST['inscrition'])){
	include('controllers/handling_data/register.php');
}

if(isset($_POST['compte'])) {
	include 'views/template/settings_form.php';
}else{
	include 'views/template/login_form.php';
	include 'views/template/register_form.php';
}


if(!isset($_SESSION['compte']) || $_SESSION['compte'] == 'utilisateur' ) {
	$rubrique=array("cat"=>"Catégorie","loc"=>"Mes Locations","vendre"=>"Vendre");
	rubriques($rubrique);
	if($_GET['rub'] == 'cat' ) {
		echo "Ici, on affiche les catégories";
	}elseif ($_GET['rub'] == 'loc') {
		echo "ici, seront visible nos loc";
	}elseif ($_GET['rub'] == 'vendre') { 
		include 'views/div/form_proposition_vente.php';
	}
	if(isset($_SESSION['compte'])){
		echo"vous etes connecté en tant que ".$_SESSION['compte'];
	}
} else if($_SESSION['compte'] == 'admin') {
	$rubrique=array("cat"=>"Catégorie","reprises"=>"Mes Reprises","uti"=>"Mes Utilisateurs");
	rubriques($rubrique);
	if($_GET['rub'] == 'cat' ) {
		echo "Ici, on affiche les catégories";
	}elseif ($_GET['rub'] == 'reprises') {
		echo "Ici, seront visible nos reprises";
	}elseif ($_GET['rub'] == 'uti') {
		echo "Ici, seront visible nos utilisateurs";
	}
}
?>