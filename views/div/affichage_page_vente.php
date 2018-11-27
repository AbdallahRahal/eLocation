<?php
function affichage_page_vente ($art) { ?>
 <div class="card border-danger mb-3" style="margin-left: 20%;margin-top: 7%">
  <div class="card-header"><h5><?= $art['nom'] ?></h5></div>
  <img style="width: 300px;height: 300px;" src="<?=$art['lien_photo']?>">
  <div class="card-body text-danger">
    <h6 class="card-title">Description de l'article :</h6>
    <p class="card-text"><?= $art['description'] ?></p>
    <button type="submit" class="btn btn-danger btn-sm">Louer</button>
  </div>
<?php
} ?>


