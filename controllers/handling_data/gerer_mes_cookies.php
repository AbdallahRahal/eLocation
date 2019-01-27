<?php
if(isset($_GET['art']) && isset($_GET['cat'])) {
	
	$o = 0;
	for ($i = 0; $i < 6; $i++) {
		if(!isset($_COOKIE['visites'][$i])) {
		    setcookie ("visites[$i][id_art]",$_GET['art'] ,time() + 7*24*3600);
			break;
		}else{
			$o++;
		}
	}
	if($o == 8) {
		unset($_COOKIE['visites'][0]);
    setcookie("visites[0][id_art]", '', time() - 3600, '/');
    setcookie ("visites[0][id_art]",$_GET['art'] ,time() + 7*24*3600);
	
	}

}

?>