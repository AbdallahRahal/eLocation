
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

if(isset($_POST['proposition'])) {
	
	include_once('controllers/handling_data/proposition.php');
}
include 'views/template/nav.php';
include 'views/template/rubrique.php';
include 'views/template/sidebar.php';
include_once 'models/requete.php';
if(!isset($_SESSION['compte']) || $_SESSION['compte'] == 'utilisateur' ) {
	if(isset($_SESSION['compte'])) {
		
		$rubrique=array("cat"=>"Catégorie", "loc"=>"Mes Locations", "proposition"=>"Mes Propositions", "vendre"=>"Vendre");
	
	}else{
	
	$rubrique=array("cat"=>"Catégorie");
	
	}
	
	$article = mes_categories();
	rubriques($rubrique, $article);
	if(isset($_GET['rub'])) {
		if($_GET['rub'] == 'laisser_avis' ) {
			$idloue = $_GET['idloue'];
			include_once('views/template/avis.php');
		}else if ($_GET['rub'] == 'avis') {
		
		avis($_POST);
		include 'views/template/confirmation_avis.php';
		}else if($_GET['rub'] == 'cat' ) {
		
			include 'views/div/affichage_article.php';
			sidebar($article);
		
			if (!isset($_GET['cat']) || empty($_GET['cat'])) {
			
				if(!isset($_GET['art'])) {
					$affiche = afficher_art_toute_categorie();
					$aff_cat = aff_cat();
					affichage_article($affiche ,$aff_cat);
				
				}else{
					if(isset($_POST['valider_modif_commentaire']) || isset($_POST['suppr_commentaire'] )) {
						modif_commentaire($_POST);
					}
					include 'views/div/affichage_page_vente.php';
					$article = info_article($_GET['art']);
                    $commentaire = commentaire_article($_GET['art']);
					affichage_page_vente($article, $commentaire);
				}
			
			}else{
				if(isset($_GET['art'])) {
					if(isset($_GET['louer_article'])) {
						if(isset($_GET['valider'])) {
							louer($_GET);
							include 'views/template/confirmation_location.php';
						}else{
						$point_relais = point_relais();
						include 'views/template/louer_article.php';
						}
						 
					}else{
						if(isset($_POST['valider_modif_commentaire']) || isset($_POST['suppr_commentaire'] )) {
							modif_commentaire($_POST);
						}
						include 'views/div/affichage_page_vente.php';
						$article = info_article($_GET['art']);
						$commentaire = commentaire_article($_GET['art']);
						affichage_page_vente($article, $commentaire);
					}
				}else{
					$affiche = mes_articles_de_ma_cat();
					$aff_cat = aff_cat();
					affichage_article($affiche ,$aff_cat);
				
				}
			}
		}else if ($_GET['rub'] == 'loc') {
			$affichage_location = affichage_location();
			include 'views/template/mes_locations.php';

		}else if ($_GET['rub'] == 'vendre') { 
		
			include 'views/div/form_proposition_vente.php';
			
		}else if($_GET['rub'] == 'proposition' ) {
		
			if(isset($_GET['accepter'])){
				update_rep_valide();
			}if(isset($_GET['reprop'])) {
				
				update_rep();
			}if(isset($_GET['refuser'])) {
				
				$_GET['supp_rep'] = $_GET['refuser'];
				delete_rep();
			}
				
			$affichage_reprise = affichage_prop_utilisateur();
			include 'views/template/mes_propositions.php';
		}
	
	}
}else if($_SESSION['compte'] == 'admin') {
	
	$rubrique=array("cat"=>"Catégorie", "uti"=>"Mes Utilisateurs", "reprises"=>"Mes Reprises", "rendre " => "Mes Locations", "mes_cat"=>"Mes Catégories", "mes_relais"=>"Mes Points Relais");
	$article = mes_categories();
	rubriques($rubrique, $article);
	
	if(isset($_GET['rub'])) {
	
		if($_GET['rub'] == 'cat' ) {
		
			include 'views/div/affichage_article.php';
			sidebar($article);
		
			if (!isset($_GET['cat']) || empty($_GET['cat'])) {

				if(!isset($_GET['art'])) {
					$affiche = afficher_art_toute_categorie();
					$aff_cat = aff_cat();
					affichage_article($affiche, $aff_cat);
			
				}else{
		
					if(isset($_POST['valider_modif_commentaire']) || isset($_POST['suppr_commentaire'] )) {
						modif_commentaire($_POST);
					}
					include 'views/div/affichage_page_vente.php';
					$article = info_article($_GET['art']);
					$suppr_com=suppr_com();
                    $commentaire = commentaire_article($_GET['art']);
				affichage_page_vente($article, $commentaire);		/*isma va en vacance*/		}
			
			}else{
				if(isset($_GET['art'])) {

					if(isset($_GET['modif'])) {

						if (isset($_POST['envoyer'])) {
						modifier_mon_article();
						}
						include 'views/template/modif_article.php';
						$article = info_article_modif($_GET['art']);
						modif_article($article);
					}else{
				
					if(isset($_POST['valider_modif_commentaire']) || isset($_POST['suppr_commentaire'] )) {
							modif_commentaire($_POST);
						}
						include 'views/div/affichage_page_vente.php';
						$article = info_article($_GET['art']);
						$commentaire = commentaire_article($_GET['art']);
						affichage_page_vente($article, $commentaire);				
					}
					
				}else{
				
					$affiche = mes_articles_de_ma_cat();
					$aff_cat = aff_cat();
					affichage_article($affiche ,$aff_cat);
				}
			}
		}else if($_GET['rub'] == 'reprises') {
			include('views/template/traiter_rep.php');
			include('views/template/supp_rep.php');
			if(isset($_GET['prix_proposer'])){
				update_prix();
			}if(isset($_GET['supp_rep'])) {
			
				delete_rep();
			
			}if(isset($_GET['ajout_rep'])) {
				$mes_categories = mes_categories();
				$affichage_ajout = affichage_ajout();
				include('views/template/ajout_article.php');
			}else if(isset($_GET['ajout_article'])) {
				ajout_article($_GET);
				
				include 'views/template/confirmation_ajout.php';
				
			}else{
			
				$affichage_reprise = affichage_reprise();
				include('views/template/mes_reprises.php');
			}
	
		}else if($_GET['rub'] == 'uti') {
		
			if(isset($_GET['modif_user']) && !isset($_GET['modif_mdp'])) {
				
				update_user();
			
			}else if(isset($_GET['modif_mdp'])) {
			
				update_user_mdp();
			}
			if(isset($_GET['modif'])) {
				
				$info_user = info_user();
				include('views/template/modifier_user.php');
		
			}else if(isset($_GET['supp'])) {
				
				delete_user();
				$affichage_utilisateur = affichage_utilisateur();
				include('views/template/mes_utilisateurs.php');
			
			}else{
				$affichage_utilisateur = affichage_utilisateur();
				include('views/template/mes_utilisateurs.php');
			
			}
		} else if($_GET['rub'] == 'mes_cat') {
			if(isset($_POST['ajout_cat'])) {
            
            	ajout_cat($_POST['nom']);
            
        	} else if(isset($_POST['suppr_cat'])) {
            
            	suppr_cat($_POST['suppr_cat']);
            
        	} else if(isset($_POST['valid_modif_cat'])) {
              
              valid_modif_cat($_POST['valid_modif_cat']);
              
        	}
            
        	$mes_categories = mes_categoriesA();
        	include('views/template/mes_categories.php');
            
		} else if($_GET['rub'] == 'mes_relais') {
             
            if(isset($_POST['ajout_relais'])) {
            
            	ajout_relais($_POST);			
          
	    	} else if(isset($_POST['suppr_relais'])) {
            
            	suppr_relais($_POST['suppr_relais']);
            
        	}else if(isset($_POST['valid_modif_relais'])) {
              
            	valid_modif_relais($_POST);
              
        	}
              
            $donnees_relais = donnees_relais();   
			include('views/template/mes_points_relais.php');
	    
		} else if($_GET['rub'] == 'rendre') {
			if(isset($_POST['action'] )) {
				rendre_article($_POST['action'], $_POST['art_id']);
			}
			$locations = locations();
			include 'views/template/rendre_article_modal.php';
			include('views/template/locations.php');
			aff_loc($locations);
		}
       
	}
}
?>