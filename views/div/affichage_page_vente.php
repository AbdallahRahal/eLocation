<?php
function affichage_page_vente ($art, $commentaire) { ?>
 <div class="card border-danger mb-3" style="margin-left: 20%;margin-top: 7%">
  <div class="card-header"><h5><?= $art['nom'] ?></h5></div>
  <img style="width: 300px;height: 300px;" src="views/img/<?=$art['lien_photo']?>">
  <div class="card-body text-danger">
    <h6 class="card-title">Description de l'article :</h6>
    <p class="card-text"><?= $art['description'] ?></p>
    <form action="" method="GET">
    <input type='hidden' value=<?=$_GET['page']?> name='page'>
    <input type='hidden' value=<?=$_GET['rub']?> name='rub'>
    <input type='hidden' value=<?=$_GET['cat']?> name='cat'>
    <input type='hidden' value=<?=$_GET['art']?> name='art'>
    <input type='hidden' value=<?=$art['id']?> name='louer_article'>

    

    <br><br>
    <?php
if(verif_article_dispo($_GET['art'])==false){
  echo' <p class="btn btn-danger btn-sm">Non disponible</p>';
}else{
    echo'<button type="submit" class="btn btn-danger btn-sm">Louer</button>';
}
?>
    </form> 
    <?php

echo "<br><br><br><h4>Commentaire : </h4> <br>";
    for($x =0;$x<count($commentaire); $x++) {
      echo $commentaire[$x]['commentaire']."<br>";
    }


?>
  </div>
<?php
} ?>
