<?php while($donneesAffichage = $affichage_ajout->fetch()){ ?>

<div class="container" style="max-width: 50%;margin-top: 6%">
<h3>Ajout de l'article <?=$donneesAffichage['ID']?>:</h3>
    <form action="index.php" method="GET">
    <input type='hidden' name='page' value='accueil'>
          <input type='hidden' name='rub' value='reprises'>
        <div class="form-group">

            <label for="recipient-name" class="col-form-label">Titre :</label>
            <input class="form-control" name="titre" value="<?=$donneesAffichage['Nom']?>">

          </div>
          <div class="form-group">

            <label for="recipient-name" class="col-form-label">Prix : <?=$donneesAffichage['Prix']?></label>

          </div>
          <div class="form-group">


            <label for="recipient-name" class="col-form-label">Description :</label>
            <input type="text-area" class="form-control" name="description" value="<?=$donneesAffichage['Description']?>">

          </div>
          <div class="form-group">

            <label for="recipient-name" class="col-form-label">Photo :</label>
            <?=$donneesAffichage['Photo']?>

          </div>
          <div class="form-group">
          <label for="recipient-name" class="col-form-label">Catégorie :</label>
          <?php 
          $i = 1;
          while($i<= count($mes_categories)){ ?>
          

          <div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck<?=$i?>" name="propo_cat" value="<?=$i?>">
  <label class="custom-control-label" for="customCheck<?=$i?>"><?=$mes_categories[$i]?></label>
</div><?php $i++;
};?>
            

          </div>

          <button type="submit" name="ajout_article" value ="<?=$donneesAffichage['ID']?>" class="btn btn-danger btn-sm">Ajouter</button>
        </div>
    </form>
</div>
<?php 

}; ?>