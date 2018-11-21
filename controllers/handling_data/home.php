<?php 
if(isset($_POST['connexion'])) {

	include_once('controllers/handling_data/login.php');

}elseif(isset($_POST['inscription']) && $_POST['inscription'] == "true" ) {
	
	include('controllers/handling_data/register.php');
	register();
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
$rubrique=array("cat"=>"Catégorie","loc"=>"Mes Locations","vendre"=>"Vendre");
}else{
$rubrique=array("cat"=>"Catégorie","loc"=>"Mes Locations");
}
rubriques($rubrique);
include 'views/home_page.php';

?>