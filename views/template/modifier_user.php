<div class="container" style="max-width: 50%;margin-top: 6%">
<?php while($donneesAffichage = $info_user->fetch()){ ?>
<h3>Modification de <?=$donneesAffichage['pseudo']?>:</h3>
    <form action="index.php" method="GET">
    <input type='hidden' name='page' value='accueil'>
          <input type='hidden' name='rub' value='uti'>
          <input type='hidden' name='id' value='<?=$donneesAffichage['id']?>'>
        <div class="form-group">

            <label for="recipient-name" class="col-form-label">Mail :</label>
            <input required type="mail" class="form-control" name="mail" id="recipient-mail" value="<?=$donneesAffichage['mail']?>">

          </div>
          <div class="form-group">

            <label for="recipient-name" class="col-form-label">Pseudo :</label>
            <input required type="text" class="form-control" name="pseudo" id="recipient-pseudo" value="<?=$donneesAffichage['pseudo']?>">

          </div>
          <div class="form-group">


            <label for="recipient-name" class="col-form-label">Mot de passe :</label>
            <input type="text" class="form-control" name="mdp" id="recipient-mail" placeholder="Nouveau mot de passe">
            <div class="custom-control custom-checkbox my-1 mr-sm-2">
              <input type="checkbox" class="custom-control-input" id="customControlInline" name="modif_mdp" value="true">
              <label class="custom-control-label" for="customControlInline">Cochez si le mot de passe est modifié</label>
             </div>
          </div>
          <div class="form-group">

            <label for="recipient-name" class="col-form-label">Prenom :</label>
            <input required type="text" class="form-control" name="prenom" id="recipient-prenom" value="<?=$donneesAffichage['prenom']?>">

          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Nom :</label>
            <input required type="text" class="form-control" name="nom" id="message-nom" value="<?=$donneesAffichage['nom']?>">
          </div>
          <div class="form-group">
             <label for="recipient-name" class="col-form-label">Adresse postale :</label>
             <input required type="text" class="form-control" name="adresse" id="recipient-prenom" value="<?=$donneesAffichage['adresse']?>">
          </div>
          <div class="form-group">
             <label for="recipient-name" class="col-form-label">Code Postale :</label>
             <input required type="number" max="99999" min="00000" class="form-control" name="cp" id="recipient-prenom"  value="<?=$donneesAffichage['cp']?>">
          </div>
          <div class="form-group">
             <label for="recipient-name" class="col-form-label">Ville :</label>
             <input required type="text" class="form-control" name="ville" id="recipient-prenom"  value="<?=$donneesAffichage['ville']?>">
          </div>

          <button type="submit" name="modif_user" value ="true" class="btn btn-danger btn-sm">Modifier</button>
        </div>
<?php } ?>
    </form>
</div>

