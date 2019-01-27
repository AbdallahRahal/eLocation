<?php
function affichage_page_vente ($art, $commentaire) { ?>
 <div class="card border-danger mb-3" style="margin-left: 20%;margin-top: 7%">
  <div class="card-header"><h5><?= $art['nom'] ?></h5></div>
  <img style="width: 300px;height: 300px;" src="<?=$art['lien_photo']?>">
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
  echo" <tr><th><h4>Commentaire : </h4></th><th>moyenne = ".$moy."</th><th></th></tr>";
}
echo"<form action='' method=POST>";
if(!empty($commentaire)) {

    for($x=0;$x<count($commentaire); $x++){

      if($_SESSION['compte'] == 'admin') {
            echo "<tr><td>".$commentaire[$x]['commentaire']."</td><td>".$commentaire[$x]['note']."</td><td><button type=submit name='suppr_commentaire' value =".$commentaire[$x]['louer_id']." >Supprimer</button></td></tr>";
        
      }elseif(isset($_SESSION['id']) && $_SESSION['id'] == $commentaire[$x]['utilisateur_id']){

        if(isset($_POST['modif_commentaire']) && $_POST['modif_commentaire'] ==$commentaire[$x]['louer_id'] ){

          echo "<tr><td><input type=text required name=nouveauComm value=".$commentaire[$x]['commentaire']."></td><td>
          <Select  name=nouveauNote>  >
          <option selected  value=".$commentaire[$x]['note']."> ".$commentaire[$x]['note']."</option>
          <option value=1 >1</option>
          <option value=2 >2</option>
          <option value=3 >3</option>
          <option value=4 >4</option>
          <option value=5 >5</option>
          
          </select></td><td>
          <button type=submit value= ".$commentaire[$x]['louer_id']." name='valider_modif_commentaire' >Valider</button> ";
    
        }else{
          echo "<tr><td>".$commentaire[$x]['commentaire']."</td><td>".$commentaire[$x]['note']." </td><td><button type=submit name='modif_commentaire' value =".$commentaire[$x]['louer_id']." >Modifier</button><button type=submit name='suppr_commentaire' value =".$commentaire[$x]['louer_id']." >Supprimer</button> </td></tr>";
        }
        
      }else{
        echo "<tr><td>".$commentaire[$x]['commentaire']."</td><td>".$commentaire[$x]['note']."</td><td></td></tr>";
      }
      
    }
    
}else{
        echo "cet article n'as pas de commentaire";
}


echo"</form></table>";

} ?>

