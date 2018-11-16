<?php 
include 'views/template/html_top.html';
include 'views/template/nav.php';
include 'views/template/rubrique.php';
$rubrique=array("cat"=>"Catégorie","loc"=>"Mes Locations","vendre"=>"Vendre");
rubriques($rubrique);
include 'views/template/login_form.php';
include 'views/template/settings_form.php';
include 'views/home_page.php';
include 'views/template/html_bottom.html';
?>