<?php
function sidebar ($arg) { ?>
<link href='https://getbootstrap.com/docs/4.1/examples/dashboard/dashboard.css' rel='stylesheet'>

<div class='container-fluid'>
	<div class='row'>
        <nav class='col-md-2 d-none d-md-block bg-light sidebar' style='margin-top: 7%;padding: 1px 0 0;z-index: 50;'>
        	<div class='sidebar-sticky'>
            <?php 
                foreach ($arg as $key => $value) { ?>
                  <ul class='nav flex-column'>
                    <li class='nav-item'>
                        <a class="nav-link active" href="index.php?page=accueil&&rub=<?=$_GET['rub']?>&&cat=<?=$value?>" > <?=$value?></a>
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