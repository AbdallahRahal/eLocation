<?php 

include('models/requete.php');

if(isset($_POST['connexion'])) {
	
	include_once('controllers/handling_data/login.php');

}else if(isset($_POST['inscription']) && $_POST['inscription'] == "true" ) {
	
	include_once('controllers/handling_data/register.php');
	register();  

}else if(isset($_POST['modification'])) {
    
    include('controllers/handling_data/modification.php');

}

if(isset($_SESSION['compte'])) {
	
	include 'views/template/settings_form.php';

}else{
	
	include 'views/template/login_form.php';
	include 'views/template/register_form.php';

}

if(isset($_GET['proposition'])) {
	
	include_once('controllers/handling_data/proposition.php');
    
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
	
	$article = mes_categories();
	rubriques($rubrique, $article);

	if(isset($_GET['rub'])) {
		
		if($_GET['rub'] == 'cat' ) {
		
			include 'views/div/affichage_article.php';
			sidebar($article);
		
			if (!isset($_GET['cat']) || empty($_GET['cat'])) {
			
				if(!isset($_GET['art'])) {

					$affiche = afficher_art_toute_categorie();
					affichage_article($affiche);
				
				}else{
			
					include 'views/div/affichage_page_vente.php';
					$article = info_article($_GET['art']);
					affichage_page_vente($article);
				
				}

			}else{
				
				if(isset($_GET['art'])) {

					if(isset($_GET['louer_article'])) {
						$point_relais = point_relais();
						include 'views/template/louer_article.php';
						if(isset($_GET['valide'])) {
							


						}
						
						/*
						if(verif_article_dispo($_GET['louer_article'])==false){
							include 'views/template/louer_article.php';
							if(isset($_GET['valider'])){
								//$louer_article_valide = louer_article_valide();
							}
						}*/
					}else{
						include 'views/div/affichage_page_vente.php';
						$article = info_article($_GET['art']);
						affichage_page_vente($article);
					}
				
				}else{
					$affiche = mes_articles_de_ma_cat();
					affichage_article($affiche);
				}
			}
		}else if ($_GET['rub'] == 'loc') {
		
			$affichage_location = affichage_location();
			include 'views/template/mes_locations.php';
	
		}else if ($_GET['rub'] == 'vendre') { 
		
			include 'views/div/form_proposition_vente.php';
			
		}
	
	}
}else if($_SESSION['compte'] == 'admin') {
	
	$rubrique=array("cat"=>"Catégorie","reprises"=>"Mes Reprises","uti"=>"Mes Utilisateurs");
	$article = mes_categories();
	rubriques($rubrique, $article);
	
	if(isset($_GET['rub'])) {
	
		if($_GET['rub'] == 'cat' ) {
		
			include 'views/div/affichage_article.php';
			sidebar($article);
		
			if (!isset($_GET['cat']) || empty($_GET['cat'])) {
		
				if(!isset($_GET['art'])) {

					$affiche = afficher_art_toute_categorie();
					affichage_article($affiche);
			
				}else{
		
					include 'views/div/affichage_page_vente.php';
					$article = info_article($_GET['art']);
					affichage_page_vente($article);

				}

			}else{

				if(isset($_GET['art'])) {
		
				include 'views/div/affichage_page_vente.php';
				$article = info_article($_GET['art']);
				affichage_page_vente($article);
			
				}else{
				
					$affiche = mes_articles_de_ma_cat();
					affichage_article($affiche);

				}

			}

		}else if($_GET['rub'] == 'reprises') {
			
			$affichage_reprise = affichage_reprise();
			include('views/template/mes_reprises.php');
	
		}else if($_GET['rub'] == 'uti') {
		
			if(isset($_GET['modif_user']) && !isset($_GET['modif_mdp'])) {
				
				$update_user = update_user();
			
			}else if(isset($_GET['modif_mdp'])){
			
				$update_user_mdp = update_user_mdp();

			}
			if(isset($_GET['modif'])) {
				
				$info_user = info_user();
				include('views/template/modifier_user.php');
		
			}else if(isset($_GET['supp'])) {
				
				$delete_user = delete_user();
				$affichage_utilisateur = affichage_utilisateur();
				include('views/template/mes_utilisateurs.php');
			
			}else{

				$affichage_utilisateur = affichage_utilisateur();
				include('views/template/mes_utilisateurs.php');
			
			}
		}
	}
}
?>