<?php 

include('models/requete.php');

if(isset($_POST['connexion'])) {

	include_once('controllers/handling_data/login.php');

} elseif(isset($_POST['inscription']) && $_POST['inscription'] == "true" ) {
	
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
include 'views/template/sidebar.php';
include_once 'models/requete.php';

if(!isset($_SESSION['compte']) || $_SESSION['compte'] == 'utilisateur' ) {

	if(isset($_SESSION['compte'])) {
	$rubrique=array("cat"=>"Catégorie","loc"=>"Mes Locations","vendre"=>"Vendre");
	}else{
	$rubrique=array("cat"=>"Catégorie");
	}
	$article = mes_articles();
	rubriques($rubrique, $article);

	if($_GET['rub'] == 'cat' ) {
		
		include 'views/div/affichage_article.php';
		sidebar($article);
		if (!isset($_GET['cat'])) {
		
		$affiche = afficher_art_toute_categorie();
		affichage_article($affiche);
		

		}elseif($_GET['cat'] == 'foot') {
		$affiche = mes_articles_de_ma_cat();
		affichage_article($affiche);

		}elseif($_GET['cat'] == 'hiver') {
		$affiche = mes_articles_de_ma_cat();
		affichage_article($affiche);

		}elseif($_GET['cat'] == 'tennis') {
		$affiche = mes_articles_de_ma_cat();
		affichage_article($affiche);

		}elseif($_GET['cat'] == 'ete') {
		$affiche = mes_articles_de_ma_cat();
		affichage_article($affiche);

		}
	} elseif ($_GET['rub'] == 'loc') {
		$affichage_location = affichage_location();
		include 'views/template/mes_locations.php';
	} elseif ($_GET['rub'] == 'vendre') { 
		include 'views/div/form_proposition_vente.php';
	}

} else if($_SESSION['compte'] == 'admin') {
	$rubrique=array("cat"=>"Catégorie","reprises"=>"Mes Reprises","uti"=>"Mes Utilisateurs");
	$article = mes_articles();
	rubriques($rubrique, $article);
	if($_GET['rub'] == 'cat' ) {
		include 'views/div/affichage_article.php';
		sidebar($article);
		if (!isset($_GET['cat'])) {
		
		$affiche = afficher_art_toute_categorie();
		affichage_article($affiche);
		

		}elseif($_GET['cat'] == 'foot') {
		$affiche = mes_articles_de_ma_cat();
		affichage_article($affiche);

		}elseif($_GET['cat'] == 'handball') {
		$affiche = mes_articles_de_ma_cat();
		affichage_article($affiche);

		}elseif($_GET['cat'] == 'basket') {
		$affiche = mes_articles_de_ma_cat();
		affichage_article($affiche);

		}elseif($_GET['cat'] == 'autre') {
		$affiche = mes_articles_de_ma_cat();
		affichage_article($affiche);

		}
	}elseif ($_GET['rub'] == 'reprises') {
		$affichage_reprise = affichage_reprise();
		include('views/template/mes_reprises.php');
	}elseif ($_GET['rub'] == 'uti') {
		$affichage_utilisateur = affichage_utilisateur();
		include('views/template/mes_utilisateurs.php');
	}
}
?>