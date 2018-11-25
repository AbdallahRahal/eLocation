<?php
function rubriques ($rubrique, $article) { ?>

<div class="nav-scroller bg-white shadow-sm" style="margin-top:1.5%; position: fixed;width: 100%;z-index: 51;">
      <nav class="nav nav-underline" style="">
      	<ul style="margin: 0px; padding: 0px;list-style: none;">
      	<?php 
      	
      	foreach ($rubrique as $key => $value) {
      		if ($value == "Catégorie") { ?>

	      		<li style="float: left;text-align: center;" ><a class="nav-link active" href="index.php?page=accueil&&rub=cat" > <?=$value?></a>
					<ul> <?php 

					foreach ($article as $cle => $valeur) { ?>
						
						<li >
							<a class="nav-link active" href="index.php?page=accueil&&rub=cat&&cat=<?=$valeur?>" > <?=$valeur?></a>
						</li>
					<?php
					} ?>
					</ul>
				</li>
      		<?php
      		 }else{ ?>
      		<li style="float: left;text-align: center;"><a class="nav-link active" href="index.php?page=accueil&&rub=<?= $key?>" > <?=$value?></a></li>
      	<?php
      		 }
      	}
		?>
    	</ul>
     </nav>
</div>

<?php
}
?>