<?php 
session_start();
include 'Views/template/nav.php';
//si l'user est un prof
if($_SESSION['compte'] == '2') {

	//la navbar s'affiche
	include 'Views/template/rubrique.php';	
	include 'Models/get.php';
	
	$rubrique = array('d_el' => 'Mes élèves','d_gr' => 'Les Groupes ','cr_el' => 'Créer eleve','cr_gr' => 'Créer groupe');
	
	rubriques($rubrique);
	//la page d'accueil s'affiche
	if(!isset($_GET['rub']) ) {
		echo "Bienvenue ".$_SESSION['nom'];
	
	} elseif($_GET['rub'] == 'd_el' ) {
	
	include 'Views/template/sidebar.php';

		$eleve = liste_eleve();
		sidebar($eleve);
		if(isset($_GET['spec'])) {
			
			include 'Views/div/display_user_informations.php';

			if(!isset($_GET['send'])) {

				$lien = get_user_informations();
				display_user_informations($lien);

			}else{

				include 'Models/maj.php';
				echo "gagner";

				edit_user_info($_GET['remp_nom'], $_GET['remp_prenom']); ?>
				<script>alert("informations modifiées avec succès");</script> <?php
				$lien = get_user_informations();
				display_user_informations($lien);
			
			}

		}
	//affichage de la rubique creer qcm
	} elseif ($_GET['rub'] == 'd_gr') {
		
	include 'Views/template/sidebar.php';
	include 'Views/div/display_groupe_details.php';

		
		$groupe = liste_groupe();
		sidebar($groupe);
		if(isset($_GET['spec'])) {

			if(!isset($_GET['send'])) {

				$lien = get_group_informations();
				$eleve = liste_eleve();
				display_groupe_details($lien, $eleve);

			} else {
				
				include 'Models/insert.php';

				add_user_in_groupe($_GET['spec'], $_GET['add_eleve']); ?>
				<script>alert("user crer avec succès");</script> <?php
				$lien = get_group_informations();
				$eleve = liste_eleve();
				display_groupe_details($lien, $eleve);
			}
		}

	//affichage de la rubique profil
	}elseif ($_GET['rub'] == 'cr_el') {
		
		include 'Views/div/register.html';

		if(isset($_POST['nom'])) {

		include 'Models/insert.php';
			$datas = array($_POST['nom'],$_POST['prenom'], $_POST['naissance']);
			insert_user($datas);
		}



	}elseif ($_GET['rub'] == 'cr_gr') {
			

		if(isset($_GET['add_gr'])) {

		include 'Models/insert.php';

		add_groupe($_GET['groupe'],$_GET['responsable'], $_GET['eleve']);

		}else{

		include 'Views/div/new_groupe.php';
		$eleve = liste_eleve();
		$Responsable = liste_prof();
		display_new_groupe($eleve, $Responsable);
		
		}

		


	}

/* //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////*/



} else if($_SESSION['compte'] == '1') {

	$rubrique = array('d_qcm' => 'Passer QCM','resultats' => 'Mes resultats','entrainement' => 'Entrainement','profil' => 'Mon compte');
	include 'Views/template/rubrique.php';
	include 'Models/get.php';
echo "partie eleve";

}
?>