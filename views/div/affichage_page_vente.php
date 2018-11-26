<?php
function affichage_page_vente ($art) { ?>
 <div class="album py-5 bg-light" style="margin-left: 224px;margin-top: 100px">
 <h2><?= $art['nom'] ?></h2>
 <br><img style="width: 300px" src="<?=$art['lien_photo']?>"><br>

 description article:
 <br>
 <p><?= $art['description'] ?></p>
 <input type="button" name="Louer" value="Louer">
<?php
} ?>
</div>
<?php
?>