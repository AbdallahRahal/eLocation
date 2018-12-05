<?php 
if(isset($_POST['connexion'])) {

	include_once('controllers/handling_data/login.php');

}elseif(isset($_POST['inscription']) ) {
	
	include('controllers/handling_data/register.php');
	register();
} elseif(isset($_POST['modification'])) {

    include('controllers/handling_data/modification.php');
}

if(isset($_SESSION['compte'])) {
	
	include 'views/template/settings_form.php';

}else{
	
	include 'views/template/login_form.php';
	include 'views/template/register_form.php';

}

include 'views/template/nav.php';
include 'views/template/rubrique.php';

if(isset($_SESSION['compte'])) {
	if ($_SESSION['compte'] == "admin") {
	$rubrique=array("cat"=>"Catégorie","reprises"=>"Mes Reprises","uti"=>"Mes Utilisateurs","mes_cat"=>"Mes Catégories","mes_relais"=>"Mes Points Relais");
	}else{

	$rubrique=array("cat"=>"Catégorie","loc"=>"Mes Locations","vendre"=>"Vendre");
	
	}
}else{
$rubrique=array("cat"=>"Catégorie");
}

include_once 'models/requete.php';
$article = mes_categories();
rubriques($rubrique, $article);
include 'views/home_page.php';

?>