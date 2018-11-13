<?php
function rubriques ($rubrique) { ?>

<div class="nav-scroller bg-white shadow-sm">
      <nav class="nav nav-underline">
      	<?php 
      	
      	foreach ($rubrique as $key => $value) { ?>
      		<a class="nav-link active" href="index.php?page=accueil&&rub=<?= $key?>" > <?=$value?></a>
      	<?php
      	}
		?>
    
     </nav>
</div>
<?php
}
?>