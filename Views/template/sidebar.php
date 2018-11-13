<?php
function sidebar ($arg) { ?>
<link href='https://getbootstrap.com/docs/4.1/examples/dashboard/dashboard.css' rel='stylesheet'>

<div style='margin-top: 30px;margin-left: 50px;' class='container-fluid'>
	<div class='row'>
    	<nav class='col-md-2 d-none d-md-block bg-light sidebar' style='margin-top: 109px;padding: 1px 0 0;'>
        	<div class='sidebar-sticky'>
            <?php 
            for ($i=0;$i<count($arg); $i++) { 
                $affichage = $arg[$i][0]." ".$arg[$i][1];
                $spec = $arg[$i][2];
                $rub = $_GET['rub']; ?>
                  <ul class='nav flex-column'>
                    <li class='nav-item'>
                      <a class='nav-link' href='index.php?page=accueil&&rub=<?=$rub?>&&spec=<?=$spec?>'><?=$affichage?></a>

                    </li>
                 </ul>

            <?php 
            }
            ?>
            
           </div>
        </nav>
<?php
}
?>