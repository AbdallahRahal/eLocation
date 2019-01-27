<?php
function sidebar ($arg) { ?>
<link href='https://getbootstrap.com/docs/4.1/examples/dashboard/dashboard.css' rel='stylesheet'>

<div class='container-fluid'>
	<div class='row'>
        <nav class='col-md-2 d-none d-md-block bg-light sidebar' style='margin-top: 6.5%;padding: 1px 0 0;z-index: 50;'>
        	<div class='sidebar-sticky'>
            <?php 
                foreach ($arg as $key => $value) { ?>
                  <ul class='nav flex-column'>
                    <li class='nav-item'>
                        <a class="nav-link active" style="color: #ef7f1b;" href="index.php?page=accueil&rub=<?=$_GET['rub']?>&cat=<?=$key?>"><h4><?=$value?></h4></a>
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