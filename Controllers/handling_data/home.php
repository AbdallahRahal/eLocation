<?php 
include 'Views/template/html_top.html';
include 'Views/template/nav.php';
include 'Views/template/rubrique.php';
$rubrique=array("cat"=>"Catégorie","loc"=>"Mes Locations","vendre"=>"Vendre");
rubriques($rubrique);
include 'Views/template/login_form.php';
include 'Views/home_page.php';
include 'Views/template/html_bottom.html';
?>