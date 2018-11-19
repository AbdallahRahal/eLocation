<?php

if(empty($_POST['identifiant'])){ 

}elseif(empty($_POST['mdp'])){ 

}else{
	include_once 'models/requete.php';
    $result =  connexion($_POST['identifiant'],$_POST['mdp']);
    if($result != NULL){
        $_SESSION['compte']= $result['statut'];
        $_SESSION['pseudo'] = $result['pseudo'];         
    }else{ 
			require_once 'views/template/login_form.php'; ?>

		<script> 
			$('#exampleModal').modal('show');
			$('#alerterror').show();
		</script>
	<?php	
	 }
}

?>