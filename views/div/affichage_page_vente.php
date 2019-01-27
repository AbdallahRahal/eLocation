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

echo' prix =  '.($art['prix_journee']-($art['promo']/100)*$art['prix_journee']).'€/jour';
if($art['promo']>0) {
  echo 'Réduction de '.$art['promo'].' %';
} 
?> 
    </form> 
    <?php
echo "<br><br><br> <br><table class='table'>";


if(!empty($commentaire)) {
  $y=0;
  $moy=0;
  for($x=0;$x<count($commentaire); $x++) {
    $moy+=$commentaire[$x]['note'];
    $y++;
  }
  $moy=$moy/$y;
  echo" <tr><th><h4>Commentaire : </h4></th><th>moyenne = ".$moy."</th></tr>";
}

if(!empty($commentaire)) {
if (!isset($_GET['compte'])) { 
    for($x=0;$x<count($commentaire); $x++) {
      echo "<tr><td>".$commentaire[$x]['commentaire']."</td><td>".$commentaire[$x]['note']."</td></tr>";
    }else{
    echo "cet article n'as pas de commentaire";
    }
echo"</table>";
}elseif($_SESSION['compte'] == 'admin') {

    for($x=0;$x<count($commentaire); $x++) {
      echo "<tr><td>".$commentaire[$x]['commentaire']."</td><td>".$commentaire[$x]['note']."test<button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button></td></tr>";
    }else{
    echo "cet article n'as pas de commentaire";
    }
echo"</table>";
}elseif($_SESSION['compte'] == 'utilisateur') {
    for($x=0;$x<count($commentaire); $x++) {
      echo "<tr><td>".$commentaire[$x]['commentaire']."</td><td>".$commentaire[$x]['note']."</td></tr>";
    }else{
    echo "cet article n'as pas de commentaire";
    }
echo"</table>";
}
?>
  </div>
<?php
} ?>

