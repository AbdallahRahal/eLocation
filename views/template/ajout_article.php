<?php while($donneesAffichage = $affichage_ajout->fetch()){ ?>

<div class="container" style="max-width: 50%;margin-top: 6%">
<h3>Ajout de l'article <?=$donneesAffichage['Nom']?>:</h3>
    <form action="index.php" method="GET">
    <input type='hidden' name='page' value='accueil'>
          <input type='hidden' name='rub' value='reprises'>
        <div class="form-group">

            <label for="recipient-name" class="col-form-label">Titre :</label>
            <input class="form-control" name="titre" value="<?=$donneesAffichage['Nom']?>">

          </div>
          <div class="form-group">

            <label for="recipient-name" class="col-form-label">Prix/j :</label>
            <input required type='number' name="prix" value=<?=$donneesAffichage['Prix']?>>
          </div>
          <div class="form-group">


            <label for="recipient-name" class="col-form-label">Description :</label>
            <input type="text-area" class="form-control" name="description" value="<?=$donneesAffichage['Description']?>">

          </div>
          <div class="form-group">

            <label for="recipient-name" class="col-form-label">Photo :</label>
            <?=$donneesAffichage['Photo']?>
            <input type='hidden' name='photo' value=<?=$donneesAffichage['Photo']?> >

          </div>
          <div class="form-group">
          <label for="recipient-name" class="col-form-label">Catégorie :</label>
          <?php 
          $i = 1;
         foreach($mes_categories as $key => $value){ ?>
          

          <div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck<?=$key?>" name="cat[]" value="<?=$key?>">
  <label class="custom-control-label" for="customCheck<?=$key?>"><?=$value?></label>
</div><?php }?>            

          </div>
          <div class="form-group">


          <label for="recipient-name" class="col-form-label">Etat :</label>
          <select  class="form-control" name="etat" >
            <option value = neuf>Neuf</option>
            <option value = abime>Abimé</option>
            </select>
          </div>
          <input type='hidden' name='uti' value=<?=$donneesAffichage['Utilisateur'];?>>
          <button type="submit" name="ajout_article" value ="<?=$donneesAffichage['ID']?>" class="btn btn-danger btn-sm">Ajouter</button>
        </div>
    </form>
</div>
<?php 

}; ?>